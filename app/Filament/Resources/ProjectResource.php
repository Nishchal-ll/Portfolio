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
                Forms\Components\TextInput::make('github_link')
                    ->maxLength(500)
                    ->default(null),
                Forms\Components\TextInput::make('live_link')
                    ->maxLength(500)
                    ->default(null),
                Forms\Components\Select::make('technologies')
                    ->multiple()
                    ->options([
                        'Laravel' => 'Laravel',
                        'React' => 'React',
                        'Golang' => 'Golang',
                        'Vue.js' => 'Vue.js',
                        'Next.js' => 'Next.js',
                        'Tailwind CSS' => 'Tailwind CSS',
                        'MySQL' => 'MySQL',
                        'PostgreSQL' => 'PostgreSQL',
                        'Docker' => 'Docker',
                        'AWS' => 'AWS',
                        'HTML' => 'HTML',
                        'CSS' => 'CSS',
                        'JavaScript' => 'JavaScript',
                        'TypeScript' => 'TypeScript',
                        'Python' => 'Python',
                        'Django' => 'Django',
                        'Flask' => 'Flask',
                        'Node.js' => 'Node.js',
                        'Express.js' => 'Express.js',
                        'MongoDB' => 'MongoDB',
                        'Redis' => 'Redis',
                        'PHP' => 'PHP',
                        'C++' => 'C++',
                        'Go' => 'Go',
                        'Flutter' => 'Flutter',
                        'Dart' => 'Dart',
                    ])
                    ->required(),
                Forms\Components\Select::make('category')
                    ->options([
                        'freelance' => 'Freelance Project',
                        'college' => 'College Project',
                        'self-made' => 'Self-Made Project',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'freelance' => 'success',
                        'college' => 'warning',
                        'self-made' => 'info',
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('github_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('live_link')
                    ->searchable(),
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
