<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CV extends Model
{
    use SoftDeletes;

    protected $table='cv';
    public $timestamps=true;
    protected $fillable=['name','surname','f_name','email','category_id','role','salary','education_degree','education','experience','works','gender','family','dob','city','phone','adress','computer_skills','language_skills','sertification','in_addition'];


    public function cv_updated_at()
    {
        $date=\Carbon\Carbon::parse($this->updated_at);
        return $date->isoFormat('MMM D YYYY');
    }

    public function category()
    {
      return  $this::belongsToMany(Category::class,'category_post','posts_id','category_id');
    }





}
