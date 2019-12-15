<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Patient extends Model
{
    use HasUuid;

    protected $fillable = ['status','name','gender','confirmed_diagnosis','birthdate'];

    const STATUS_UNAPPROVED = 'unapproved';
    const STATUS_APPROVED = 'approved';

    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const GENDER_DIVERSE = 'diverse';

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function surveys()
    {
        return $this->belongsToMany(Survey::class)->withPivot('status','attempts')->withTimestamps();
    }

    public function getAge()
    {
        return Carbon::parse($this->birthdate)->age;
    }

    public function getSurveyStatus(Survey $survey)
    {
        $count = $this->surveys()->where('survey_id', $survey->id)->count() ;
    }

    public function getFirstname()
    {
        $array = explode(' ', trim($this->name));

        return $array[0];
    }
}
