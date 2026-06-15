<?php

namespace App\Filament\Resources\HomeBanners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeBannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Banner Content')
                    ->description('Text and call-to-action shown on the banner.')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->placeholder('e.g. Discover Premium Furniture'),

                        Textarea::make('subtitle')
                            ->rows(2)
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->placeholder('e.g. Timeless designs crafted with care for every home.'),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('button_text')
                                    ->maxLength(50)
                                    ->placeholder('e.g. Shop Now'),

                                TextInput::make('button_url')
                                    ->url()
                                    ->maxLength(255)
                                    ->placeholder('https://example.com/shop'),
                            ]),
                    ]),
                Section::make('Banner Image')
                    ->description('Upload the main visual for this banner slide.')
                    ->schema([
                        FileUpload::make('image')
                            ->disk('public')
                            ->directory('home-banners')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '21:9',
                                '4:3',
                            ])
                            ->required()
                            ->columnSpanFull()
                            ->helperText('Recommended size: 1920 × 800px (JPG or WebP)'),
                    ]),

                Section::make('Display Settings')
                    ->description('Control visibility and ordering of this banner.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('sort_order')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Lower number appears first (e.g. 1, 2, 3…)'),

                                Toggle::make('is_active')
                                    ->label('Active')
                                    ->helperText('Inactive banners are hidden from the site.')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
