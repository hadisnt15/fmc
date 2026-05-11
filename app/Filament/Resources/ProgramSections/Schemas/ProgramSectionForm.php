<?php

namespace App\Filament\Resources\ProgramSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rule;

class ProgramSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('study_program_id')
                    ->relationship('studyProgram', 'name')
                    ->required(),
                Select::make('type')
                    ->options([
                        'tentang_program_studi' => 'Tentang Program Studi',
                        'sambutan_kaprodi' => 'Sambutan Kaprodi',
                        'visi_dan_misi' => 'Visi dan Misi',
                        'capaian_lulusan' => 'Capaian Lulusan',
                        'sebaran_mata_kuliah' => 'Sebaran Mata Kuliah',
                        'biaya_kuliah' => 'Biaya Kuliah',
                        'kebijakan' => 'Kebijakan',
                        'mitra_kerja_sama' => 'Mitra Kerja Sama',
                    ])
                    ->required()
                    ->rules([fn (callable $get, $record) =>
                        Rule::unique('program_sections','type')
                            ->where(fn ($query) => $query->where('study_program_id', $get('study_program_id')))
                            ->ignore($record?->id),
                     ]),
                TextInput::make('title')
                    ->required(),
                FileUpload::make('image')  
                    ->label('Hero Image')
                    ->image()
                    ->directory('programs')
                    ->disk('public'),
                RichEditor::make('header')
                    ->columnSpanFull()
                    ->required(),
                RichEditor::make('content')
                    ->columnSpanFull(),
                RichEditor::make('content2')
                    ->columnSpanFull(),
                    // ->required(),
                FileUpload::make('images')
                    ->multiple()
                    ->reorderable()
                    ->directory('programs')
                    ->disk('public'),
                TextInput::make('order')
                    ->numeric()
                    ->default(0),
                Toggle::make('running_images')
                    ->label('Running Images'),

            ]);
    }
}
