<?php

namespace App\Filament\Resources\PageSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class PageSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Settings')
                    ->tabs([
                        Tabs\Tab::make('General')
                            ->schema([
                                TextInput::make('site_title')
                                    ->required()
                                    ->maxLength(255),
                                FileUpload::make('site_logo')
                                    ->image()
                                    ->directory('settings')
                                    ->imageEditor(),
                                FileUpload::make('site_favicon')
                                    ->image()
                                    ->directory('settings')
                                    ->imageEditor(),
                            ]),
                        Tabs\Tab::make('SEO')
                            ->schema([
                                TextInput::make('seo_title')
                                    ->maxLength(255),
                                Textarea::make('seo_description')
                                    ->rows(3)
                                    ->columnSpanFull(),
                                Textarea::make('seo_keywords')
                                    ->rows(3)
                                    ->helperText('Comma separated keywords')
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('Contact')
                            ->schema([
                                TextInput::make('phone_number')
                                    ->tel(),
                                TextInput::make('email')
                                    ->email(),
                                Textarea::make('address')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
