<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Experiences';

    protected static ?string $modelLabel = 'Experience';

    protected static ?string $pluralModelLabel = 'Experiences';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('role')
                    ->label('Job Title / Role')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company')
                    ->label('Company / Client / Project Name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_url')
                    ->label('Company / Project URL')
                    ->url()
                    ->maxLength(500),
                Forms\Components\TextInput::make('location')
                    ->label('Location (e.g. Remote / Kathmandu)')
                    ->maxLength(255),
                Forms\Components\Select::make('employment_type')
                    ->options([
                        'Full-time' => 'Full-time',
                        'Part-time' => 'Part-time',
                        'Contract / Freelance' => 'Contract / Freelance',
                        'Freelance' => 'Freelance',
                        'Internship' => 'Internship',
                        'Research & Projects' => 'Research & Projects',
                    ])
                    ->default('Full-time')
                    ->required(),
                Forms\Components\TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower number appears first')
                    ->required(),
                Forms\Components\TextInput::make('start_date')
                    ->label('Start Date (e.g. 2025 or Jan 2025)')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('end_date')
                    ->label('End Date (e.g. Present or Dec 2025)')
                    ->maxLength(50),
                Forms\Components\Toggle::make('is_current')
                    ->label('Currently Working Here')
                    ->default(false),
                Forms\Components\Select::make('technologies')
                    ->multiple()
                    ->searchable()
                    ->options([
                        'Golang' => 'Golang / Go',
                        'Go' => 'Go',
                        'Laravel' => 'Laravel',
                        'PHP' => 'PHP',
                        'React' => 'React',
                        'Next.js' => 'Next.js',
                        'Vue.js' => 'Vue.js',
                        'TypeScript' => 'TypeScript',
                        'JavaScript' => 'JavaScript',
                        'Python' => 'Python',
                        'Django' => 'Django',
                        'FastAPI' => 'FastAPI',
                        'Flask' => 'Flask',
                        'Node.js' => 'Node.js',
                        'Express.js' => 'Express.js',
                        'Docker' => 'Docker',
                        'Kubernetes' => 'Kubernetes',
                        'Azure' => 'Azure',
                        'AWS' => 'AWS',
                        'GCP' => 'GCP (Google Cloud)',
                        'CI/CD' => 'CI/CD',
                        'GitHub Actions' => 'GitHub Actions',
                        'PostgreSQL' => 'PostgreSQL',
                        'MySQL' => 'MySQL',
                        'MongoDB' => 'MongoDB',
                        'Redis' => 'Redis',
                        'Kafka' => 'Kafka',
                        'RabbitMQ' => 'RabbitMQ',
                        'Linux' => 'Linux',
                        'Nginx' => 'Nginx',
                        'Git' => 'Git',
                        'Tailwind CSS' => 'Tailwind CSS',
                        'GraphQL' => 'GraphQL',
                        'REST API' => 'REST API',
                        'Flutter' => 'Flutter',
                        'Dart' => 'Dart',
                        'C++' => 'C++',
                        'HTML' => 'HTML',
                        'CSS' => 'CSS',
                    ])
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('description')
                    ->label('Role Overview')
                    ->rows(3)
                    ->columnSpanFull(),
                Forms\Components\TagsInput::make('highlights')
                    ->label('Key Achievements / Milestones (Bullet points)')
                    ->placeholder('Add key milestone and press enter')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->label('Order')
                    ->sortable(),
                Tables\Columns\TextColumn::make('role')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('company')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('employment_type')
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Timeline')
                    ->formatStateUsing(fn ($record) => $record->start_date . ($record->end_date ? ' - ' . $record->end_date : '')),
                Tables\Columns\IconColumn::make('is_current')
                    ->label('Current')
                    ->boolean(),
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
