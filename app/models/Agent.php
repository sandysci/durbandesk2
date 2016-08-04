k<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Agent extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'agents';
    protected $fillable=['fullname','email','user_id'];

    /**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    protected $hidden = array('password', 'remember_token');
    public function user(){
        return $this->belongsTo('User');
    }

    public function ticket(){
        return $this->hasOne('Ticket');
    }
    public static $rules=array(
        'fullname'=>'required|unique:agents,fullname',
        'email'=>'email|required|unique:agents,email',
    );

}
