<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContestantResource\Pages;
use App\Filament\Resources\ContestantResource\RelationManagers;
use App\Models\Contestant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ContestantResource extends Resource
{
    protected static ?string $model = Contestant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $title = 'Contestants - Build Afrika Hospitality & Tourism Career Path';
    protected static ?string $navigationGroup = 'Build Afrika Contestants';

    protected ?string $heading = 'Custom Page Heading';
    protected static ?string $navigationLabel = 'contestants';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                        ->label('Contestant Name')
                        ->required()
                        ->maxLength(255)
                        ->afterStateUpdated(function ($state, callable $set) {
                            $set('slug', Str::slug($state));
                        }),

                    Forms\Components\Hidden::make('slug')
                        ->default(fn ($get) => Str::slug($get('name'))),

                    Forms\Components\TextInput::make('institution')
                        ->label('Institution')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('department')
                        ->label('Department')
                        ->maxLength(255),

                    Forms\Components\TextInput::make('career')
                        ->label('Career')
                        ->maxLength(255),
                        
                    
                    Forms\Components\Select::make('country')
                        ->label('Country')
                        ->options([
                            'Afghanistan' => 'Afghanistan',
                            'Albania' => 'Albania',
                            'Algeria' => 'Algeria',
                            'Andorra' => 'Andorra',
                            'Angola' => 'Angola',
                            'Antigua and Barbuda' => 'Antigua and Barbuda',
                            'Argentina' => 'Argentina',
                            'Armenia' => 'Armenia',
                            'Australia' => 'Australia',
                            'Austria' => 'Austria',
                            'Azerbaijan' => 'Azerbaijan',
                            'Bahamas' => 'Bahamas',
                            'Bahrain' => 'Bahrain',
                            'Bangladesh' => 'Bangladesh',
                            'Barbados' => 'Barbados',
                            'Belarus' => 'Belarus',
                            'Belgium' => 'Belgium',
                            'Belize' => 'Belize',
                            'Benin' => 'Benin',
                            'Bhutan' => 'Bhutan',
                            'Bolivia' => 'Bolivia',
                            'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
                            'Botswana' => 'Botswana',
                            'Brazil' => 'Brazil',
                            'Brunei' => 'Brunei',
                            'Bulgaria' => 'Bulgaria',
                            'Burkina Faso' => 'Burkina Faso',
                            'Burundi' => 'Burundi',
                            'Cabo Verde' => 'Cabo Verde',
                            'Cambodia' => 'Cambodia',
                            'Cameroon' => 'Cameroon',
                            'Canada' => 'Canada',
                            'Central African Republic' => 'Central African Republic',
                            'Chad' => 'Chad',
                            'Chile' => 'Chile',
                            'China' => 'China',
                            'Colombia' => 'Colombia',
                            'Comoros' => 'Comoros',
                            'Congo, Democratic Republic of the' => 'Congo, Democratic Republic of the',
                            'Congo, Republic of the' => 'Congo, Republic of the',
                            'Costa Rica' => 'Costa Rica',
                            'Côte d\'Ivoire' => 'Côte d\'Ivoire',
                            'Croatia' => 'Croatia',
                            'Cuba' => 'Cuba',
                            'Cyprus' => 'Cyprus',
                            'Czechia' => 'Czechia',
                            'Denmark' => 'Denmark',
                            'Djibouti' => 'Djibouti',
                            'Dominica' => 'Dominica',
                            'Dominican Republic' => 'Dominican Republic',
                            'Ecuador' => 'Ecuador',
                            'Egypt' => 'Egypt',
                            'El Salvador' => 'El Salvador',
                            'Equatorial Guinea' => 'Equatorial Guinea',
                            'Eritrea' => 'Eritrea',
                            'Estonia' => 'Estonia',
                            'Eswatini' => 'Eswatini',
                            'Ethiopia' => 'Ethiopia',
                            'Fiji' => 'Fiji',
                            'Finland' => 'Finland',
                            'France' => 'France',
                            'Gabon' => 'Gabon',
                            'Gambia' => 'Gambia',
                            'Georgia' => 'Georgia',
                            'Germany' => 'Germany',
                            'Ghana' => 'Ghana',
                            'Greece' => 'Greece',
                            'Grenada' => 'Grenada',
                            'Guatemala' => 'Guatemala',
                            'Guinea' => 'Guinea',
                            'Guinea-Bissau' => 'Guinea-Bissau',
                            'Guyana' => 'Guyana',
                            'Haiti' => 'Haiti',
                            'Honduras' => 'Honduras',
                            'Hungary' => 'Hungary',
                            'Iceland' => 'Iceland',
                            'India' => 'India',
                            'Indonesia' => 'Indonesia',
                            'Iran' => 'Iran',
                            'Iraq' => 'Iraq',
                            'Ireland' => 'Ireland',
                            'Israel' => 'Israel',
                            'Italy' => 'Italy',
                            'Jamaica' => 'Jamaica',
                            'Japan' => 'Japan',
                            'Jordan' => 'Jordan',
                            'Kazakhstan' => 'Kazakhstan',
                            'Kenya' => 'Kenya',
                            'Kiribati' => 'Kiribati',
                            'Kuwait' => 'Kuwait',
                            'Kyrgyzstan' => 'Kyrgyzstan',
                            'Laos' => 'Laos',
                            'Latvia' => 'Latvia',
                            'Lebanon' => 'Lebanon',
                            'Lesotho' => 'Lesotho',
                            'Liberia' => 'Liberia',
                            'Libya' => 'Libya',
                            'Liechtenstein' => 'Liechtenstein',
                            'Lithuania' => 'Lithuania',
                            'Luxembourg' => 'Luxembourg',
                            'Madagascar' => 'Madagascar',
                            'Malawi' => 'Malawi',
                            'Malaysia' => 'Malaysia',
                            'Maldives' => 'Maldives',
                            'Mali' => 'Mali',
                            'Malta' => 'Malta',
                            'Marshall Islands' => 'Marshall Islands',
                            'Mauritania' => 'Mauritania',
                            'Mauritius' => 'Mauritius',
                            'Mexico' => 'Mexico',
                            'Micronesia' => 'Micronesia',
                            'Moldova' => 'Moldova',
                            'Monaco' => 'Monaco',
                            'Mongolia' => 'Mongolia',
                            'Montenegro' => 'Montenegro',
                            'Morocco' => 'Morocco',
                            'Mozambique' => 'Mozambique',
                            'Myanmar' => 'Myanmar',
                            'Namibia' => 'Namibia',
                            'Nauru' => 'Nauru',
                            'Nepal' => 'Nepal',
                            'Netherlands' => 'Netherlands',
                            'New Zealand' => 'New Zealand',
                            'Nicaragua' => 'Nicaragua',
                            'Niger' => 'Niger',
                            'Nigeria' => 'Nigeria',
                            'North Korea' => 'North Korea',
                            'North Macedonia' => 'North Macedonia',
                            'Norway' => 'Norway',
                            'Oman' => 'Oman',
                            'Pakistan' => 'Pakistan',
                            'Palau' => 'Palau',
                            'Palestine' => 'Palestine',
                            'Panama' => 'Panama',
                            'Papua New Guinea' => 'Papua New Guinea',
                            'Paraguay' => 'Paraguay',
                            'Peru' => 'Peru',
                            'Philippines' => 'Philippines',
                            'Poland' => 'Poland',
                            'Portugal' => 'Portugal',
                            'Qatar' => 'Qatar',
                            'Romania' => 'Romania',
                            'Russia' => 'Russia',
                            'Rwanda' => 'Rwanda',
                            'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
                            'Saint Lucia' => 'Saint Lucia',
                            'Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
                            'Samoa' => 'Samoa',
                            'San Marino' => 'San Marino',
                            'Sao Tome and Principe' => 'Sao Tome and Principe',
                            'Saudi Arabia' => 'Saudi Arabia',
                            'Senegal' => 'Senegal',
                            'Serbia' => 'Serbia',
                            'Seychelles' => 'Seychelles',
                            'Sierra Leone' => 'Sierra Leone',
                            'Singapore' => 'Singapore',
                            'Slovakia' => 'Slovakia',
                            'Slovenia' => 'Slovenia',
                            'Solomon Islands' => 'Solomon Islands',
                            'Somalia' => 'Somalia',
                            'South Africa' => 'South Africa',
                            'South Korea' => 'South Korea',
                            'South Sudan' => 'South Sudan',
                            'Spain' => 'Spain',
                            'Sri Lanka' => 'Sri Lanka',
                            'Sudan' => 'Sudan',
                            'Suriname' => 'Suriname',
                            'Sweden' => 'Sweden',
                            'Switzerland' => 'Switzerland',
                            'Syria' => 'Syria',
                            'Taiwan' => 'Taiwan',
                            'Tajikistan' => 'Tajikistan',
                            'Tanzania' => 'Tanzania',
                            'Thailand' => 'Thailand',
                            'Timor-Leste' => 'Timor-Leste',
                            'Togo' => 'Togo',
                            'Tonga' => 'Tonga',
                            'Trinidad and Tobago' => 'Trinidad and Tobago',
                            'Tunisia' => 'Tunisia',
                            'Turkey' => 'Turkey',
                            'Turkmenistan' => 'Turkmenistan',
                            'Tuvalu' => 'Tuvalu',
                            'Uganda' => 'Uganda',
                            'Ukraine' => 'Ukraine',
                            'United Arab Emirates' => 'United Arab Emirates',
                            'United Kingdom' => 'United Kingdom',
                            'United States' => 'United States',
                            'Uruguay' => 'Uruguay',
                            'Uzbekistan' => 'Uzbekistan',
                            'Vanuatu' => 'Vanuatu',
                            'Vatican City' => 'Vatican City',
                            'Venezuela' => 'Venezuela',
                            'Vietnam' => 'Vietnam',
                            'Yemen' => 'Yemen',
                            'Zambia' => 'Zambia',
                            'Zimbabwe' => 'Zimbabwe',
                        ])
                        ->searchable()
                        ->required(),
                        
                    // Forms\Components\TextInput::make('votes')
                    //     ->default(0)
                    //     ->numeric()
                    //     ->required(),
                    Forms\Components\FileUpload::make('photo')
                        ->label('Photo')
                        ->image()
                        ->required(),
                    

                    
                        Forms\Components\RichEditor::make('description')
                        ->label('Reason for joining this contest:')
                        ->columnSpanFull(),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('institution')->searchable(),
                Tables\Columns\TextColumn::make('department')->searchable(),
                Tables\Columns\TextColumn::make('career')->searchable(),
                Tables\Columns\TextColumn::make('votes')->sortable(),
                Tables\Columns\TextColumn::make('country')->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Reason for joining')
                    ->limit(50)
                    ->html(), // Show as HTML, since it's from a RichEditor
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
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
            'index' => Pages\ListContestants::route('/'),
            'create' => Pages\CreateContestant::route('/create'),
            'edit' => Pages\EditContestant::route('/{record}/edit'),
        ];
    }
}
