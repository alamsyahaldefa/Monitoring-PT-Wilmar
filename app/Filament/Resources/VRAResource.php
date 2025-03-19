<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VRAResource\Pages;
use App\Models\VRA;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use PhpParser\Node\Stmt\Label;

class VRAResource extends Resource
{
    protected static ?string $model = VRA::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'VRA';

    public static ?string $label = 'VRA (Vehicle Running Account)';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vehicle_running_account')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('order_no')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('budget_2025')
                    ->label('Budget 2025 Rp./HM/KM')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No')
                    ->sortable(),
                Tables\Columns\TextColumn::make('vehicle_running_account')
                    ->label('Vehicle Running Account')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order_no')
                    ->label('Order No')
                    ->copyable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('budget_2025')
                    ->label('Budget 2025 Rp./HM/KM')
                    ->numeric()
                    ->sortable(),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVRAS::route('/'),
            'create' => Pages\CreateVRA::route('/create'),
            'edit' => Pages\EditVRA::route('/{record}/edit'),
        ];
    }
}
