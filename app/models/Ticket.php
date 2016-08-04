<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ticket extends Eloquent   {
   


    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'tickets';
    protected $fillable= ['requesteremail','fullname','subject','type','status','priority','group','agents_id','description','user_id'];

    /**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    protected $dates=['deleted_at'];
    public static $rules= array(

        'requesteremail'=>'required|max:120|email',
        'fullname'=>'required|max:100',
        'subject'=>'required|max:64',
        'type'=>'required',
        'status'=>'required',
        'priority'=>'required',
        'group'=>'required',
        'agents_id'=>'required',
        'description'=>'required'

    );
    protected $hidden = array('password', 'remember_token');
    public function user(){
        return $this->belongsTo('User');
    }

    public function agent(){
        return $this->belongsTo('Agent');
    }


}
