<?php

namespace App\Filament\Resources\InternauteResource\Pages;

use App\Filament\Resources\InternauteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternautes extends ListRecords
{
    protected static string $resource = InternauteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
