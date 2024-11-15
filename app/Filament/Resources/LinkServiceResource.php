<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkServiceResource\Pages;
use App\Filament\Resources\LinkServiceResource\RelationManagers;
use App\Models\LinkService;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LinkServiceResource extends Resource
{
    protected static ?string $model = LinkService::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('smkit')->required(),
                    TextInput::make('smpit')->required(),
                    TextInput::make('sdit')->required(),
                    TextInput::make('tkit')->required(),
                    TextInput::make('kbit'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('updated_at')->limit(10),
                TextColumn::make('smkit')->limit(20),
                TextColumn::make('smpit')->limit(20),
                TextColumn::make('sdit')->limit(20),
                TextColumn::make('tkit')->limit(20),
                TextColumn::make('kbit')->limit(20),
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
            'index' => Pages\ListLinkServices::route('/'),
            'create' => Pages\CreateLinkService::route('/create'),
            'edit' => Pages\EditLinkService::route('/{record}/edit'),
        ];
    }
}
