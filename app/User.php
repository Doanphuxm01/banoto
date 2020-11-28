<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $guard = 'admin';
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  function countUser($date){
        return $this->select('username','email','created_at')->get()->where('created_at',function($date){
            $date = Carbon::parse($date->created)->format('d-m-Y');
        });
        // $todayOrder = Order::select('id', 'created', 'status', 'price_total')->get()->groupBy(function($date) {
        //     return Carbon::parse($date->created)->format('d-m-Y');
        // });
    }
    public  function getData($paginate = 10){
        return self::select("*")->orderBy('id','desc')->paginate($paginate);
    }

    public function getDetaiByidUser($id){
        return self::find($id);
    }
}
