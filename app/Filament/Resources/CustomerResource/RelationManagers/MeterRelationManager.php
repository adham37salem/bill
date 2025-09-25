<?php

namespace App\Filament\Resources\CustomerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MeterRelationManager extends RelationManager
{
    protected static string $relationship = 'meter';
    protected static ?string $pluralLabel = "عدادات";
    protected static ?string $label = "العداد";
    protected static ?string $title = "العداد" ;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('customer_id')
                    ->relationship('customer', 'name')
                    ->searchable()
                    ->label("اسم المشترك")
                    ->required(),
                Forms\Components\TextInput::make('ip_address')
                    ->label("عنوان الشبكة الخاص بالعداد")
                    ->required()
                    ->unique()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('units')
            ->columns([
                Tables\Columns\TextColumn::make('ip_address')
                    ->label("عنوان الشبكة المحلي")
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_reading_date')
                    ->label("تاريخ اقدم قراءة للعداد"),
                Tables\Columns\TextColumn::make('newest_reading_date')
                    ->label("تاريخ احدث قراءة للعداد"),
                Tables\Columns\TextColumn::make('units')
                    ->label("عدد الوحدات المقروءة"),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
