<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        self::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

}
