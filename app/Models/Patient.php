<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasUuid;

    protected $fillable = ['status','birthdate'];

    const STATUS_UNAPPROVED = 'unapproved';
    const STATUS_APPROVED = 'approved';


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
