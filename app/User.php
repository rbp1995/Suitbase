<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','gender','religion','address','birth_date','birth_place','phone','ktp_id','ktp_address','KK','CV','ijazah','NPWP','KTP','departments_id','divisions_id','status','number_leave','photo','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','overtime_hours','last_avg_score'
    ];

    public function division()
    {
        return $this->hasOne('App\Models\Division', 'id', 'divisions_id');
    }

    public function department()
    {
        return $this->hasOne('App\Models\Department', 'id', 'departments_id');
    }

    public function supervisor()
    {
        return $this->belongsTo('App\Models\Supervisor','id','supervisees_id');
    }

    public function getKtpUrl()
    {
        return asset('/upload/docs/{$this->KTP}');
    }
}
