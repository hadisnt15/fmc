<?php

namespace App\Filament\Resources\StudyPrograms\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class StudyProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => 
                        $set('slug', Str::slug($state))
                    ),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Select::make('accreditation')
                    ->options([
                        'A' => 'Unggul',
                        'B' => 'Baik Sekali',
                        'C' => 'Baik',
                    ])
                    ->required(),
                FileUpload::make('certificate_image')  
                    ->image()
                    ->directory('programs/certificates')
                    ->disk('public'),
            ]);
    }
}
