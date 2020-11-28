<?php

namespace App\Models\Admins;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Admin extends Authenticatable
{
    //
    use Notifiable;
    use SoftDeletes;

    protected $table = 'admins';

    protected $guard = 'admins';

    protected $dates = ['deleted_at'];

    public $timestamps = false;
    
    // protected $fillable = [
    //     'name', 'email', 'password','role','status'
    // ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getData(){
        return $this->select('name','email','role','status','avatar')->get();
    }
}
