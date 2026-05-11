<?php

namespace App\Filament\Resources\ProgramSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;

class ProgramSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->groups([
                Group::make('studyProgram.name')
                    ->label('Study Program')
                    ->collapsible()
            ])
            ->defaultGroup('studyProgram.name')
            ->defaultSort('order')
            ->columns([
                TextColumn::make('studyProgram.name')
                    ->label('Study Program')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title')
                    ->label('Section'),
                TextColumn::make('order')
                    ->label('Order'),
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
