<?php

namespace App\Filament\Resources\EvidenceResource\Pages;

use App\Filament\Resources\EvidenceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvidence extends ListRecords
{
    protected static string $resource = EvidenceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
