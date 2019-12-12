<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasUuid;

    protected $fillable = [
        'active',
        'title',
        'description'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
