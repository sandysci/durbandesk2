<?php

class UserController extends BaseController {

    /*
            |--------------------------------------------------------------------------
            | Default Home Controller
            |--------------------------------------------------------------------------
            |
            | You may wish to use controllers instead of, or in addition to, Closure
            | based routes. That's great! Here is an example controller method to
            | get you started. To route to this controller, just add the route:
            |
            |	Route::get('/', 'HomeController@showWelcome');
            |
            */


    public function index()
    {
        return View::make('Pages.landing');
    }
    public function error()
    {
        return View::make('Pages.error');
    }
    public function register()
    {
        return View::make('Pages.register');
    }
    public function login()
    {
        return View::make('Pages.login');
    }

    public function tipstour()
    {
        return View::make('Pages.tiptour');
    } 


    public function store()
    {
        $data= Input::all();
        $data['password']= Hash::make($data['password']);
        $data['helpdeskname']=$data['helpdeskname'].'@durbandesk.com';
        $user= new User;
        $email=Input::get('email');

        $validator= Validator::make($data,User::$rules);
        if($validator->fails()){
            $messages= $validator->messages();
            Input::flash();
            return View::make('Pages.register')->withErrors($messages);

        }

        $user->fill($data);
        $user->save();


        View::share('Userdetails', $data);
        $useid=User::select('id')->where('email',$email)->get();



        $emailcontent= array('subject'=>$data['firstname']);
        Mail::queue('emails.emailregister', $emailcontent, function($message) 
                    {
                        $message->to('sandy4life2030@yahoo.com','Durbandesk Support')
                            ->from('ezeibesandra@gmail.com','weldone')

                            ->subject('Durbandesk');
                    });
        return View::make('Pages.register')->withMessage('You have successfully register a link has been sent to your email account follow the link');
        // return View::make('Pages.tiptour')->withUser($useid);
    }
    public function emailregister(){

        return View::make('emails.emailregister');
    }

    public function authenticate()
    {
    
    
        $email = Input::get('email');
        $password = Input::get('password');
        if(Auth::attempt(['email' => $email, 'password' => $password],true))
        {
            
        
            //fetch user profile details
            $user = Auth::user();
            $user->last_login = time();
            $user->save();
            $status=Ticket::all();
            $urserializedobj = $status.toJson();
            return Redirect::to('dash')->with('siteinformation',$urserializedobj );

          }
        return View::make('Pages.login')->withError('Invalid username or password please try again......');
    }
    public function storeagent(){
        $data=Input::all();
        $agent= new Agent;
        $agent->email=$data['email'];
        $agent->user_id=$data['user_id'];
        $agent->save();
        return Redirect::to('login');



    }

}
