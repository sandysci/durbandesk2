<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'users';
    protected $fillable = ['firstname','lastname','email','password','companyname','helpdeskname','phoneno'];

    /**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    protected $dates=['deleted_at'];
    public static $rules= array(

        'firstname'=>'alpha|required|max:64',
        'lastname'=>'alpha|required|max:64',
        'password'=>'required|min:6',
        'email'=>'required|max:64|unique:users,email',
        'companyname'=>'required|unique:users,companyname',
        'helpdeskname'=>'required|unique:users,helpdeskname',
        'phoneno'=>'required'

    );
    protected $hidden = array('password', 'remember_token');
    public function agent(){
        return $this->hasMany('Agent');
    }
    public function ticket(){
        return $this->hasMany('Ticket');
    }


}
