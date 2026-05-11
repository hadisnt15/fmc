<?php

namespace App\Filament\Resources\StudyPrograms\Tables;

use App\Models\StudyProgram;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudyProgramsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Study Program')
                    ->description(fn (StudyProgram $record): string => $record->slug),
                TextColumn::make('accreditation')
                    ->badge()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'A' => 'Unggul',
                        'B' => 'Baik Sekali',
                        'C' => 'Baik',
                    }),
                ImageColumn::make('certificate_image')
                    ->imageWidth(150)
                    ->imageHeight(100)
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
