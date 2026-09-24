<?php

namespace App\Filament\Resources\HotelResource\Pages;

use App\Filament\Resources\HotelResource;
use App\Models\Hotel;
use Filament\Resources\Pages\CreateRecord;

class CreateHotel extends CreateRecord
{
    protected static string $resource = HotelResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (
            ($data['language'] ?? null) === 'es'
            && ! empty($data['translation_of'])
        ) {
            $original = Hotel::query()
                ->where('language', 'en')
                ->findOrFail($data['translation_of']);

            $data['group_id'] = $original->group_id ?: $original->id;
        }

        unset($data['translation_of']);

        return $data;
    }

    protected function afterCreate(): void
    {
        $record = $this->record;

        if ($record->language === 'en' && empty($record->group_id)) {
            $record->group_id = $record->id;
            $record->save();
        }
    }
}
