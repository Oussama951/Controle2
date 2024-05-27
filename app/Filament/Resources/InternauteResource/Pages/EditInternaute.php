<?php

namespace App\Filament\Resources\InternauteResource\Pages;

use App\Filament\Resources\InternauteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInternaute extends EditRecord
{
    protected static string $resource = InternauteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
