<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Category Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(100)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(120)
                                    ->unique(Category::class, 'slug', ignoreRecord: true)
                                    ->helperText('Auto-generated from name. You may customize it.'),

                                Select::make('parent_id')
                                    ->label('Parent Category')
                                    ->relationship('parent', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->placeholder('None (Top-level category)')
                                    ->nullable(),

                                TextInput::make('icon')
                                    ->maxLength(100)
                                    ->helperText('Optional icon class (e.g. heroicon name)'),

                                Textarea::make('description')
                                    ->columnSpanFull()
                                    ->rows(3),

                                FileUpload::make('image')
                                    ->disk('public')
                                    ->directory('categories')
                                    ->visibility('public')
                                    ->image()
                                    ->imageEditor()
                                    ->columnSpanFull(),
                            ]),
                    ]),

                Section::make('Display & Ordering')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('sort_order')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Lower number appears first'),

                                Toggle::make('is_active')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),

                Section::make('SEO')
                    ->collapsed()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextInput::make('meta_title')
                                    ->maxLength(160)
                                    ->helperText('Ideal length: 50–60 characters'),

                                Textarea::make('meta_description')
                                    ->rows(3)
                                    ->maxLength(320)
                                    ->helperText('Ideal length: 150–160 characters'),

                                TagsInput::make('meta_keywords')
                                    ->placeholder('Add keyword and press Enter')
                                    ->helperText('Separate keywords by pressing Enter'),
                            ]),
                    ]),
            ]);
    }
}
