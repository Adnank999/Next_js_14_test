<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplierResource\Pages;
use App\Filament\Resources\SupplierResource\RelationManagers;
use App\Livewire\CreateInvoice;
use App\Models\Supplier;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;

class SupplierResource extends Resource
{
    protected static ?string $model = Supplier::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
       
            ->schema([
                Section::make('Suppliers')
                ->description('This are the suppliers')
                ->schema([
                    TextInput::make('name'),
                    TextInput::make('email'),
                    TextInput::make('phone'),
                    TextInput::make('address')
                ])->columns(4),

                Section::make('Suppliers')
                ->description('This are the suppliers')
                ->schema([
                    TextInput::make('name'),
                    TextInput::make('email'),
                    TextInput::make('phone'),
                    TextInput::make('address')
                ])
                ->columns(2)
                
            ]);
            
            
            
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('address')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
              

            Tables\Actions\Action::make('Invoice')
            ->url(fn (Supplier $record): string => route('invoice.edit', $record))
            ->openUrlInNewTab(),
            
            Tables\Actions\Action::make('Counter')
            ->url(fn (Supplier $record): string => route('counter', $record))
            ->openUrlInNewTab()
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListSuppliers::route('/'),
            'create' => Pages\CreateSupplier::route('/create'),
            'edit' => Pages\EditSupplier::route('/{record}/edit'),
            
        ];      
    }    
}
