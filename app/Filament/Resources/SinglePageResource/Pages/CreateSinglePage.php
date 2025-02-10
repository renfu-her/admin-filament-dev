<?php

namespace App\Filament\Resources\SinglePageResource\Pages;

use App\Filament\Resources\SinglePageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSinglePage extends CreateRecord
{
    protected static string $resource = SinglePageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
