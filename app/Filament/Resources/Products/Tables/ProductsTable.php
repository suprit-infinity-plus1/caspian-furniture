<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->disk('public')
                    ->size(56)
                    ->defaultImageUrl(asset('images/placeholder.png')),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->sku ? 'SKU: ' . $record->sku : null),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->badge()
                    ->placeholder('—'),

                TextColumn::make('price')
                    ->money('USD')
                    ->sortable(),

                TextColumn::make('sale_price')
                    ->money('USD')
                    ->sortable()
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('on_sale')
                    ->label('Sale')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('stock_quantity')
                    ->label('Stock')
                    ->sortable()
                    ->badge()
                    ->color(fn ($state) => $state > 10 ? 'success' : ($state > 0 ? 'warning' : 'danger')),

                ToggleColumn::make('in_stock')
                    ->label('In Stock'),

                ToggleColumn::make('is_featured')
                    ->label('Featured'),

                ToggleColumn::make('is_new_arrival')
                    ->label('New'),

                ToggleColumn::make('is_active')
                    ->label('Active'),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload(),

                TernaryFilter::make('is_active')
                    ->label('Active'),

                TernaryFilter::make('is_featured')
                    ->label('Featured'),

                TernaryFilter::make('is_new_arrival')
                    ->label('New Arrival'),

                TernaryFilter::make('on_sale')
                    ->label('On Sale'),

                TernaryFilter::make('in_stock')
                    ->label('In Stock'),

                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
    }
}
