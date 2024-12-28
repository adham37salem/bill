<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddressResource\RelationManagers\CustomerRelationManager;
use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Components\Tab;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;
    protected static ?string $label = "المشتركين";
    protected static ?string $navigationLabel = "المشتركين";
    protected static ?string $pluralLabel = "المشتركين";
    protected static ?string $navigationGroup = "قسم ادارة التحصيل";
    public static function getNavigationBadge(): ?string
    {
        return true;
    }

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make("name")
                ->required()
                ->maxLength(255)
                ->label("اسم المشترك الكامل"),
                Forms\Components\TextInput::make("email")
                ->required()
                ->maxLength(255)
                ->label("البريد الإيكتروني للمشترك")
                ->email(),
                Forms\Components\TextInput::make("mobile_no")
                    ->label("رقم جوال المشترك")
                    ->prefix("+967")
                    ->required(),
                Forms\Components\Select::make("category_id")
                    ->relationship(name: "category", titleAttribute: "name")
                    ->label("نوع الحساب")
                    ->createOptionForm([
                        Forms\Components\TextInput::make("name")
                            ->required()
                            ->maxLength(255)
                            ->label("نوع الحساب"),
                        Forms\Components\Textarea::make("description")
                            ->required()
                            ->maxLength(255)
                            ->label("وسف الحساب"),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make("name")
                    ->label("اسم المشترك")
                    ->searchable(),
                Tables\Columns\TextColumn::make("email")
                    ->label("البريد الإيكتروني")
                    ->searchable(),
                Tables\Columns\TextColumn::make("category.name")
                    ->label("نوع الحساب")
                    ->color("primary")
                    ->sortable(),
                Tables\Columns\TextColumn::make("mobile_no")
                    ->label("رقم الهاتف")
                    ->searchable(),

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
            RelationGroup::make("العداد", [
                RelationManagers\MeterRelationManager::class
            ]),
            RelationGroup::make("العنوان", [
                RelationManagers\AddressRelationManager::class,
            ]),

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
//            'view' => Pages\ViewCustomer::route('/{record}'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
