<?php

namespace App\Models;

use App\User;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderList extends Model
{
    use SoftDeletes;
    protected $table='order_list';
    public $timestamps=true;
    protected $guarded=[];

    public function contact_created_at()
    {
        $date=\Carbon\Carbon::parse($this->created_at);
        return $date->isoFormat('MMM D YYYY');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'unique_id','order_unique_id');
    }

    public function user()
    {
        return $this->belongsTo(Client::class,'client_id');
    }
}
