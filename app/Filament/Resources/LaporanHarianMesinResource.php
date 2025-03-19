<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanHarianMesinResource\Pages;
use App\Filament\Resources\LaporanHarianMesinResource\RelationManagers;
use App\Models\LaporanHarianMesin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Contracts\Support\Htmlable;

class LaporanHarianMesinResource extends Resource
{
    protected static ?string $model = LaporanHarianMesin::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Laporan Harian Mesin';

    protected static ?string $slug = 'Laporan_Harian_Mesin';

    public static ?string $label = 'Laporan Harian Mesin ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('tanggal_waktu')
                    ->required(),
                Forms\Components\TextInput::make('nomor_kendaraan')
                    ->maxLength(20),
                Forms\Components\TextInput::make('nama_operator')
                    ->maxLength(100),
                Forms\Components\TextInput::make('jenis_kerja_1')
                    ->maxLength(50),
                Forms\Components\TextInput::make('blok_kerja_1')
                    ->maxLength(10),
                Forms\Components\TextInput::make('jenis_kerja_2')
                    ->maxLength(50),
                Forms\Components\TextInput::make('blok_kerja_2')
                    ->maxLength(10),
                Forms\Components\TextInput::make('jenis_kerja_3')
                    ->maxLength(50),
                Forms\Components\TextInput::make('blok_kerja_3')
                    ->maxLength(10),
                Forms\Components\TextInput::make('jenis_kerja_4')
                    ->maxLength(50),
                Forms\Components\TextInput::make('blok_kerja_4')
                    ->maxLength(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_waktu')
                    ->label('Tanggal & Waktu')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_kendaraan')
                    ->label('Nomor Kendaraan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_operator')
                    ->label('Nama Operator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kerja_1')
                    ->label('Jenis Kerja 1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blok_kerja_1')
                    ->label('Blok Kerja 1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kerja_2')
                    ->label('Jenis Kerja 2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blok_kerja_2')
                    ->label('Blok Kerja 2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kerja_3')
                    ->label('Jenis Kerja 3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blok_kerja_3')
                    ->label('Blok Kerja 3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kerja_4')
                    ->label('Jenis Kerja 4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blok_kerja_4')
                    ->label('Blok Kerja 4')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListLaporanHarianMesins::route('/'),
            'create' => Pages\CreateLaporanHarianMesin::route('/create'),
            'edit' => Pages\EditLaporanHarianMesin::route('/{record}/edit'),
        ];
    }
}
