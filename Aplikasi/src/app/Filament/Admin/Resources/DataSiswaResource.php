<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DataSiswaResource\Pages;
use App\Filament\Admin\Resources\DataSiswaResource\RelationManagers;
use App\Models\DataSiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataSiswaResource extends Resource
{
    protected static ?string $model = DataSiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Jenis_Kelamin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Nama_Orang_Tua')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tempat_Lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('Tanggal_Lahir')
                    ->required(),
                Forms\Components\TextInput::make('Agama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Alamat')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Jenis_Kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Nama_Orang_Tua')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tempat_Lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tanggal_Lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Agama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Alamat')
                    ->searchable(),
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
            'index' => Pages\ListDataSiswas::route('/'),
            'create' => Pages\CreateDataSiswa::route('/create'),
            'edit' => Pages\EditDataSiswa::route('/{record}/edit'),
        ];
    }
}
