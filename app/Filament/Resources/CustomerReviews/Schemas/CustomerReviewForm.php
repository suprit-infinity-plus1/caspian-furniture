<?php

namespace App\Filament\Resources\CustomerReviews\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CustomerReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Review Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('reviewer_name')
                                    ->required()
                                    ->maxLength(100),
                                TextInput::make('rating')
                                    ->required()
                                    ->numeric()
                                    ->default(5)
                                    ->helperText('Rating must be between 1 and 5'),
                                FileUpload::make('reviewer_image')
                                    ->disk('public')
                                    ->directory('reviewers')
                                    ->visibility('public')
                                    ->image()
                                    ->imageEditor()
                                    ->columnSpanFull(),
                                Textarea::make('review_text')
                                    ->columnSpanFull(),
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
            ]);
    }
}
