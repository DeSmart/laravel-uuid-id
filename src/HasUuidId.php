<?php

declare(strict_types=1);

namespace DeSmart\Laravel\Uuid;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuidId
{
    protected static function bootHasUuidId(): void
    {
        static::creating(function (Model $model) {
            if (empty($model->getKey())) {
                $model->setAttribute($model->getKeyName(), Str::orderedUuid()->toString());
            }
        });
    }

    public function getKeyType(): string
    {
        return 'string';
    }

    public function getIncrementing(): bool
    {
        return false;
    }
}