<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Report;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-m-arrow-trending-up';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('ticket.category') // Mengakses 'name' dari relasi 'ticket'
            ->label('Nama Pelapor')
            ->disabled(),
            // Forms\Components\TextInput::make('email')->label('Email')->disabled(),
            // Forms\Components\TextInput::make('no_induk')->label('No Induk')->disabled(),
            Forms\Components\Select::make('ticket_id')
                ->label('Laporan')
                ->relationship('ticket', 'description')
                ->searchable()
                ->disabled(),
            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'open' => 'Open',
                    'in_progress' => 'In Progress',
                    'closed' => 'Closed',
                ])
                ->required(),
            Forms\Components\TextInput::make('penanggung_jawab')->label('Penanggung Jawab'),
            Forms\Components\TextInput::make('estimasi')->label('Estimasi'),
            Forms\Components\Textarea::make('tindak_lanjut')->label('Tindak Lanjut'),
            Forms\Components\Textarea::make('catatan_tambahan')->label('Catatan Tambahan'),
            // Forms\Components\DateTimePicker::make('solved_at')->label('Tanggal Selesai'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
                Tables\Columns\TextColumn::make('ticket.name')->label('Nama Lengkap'),
                Tables\Columns\TextColumn::make('ticket.no_induk')->label('NIM/NIP'),
                Tables\Columns\TextColumn::make('ticket.no_telepon')->label('No Telepon'),
                Tables\Columns\TextColumn::make('ticket.category')->label('Kategori'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                // Tables\Columns\TextColumn::make('penanggung_jawab')->label('Penanggung Jawab'),
                // Tables\Columns\TextColumn::make('created_at')->label('Tanggal Dibuat')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'view' => Pages\ViewReport::route('/{record}'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
}
