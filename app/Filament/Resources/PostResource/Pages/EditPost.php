<?php

namespace App\Filament\Resources\PuntaCanaPostResource\Pages;

use App\Filament\Resources\PuntaCanaPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PuntaCanaPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
