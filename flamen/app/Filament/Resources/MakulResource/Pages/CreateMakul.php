<?php

namespace App\Filament\Resources\MakulResource\Pages;

use App\Filament\Resources\MakulResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMakul extends CreateRecord
{
    protected static string $resource = MakulResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
