<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PuntaCanaPostResource\Pages;
use App\Models\PuntaCanaPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\HtmlString;

class PuntaCanaPostResource extends Resource
{
    protected static ?string $model = PuntaCanaPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Punta Cana Airport Transfers';

    protected static ?string $navigationLabel = 'Blog Posts';

    protected static ?string $modelLabel = 'Post';

    protected static ?string $pluralModelLabel = 'Posts';

    protected static ?string $slug = 'punta-cana-posts';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('General')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('title')
                                ->label('Title')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('featured_image')
                                ->label('Featured Image URL')
                                ->url()
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->helperText(
                                    'Paste the ImageKit.io image URL here'
                                ),

                            Forms\Components\Placeholder::make(
                                'featured_image_preview'
                            )
                                ->label('Preview')
                                ->content(function (Forms\Get $get) {
                                    $url = $get('featured_image');

                                    if (
                                        ! is_string($url)
                                        || ! filter_var($url, FILTER_VALIDATE_URL)
                                        || ! in_array(
                                            strtolower(
                                                (string) parse_url(
                                                    $url,
                                                    PHP_URL_SCHEME
                                                )
                                            ),
                                            ['http', 'https'],
                                            true
                                        )
                                    ) {
                                        return 'No image selected';
                                    }

                                    return new HtmlString(
                                        '<img src="' . e($url) . '"'
                                        . ' alt="Featured image preview"'
                                        . ' style="max-width:250px;'
                                        . 'border-radius:12px;'
                                        . 'margin-top:10px;">'
                                    );
                                }),

                            TextInput::make('slug')
                                ->label('Slug')
                                ->required()
                                ->maxLength(255)
                                ->unique(ignoreRecord: true),
                        ]),

                    Grid::make(2)
                        ->schema([
                            Select::make('language')
                                ->label('Language')
                                ->options([
                                    'en' => 'English',
                                    'es' => 'Español',
                                ])
                                ->default('en')
                                ->required()
                                ->live(),

                            Select::make('group_id')
                                ->label('Traducción de')
                                ->options(function () {
                                    return PuntaCanaPost::query()
                                        ->where('language', 'en')
                                        ->orderBy('title')
                                        ->pluck('title', 'id');
                                })
                                ->searchable()
                                ->preload()
                                ->placeholder(
                                    'Selecciona el artículo en inglés'
                                )
                                ->visible(
                                    fn (Forms\Get $get): bool =>
                                        $get('language') === 'es'
                                )
                                ->rule(function (
                                    Forms\Get $get,
                                    ?PuntaCanaPost $record
                                ) {
                                    return function (
                                        string $attribute,
                                        $value,
                                        \Closure $fail
                                    ) use ($get, $record) {
                                        if (
                                            $get('language') !== 'es'
                                            || empty($value)
                                        ) {
                                            return;
                                        }

                                        $englishPostExists =
                                            PuntaCanaPost::query()
                                                ->whereKey($value)
                                                ->where('language', 'en')
                                                ->exists();

                                        if (! $englishPostExists) {
                                            $fail(
                                                'Selecciona un artículo en inglés '
                                                . 'de Punta Cana Airport Transfers.'
                                            );

                                            return;
                                        }

                                        $query = PuntaCanaPost::query()
                                            ->where('group_id', $value)
                                            ->where('language', 'es');

                                        if ($record) {
                                            $query->where(
                                                'id',
                                                '!=',
                                                $record->id
                                            );
                                        }

                                        if ($query->exists()) {
                                            $fail(
                                                'Ya existe una versión en español '
                                                . 'para este artículo.'
                                            );
                                        }
                                    };
                                }),
                        ]),

                    Toggle::make('is_published')
                        ->label('Published')
                        ->default(true),
                ]),

            Section::make('Contenido')
                ->schema([
                    Textarea::make('excerpt')
                        ->label('Excerpt')
                        ->rows(3),

                    Textarea::make('content')
                        ->required()
                        ->rows(18)
                        ->autosize()
                        ->columnSpanFull(),
                ]),

            Section::make('SEO')
                ->schema([
                    TextInput::make('meta_title')
                        ->label('Meta Title')
                        ->maxLength(255),

                    Textarea::make('meta_description')
                        ->label('Meta Description')
                        ->rows(3),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->label('Image'),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('language')
                    ->badge()
                    ->sortable(),

                TextColumn::make('group_id')
                    ->label('Grupo')
                    ->sortable(),

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),

                TextColumn::make('published_at')
                    ->label('Published At')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
