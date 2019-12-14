<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasUuid;

    const STATUS_OPEN = 'open';
    const STATUS_VALIDATING = 'validating';
    const STATUS_DECLINED = 'declined';
    const STATUS_ACCEPTED= 'accepted';

    protected $fillable = [
        'camunda_identifier',
        'availability',
        'attempts',
        'camunda_identifier',
        'title',
        'description'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    protected $with = ['questions','questions.answers'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class,'patient_survey')->withPivot('status')->withTimestamps();
    }

    public function availability()
    {
        return $this->availability ? __('app/models/survey.availability.true') : __('app/models/survey.availability.false');
    }

    public function availabilityBackground()
    {
        return $this->availability ? 'bg-blue-100' : 'bg-gray-100 cursor-not-allowed';
    }

}
