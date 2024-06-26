<?php

namespace Spatie\MediaLibrary\MediaCollections\Events;

use Illuminate\Queue\SerializesModels;
use Spatie\MediaLibrary\HasMedia;

class CollectionHasBeenClearedEvent
{
    use SerializesModels;

    public function __construct(public HasMedia $model, public string $collectionName) {}
}
