<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    FileUpload::make('favicon')->required(),
                    FileUpload::make('logo')->required(),
                    FileUpload::make('hero_bg')->required(),
                    FileUpload::make('hero_grafis')->required(),
                    TextInput::make('hero_heading')->required(),
                    TextInput::make('hero_text')->required(),
                    TextInput::make('link_video')->required(),
                    TextInput::make('address')->required(),
                    TextInput::make('phone')->required(),
                    TextInput::make('email')->required(),
                    TextInput::make('maps')->required(),
                    TextInput::make('telegram')->required(),
                    TextInput::make('facebook')->required(),
                    TextInput::make('instagram')->required(),
                    TextInput::make('youtube')->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //SpatieMediaLibraryImageColumn::make('favicon'),
                ImageColumn::make('favicon'),
                ImageColumn::make('logo'),
                TextColumn::make('phone'),
                TextColumn::make('email'),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
