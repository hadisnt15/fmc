<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')
                    ->default(Auth::id()),
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => 
                        $set('slug', Str::slug($state))
                    ),
                TextInput::make('slug')
                    ->readOnly()
                    ->unique(ignoreRecord: true),
                FileUpload::make('thumbnail')  
                    ->image()
                    ->directory('article/thumbnail')
                    ->disk('public')
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('images')
                    ->multiple()
                    ->reorderable()
                    ->directory('article/image')
                    ->disk('public'),
                Select::make('tags')
                    ->relationship('tags', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),
                DateTimePicker::make('published_at')
                    ->seconds(false),
                Toggle::make('is_published')
                    ->label('Published'),
            ]);
    }
}
