<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{

    protected $table = 'vacancies';
    public $timestamps = true;
    protected $fillable = ['name','slug', 'surname','role', 'age', 'adress', 'employer','salary_min','salary_max', 'phone', 'email', 'photo', 'langs', 'experience','education','exprerience_year','city','company','requriment','about_work','unique_id'];


    public function vacancies_updated_at()
    {

        $date = \Carbon\Carbon::parse($this->created_at);
        return $date->isoFormat('MMM D YYYY');
    }

    public function type()
    {
        return $this->belongsTo(Type::class,'type_id');
    }


}
