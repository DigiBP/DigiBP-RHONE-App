<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    const DEMOGRAPHY_STATUS_OPEN = 'open';
    const DEMOGRAPHY_STATUS_VALIDATING = 'validating';
    const DEMOGRAPHY_STATUS_APPROVED = 'approved';
    const DEMOGRAPHY_STATUS_DECLINED = 'declined';

    const DIABETES_QUALITY_OF_LIFE_STATUS_OPEN = 'open';
    const DIABETES_QUALITY_OF_LIFE_STATUS_VALIDATING = 'validating';
    const DIABETES_QUALITY_OF_LIFE_STATUS_APPROVED = 'approved';
    const DIABETES_QUALITY_OF_LIFE_STATUS_DECLINED = 'declined';

    protected $fillable = [
        'survey_id',
        'patient_id',
        'demography_status',
        'demography_education',
        'demography_employment',
        'demography_digital_apps',
        'demography_social_media',
        'demography_patient_communities',
        'demography_nutrition',
        'demography_mobility',

        'diabetes_quality_of_life_status',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
