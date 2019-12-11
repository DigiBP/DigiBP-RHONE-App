<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    const DEMOGRAPHY_STATUS_OPEN = 'open';
    const DEMOGRAPHY_STATUS_VALIDATING = 'validating';
    const DEMOGRAPHY_STATUS_APPROVED = 'approved';
    const DEMOGRAPHY_STATUS_DECLINED = 'declined';

    const DIABETIS_QUALITY_OF_LIFE_STATUS_OPEN = 'open';
    const DIABETIS_QUALITY_OF_LIFE_STATUS_VALIDATING = 'validating';
    const DIABETIS_QUALITY_OF_LIFE_STATUS_APPROVED = 'approved';
    const DIABETIS_QUALITY_OF_LIFE_STATUS_DECLINED = 'declined';

    protected $fillable = [
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
}
