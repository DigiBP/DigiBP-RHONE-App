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
        'description',
        'explanation'
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
        return $this->belongsToMany(Patient::class,'patient_survey')->withPivot('status','attempts')->withTimestamps();
    }


    public function availability()
    {
        $patient = auth()->user()->patient;

        $text = $this->availability ? __('app/models/survey.availability.true') : __('app/models/survey.availability.false');

        if($patient->surveys()->where('survey_id', $this->id)->exists())
        {
            $status = $patient->surveys()->where('survey_id', $this->id)->first()->pivot->status;

            switch ($status) {

                case Survey::STATUS_ACCEPTED:
                    $text = 'Accepted';
                    break;

                case Survey::STATUS_DECLINED:
                    $text = 'Declined';
                    break;

                case Survey::STATUS_VALIDATING:
                    $text = 'Validating';
                    break;

            }
        }

        return $text;
    }


    public function availabilityBackground()
    {
        $patient = auth()->user()->patient;

        $background = $this->availability ? 'bg-blue-200' : 'bg-gray-100 cursor-not-allowed';

        if($patient->surveys()->where('survey_id', $this->id)->exists())
        {
            $status = $patient->surveys()->where('survey_id', $this->id)->first()->pivot->status;

            switch ($status) {

                case Survey::STATUS_ACCEPTED:
                    $background = 'bg-green-200';
                    break;

                case Survey::STATUS_DECLINED:
                    $background = 'bg-red-200';
                    break;

                case Survey::STATUS_VALIDATING:
                    $background = 'bg-yellow-200';
                    break;

            }
        }

        return $background;
    }

}
