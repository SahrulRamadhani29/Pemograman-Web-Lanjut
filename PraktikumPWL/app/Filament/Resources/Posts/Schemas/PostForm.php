<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // KIRI (LEBAR)
                Group::make([
                    Section::make('Post Details')
                        ->icon('heroicon-o-document-text')
                        ->description('Fill in the details of the post')
                        ->icon('heroicon-o-document-text')
                        ->schema([

                            Group::make([
                                TextInput::make('title')
                                    ->required()
                                    ->rules('min:5')
                                    ->validationMessages([
                                        'required' => 'Title wajib diisi.',
                                        'min' => 'Title minimal 5 karakter.',
                                    ]),

                                TextInput::make('slug')
                                    ->required()
                                    ->rules('min:3')
                                    ->unique()
                                    ->validationMessages([
                                        'required' => 'Slug wajib diisi.',
                                        'min' => 'Slug minimal 3 karakter.',
                                        'unique' => 'Slug harus unik.',
                                    ]),

                                Select::make('category_id')
                                    ->label('Category')
                                    ->options(
                                        \App\Models\Category::all()->pluck('name', 'id')
                                    )
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Category wajib dipilih.',
                                    ]),

                                ColorPicker::make('color'),
                            ])->columns(2),

                            MarkdownEditor::make('body')
                                ->columnSpanFull(),

                        ])
                        ->columns(2),
                ])->columnSpan(2),

                // KANAN (KECIL)
                Group::make([
                    Section::make('Image Upload')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make('image')
                                ->required()
                                ->disk('public')
                                ->directory('post')
                                ->validationMessages([
                                    'required' => 'Image wajib diupload.',
                                ]),
                        ]),

                    Section::make('Meta')
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            TagsInput::make('tags'),
                            Checkbox::make('published'),
                            DatePicker::make('published_at'),
                        ]),
                ])->columnSpan(1),

            ])
            ->columns(3);
    }
}