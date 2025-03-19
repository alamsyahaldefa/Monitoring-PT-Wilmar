<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaintenanceResource\Pages;
use App\Filament\Resources\MaintenanceResource\RelationManagers;
use App\Models\Maintenance;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaintenanceResource extends Resource
{
    protected static ?string $model = Maintenance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_unit')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hm_km')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('engine_oil')
                    ->required(),
                Forms\Components\Toggle::make('transmission_oil')
                    ->required(),
                Forms\Components\Toggle::make('axle_oil')
                    ->required(),
                Forms\Components\Toggle::make('final_drive')
                    ->required(),
                Forms\Components\Toggle::make('power_steering')
                    ->required(),
                Forms\Components\Toggle::make('hydraulic')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_unit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hm_km')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('engine_oil')
                    ->boolean(),
                Tables\Columns\IconColumn::make('transmission_oil')
                    ->boolean(),
                Tables\Columns\IconColumn::make('axle_oil')
                    ->boolean(),
                Tables\Columns\IconColumn::make('final_drive')
                    ->boolean(),
                Tables\Columns\IconColumn::make('power_steering')
                    ->boolean(),
                Tables\Columns\IconColumn::make('hydraulic')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMaintenances::route('/'),
            'create' => Pages\CreateMaintenance::route('/create'),
            'edit' => Pages\EditMaintenance::route('/{record}/edit'),
        ];
    }
}
