<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{

    protected $table = 'vacancies';
    public $timestamps = true;
    protected $fillable = ['name', 'surname', 'age', 'adress', 'ntl', 'aile', 'phone', 'email', 'photo', 'langs', 'experience','education'];


    public function vacancies_updated_at()
    {
        $date = \Carbon\Carbon::parse($this->created_at);
        return $date->isoFormat('MMM D YYYY');
    }


}
