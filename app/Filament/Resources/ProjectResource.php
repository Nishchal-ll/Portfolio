<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';

    protected static ?string $navigationLabel = 'Projects';

    protected static ?string $modelLabel = 'Project';

    protected static ?string $pluralModelLabel = 'Projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower number appears first (e.g. 1, 2, 3...)')
                    ->required(),
                Forms\Components\TextInput::make('github_link')
                    ->maxLength(500)
                    ->default(null),
                Forms\Components\TextInput::make('live_link')
                    ->maxLength(500)
                    ->default(null),
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
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->label('URL Slug')
                    ->helperText('e.g. shift-management-system')
                    ->maxLength(255),
                Forms\Components\TextInput::make('project_role')
                    ->label('Your Role in Project')
                    ->placeholder('e.g. Lead Golang Engineer')
                    ->maxLength(255),
                Forms\Components\Select::make('category')
                    ->options([
                        'freelance' => 'Freelance Project',
                        'college' => 'College Project',
                        'self-made' => 'Self-Made Project',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('industry')
                    ->label('Domain / Category')
                    ->placeholder('e.g. Web Application / Hydropower CMMS')
                    ->maxLength(255),
                Forms\Components\TextInput::make('date_range')
                    ->label('Date / Timeline (Start - End)')
                    ->placeholder('e.g. Jan 2026 - Present or June 2026')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_url')
                    ->label('Main Featured / Cover Image')
                    ->image()
                    ->disk('public')
                    ->directory('projects')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('gallery_images')
                    ->label('Project Gallery & Screenshots')
                    ->multiple()
                    ->reorderable()
                    ->image()
                    ->disk('public')
                    ->directory('projects/gallery')
                    ->helperText('Upload screenshot previews to display in the bottom gallery')
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                    ->label('Project Description & Content')
                    ->required()
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
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Cover')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'freelance' => 'success',
                        'college' => 'warning',
                        'self-made' => 'info',
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('github_link')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('live_link')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
