<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AhtesResource\Pages;
use App\Filament\Resources\AhtesResource\RelationManagers;
use App\Models\Ahtes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class AhtesResource extends Resource
{
    protected static ?string $model = Ahtes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('fname')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('lname')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
               // Forms\Components\TextInput::make('organization')
                //    ->maxLength(255)
                //    ->default(null),
              //  Forms\Components\TextInput::make('position')
                //    ->maxLength(255)
                  //  ->default(null),
               // Forms\Components\TextInput::make('language')
              //      ->maxLength(255)
                //    ->default(null),
              //  Forms\Components\TextInput::make('interpreter')
              //      ->maxLength(255)
               //     ->default(null),
                // Forms\Components\TextInput::make('hotel')
                //     ->tel()
                //     ->maxLength(255)
                //     ->default(null),
                Forms\Components\TextInput::make('visa')
                    ->maxLength(255)
                    ->default(null),
                // Forms\Components\TextInput::make('source')
                  //  ->maxLength(255)
                  //  ->default(null),
             //   Forms\Components\TextInput::make('package')
               //     ->maxLength(255)
                //    ->default(null),
              //  Forms\Components\TextInput::make('exhibition')
                 //   ->maxLength(255)
                  //  ->default(null),
             //   Forms\Components\TextInput::make('pavilion')
               //     ->maxLength(255)
                //    ->default(null),
                Forms\Components\Toggle::make('status')
                    ->required(),
                Forms\Components\TextInput::make('country')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('register_as')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                ->label('Full Name')
                ->getStateUsing(fn ($record) => $record->fname . ' ' . $record->lname)
                ->searchable(['fname', 'lname']),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
             //   Tables\Columns\TextColumn::make('organization')
            //        ->searchable(),
             //   Tables\Columns\TextColumn::make('position')
             //       ->searchable(),
              //  Tables\Columns\TextColumn::make('language')
             //       ->searchable(),
              //  Tables\Columns\TextColumn::make('interpreter')
             //       ->searchable(),
                // Tables\Columns\TextColumn::make('hotel')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('visa')
                    ->searchable(),
              //  Tables\Columns\TextColumn::make('source')
                 //   ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('register_as')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date Created')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('created_from')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Created From'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            );
                    })
            ])
            ->headerActions([
                ExportAction::make()
                    ->exports([
                        ExcelExport::make()
                            ->fromTable()
                            ->withFilename(fn () => 'ahtes-' . date('Y-m-d'))
                            ->withWriterType(\Maatwebsite\Excel\Excel::XLSX),
                        ExcelExport::make('csv')
                            ->fromTable()
                            ->withFilename(fn () => 'ahtes-' . date('Y-m-d'))
                            ->withWriterType(\Maatwebsite\Excel\Excel::CSV),
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportAction::make()
                        ->exports([
                            ExcelExport::make()
                                ->fromTable()
                                ->withFilename(fn () => 'ahtes-selected-' . date('Y-m-d'))
                                ->withWriterType(\Maatwebsite\Excel\Excel::XLSX),
                            ExcelExport::make('csv')
                                ->fromTable()
                                ->withFilename(fn () => 'ahtes-selected-' . date('Y-m-d'))
                                ->withWriterType(\Maatwebsite\Excel\Excel::CSV),
                        ]),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListAhtes::route('/'),
            'create' => Pages\CreateAhtes::route('/create'),
            'edit' => Pages\EditAhtes::route('/{record}/edit'),
        ];
    }
}