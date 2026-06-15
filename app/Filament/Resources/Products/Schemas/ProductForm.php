<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(200)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(220)
                                    ->unique(Product::class, 'slug', ignoreRecord: true)
                                    ->helperText('Auto-generated from name. You may customize it.'),

                                Select::make('category_id')
                                    ->label('Category')
                                    ->relationship('category', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->nullable(),

                                TextInput::make('sku')
                                    ->label('SKU')
                                    ->maxLength(100)
                                    ->unique(Product::class, 'sku', ignoreRecord: true)
                                    ->helperText('Stock Keeping Unit (optional)'),

                                Textarea::make('short_description')
                                    ->columnSpanFull()
                                    ->rows(2)
                                    ->maxLength(500),

                                RichEditor::make('description')
                                    ->columnSpanFull()
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ]),
                            ]),
                    ]),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->label('Main Thumbnail')
                            ->disk('public')
                            ->directory('products/thumbnails')
                            ->visibility('public')
                            ->image()
                            ->imageEditor(),

                        FileUpload::make('gallery_images')
                            ->label('Gallery Images')
                            ->disk('public')
                            ->directory('products/gallery')
                            ->visibility('public')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->appendFiles(),
                    ]),

                Section::make('Pricing')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('$')
                                    ->default(0),

                                TextInput::make('sale_price')
                                    ->numeric()
                                    ->prefix('$')
                                    ->nullable(),

                                Toggle::make('on_sale')
                                    ->label('On Sale')
                                    ->default(false)
                                    ->inline(false),
                            ]),
                    ]),

                Section::make('Inventory')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('stock_quantity')
                                    ->required()
                                    ->numeric()
                                    ->default(0),

                                Toggle::make('in_stock')
                                    ->label('In Stock')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),

                Section::make('Product Attributes')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('material')
                                    ->maxLength(100)
                                    ->placeholder('e.g. Solid Oak, Velvet'),

                                TextInput::make('dimensions')
                                    ->maxLength(100)
                                    ->placeholder('e.g. 120 x 80 x 75 cm'),

                                TextInput::make('weight')
                                    ->maxLength(50)
                                    ->placeholder('e.g. 25 kg'),

                                TextInput::make('color')
                                    ->maxLength(100)
                                    ->placeholder('e.g. Walnut Brown'),

                                TagsInput::make('tags')
                                    ->columnSpanFull()
                                    ->placeholder('Add tags and press Enter'),
                            ]),
                    ]),

                Section::make('Visibility & Display')
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

                                Toggle::make('is_featured')
                                    ->label('Featured Product')
                                    ->default(false)
                                    ->inline(false),

                                Toggle::make('is_new_arrival')
                                    ->label('New Arrival')
                                    ->default(false)
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
