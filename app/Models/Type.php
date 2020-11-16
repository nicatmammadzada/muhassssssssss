<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $table = 'type';
    public $timestamps = true;
    protected $fillable = ['name'];


    public function vacancies_updated_at()
    {

        $date = \Carbon\Carbon::parse($this->created_at);
        return $date->isoFormat('MMM D YYYY');
    }


}
