<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ActivityResource\Pages;
use App\Models\Activity;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class ActivityResource extends Resource
{
    protected static ?string $model = Activity::class;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('user_id', auth()->user()->id)->count();
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack'; // Customize the icon as needed

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Title'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->label('Description'),
                Forms\Components\FileUpload::make('thumbnail')
                    ->required()
                    ->label('Thumbnail')
                    ->image()
                    ->directory('activity_thumbnails'),
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->label('Category'),
                Forms\Components\TextInput::make('goal')
                    ->required()
                    ->label('Goal')
                    ->numeric(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->size(50),
                Tables\Columns\TextColumn::make('category')->label('Category'),
                Tables\Columns\TextColumn::make('goal')->label('Goal')->money(),
                Tables\Columns\TextColumn::make('current')->label('Current Progress')->money(),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime('d/m/Y H:i'),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }
}

