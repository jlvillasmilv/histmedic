<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
  
    protected $fillable = [
        'name','user_name', 'email','type','password','status'
    ];

    protected $dates = ['deleted_at'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ecorp()
	{
	    return $this->hasMany(EcoRP::class,'user_id','id');
	}

	public function sf36()
	{
	    return $this->hasMany(SF36::class,'user_id','id');
	}

	public function terceraEdad()
	{
	    return $this->hasMany(TerceraEdad::class,'user_id','id');
	}

	public function zung()
	{
	    return $this->hasMany(Zung::class,'user_id','id');
	}

	public function familyInterview()
	{
	    return $this->hasMany(FamilyInterview::class,'user_id','id');
	}

	public function followInterview()
	{
	    return $this->hasMany(FollowInterview::class,'user_id','id');
	}

	public function cardiovascularV1()
	{
	    return $this->hasMany(CardiovascularV1::class,'user_id','id');
	}

	public function cardiovascularV2()
	{
	    return $this->hasMany(CardiovascularV2::class,'user_id','id');
	}

	public function coreEvaluation()
	{
	    return $this->hasMany(CoreEvaluation::class,'user_id','id');
	}

	public function holter()
	{
	    return $this->hasMany(Holter::class,'user_id','id');
	}

	public function laboratoryRP()
	{
	    return $this->hasMany(LaboratoryRP::class,'user_id','id');
	}

	public function En1f()
	{
	    return $this->hasMany(\App\Neuropsychiatric\En1f::class,'user_id','id');
	}

	public function En2f()
	{
	    return $this->hasMany(\App\Neuropsychiatric\En2f::class,'user_id','id');
	}

	public function En3f()
	{
	    return $this->hasMany(\App\Neuropsychiatric\En3f::class,'user_id','id');
	}

	public function En4f()
	{
	    return $this->hasMany(\App\Neuropsychiatric\En4f::class,'user_id','id');
	}

	public function paFormat1()
	{
	    return $this->hasMany(PaFormat1::class,'user_id','id');
	}

	public function paFormat2()
	{
	    return $this->hasMany(PaFormat2::class,'user_id','id');
	}

	public function paFormat3()
	{
	    return $this->hasMany(PaFormat3::class,'user_id','id');
	}

	public function deceasedPatient()
	{
	    return $this->hasMany(DeceasedPatient::class,'user_id','id');
	}

	public function effortTest()
	{
	    return $this->hasMany(EffortTest::class,'user_id','id');
	}

}
