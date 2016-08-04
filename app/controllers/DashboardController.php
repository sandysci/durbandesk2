<?php

class DashboardController extends BaseController {

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
        $user=Auth::user();

        return View::make('Pagesdashboard.index');
    }
    public function addticket()
    {
       
        $se= Session::get('sed');
       
        $agent = Agent::where('user_id','=',$se)->lists('fullname','id');

        return View::make('Pagesdashboard.addticket')->withAgent([''=>'....Select an Agent.....'] + $agent);
    } 
    public function viewregisteredticket()
    {
        return View::make('Pagesdashboard.viewregisteredticket');
    } 
    public function customer()
        
    {
        $tick=Ticket::all();
        return View::make('Pagesdashboard.customer')->withTick($tick);
    } 
    public function admin()
    {
        return View::make('Pagesdashboard.adminticket');
    }
    public function addagent()
    {
        return View::make('Pagesdashboard.addagent');
    }
    public function storeagent(){
        $data=Input::all();
        $agent= new Agent;


        $validator= Validator::make($data,Agent::$rules);
        if($validator->fails())
        {
            $messages= $validator->messages();
            Input::flash();
            return View::make('Pagesdashboard.addagent')->withError($messages);

        }
        $agent->fill($data);
        $agent->save();

        return View::make('Pagesdashboard.addagent')->withMessage('A new Agent has been added......');



    }

    public function logout()
    {
        
      
        Auth::logout();
       
        
        return View::make('Pages.landing');
    }
    public function storeticket(){
        $data=Input::all();

        $ticket= new Ticket; 

        $validator= Validator::make($data,Ticket::$rules);
        if($validator->fails())
        {
            $messages= $validator->messages();
            Input::flash();
            return View::make('Pagesdashboard.addticket')->withError($messages);

        }
        if(($data['status']=="O")||($data['status']=="P")){
        $emailcontent= array('subject'=>$data['fullname'],'to'=>$data['requesteremail'],'sub'=>$data['subject'],'from'=>$data['helpdeskname']);
       
        Mail::queue('emails.emailticket', $emailcontent, function($message) use($emailcontent){
            $message->to($emailcontent['to'])
                ->from($emailcontent['from'])
                ->subject('Ticket Received-'.$emailcontent['sub'])->replyTo($emailcontent['from']);
        });}
        $ticket->fill($data);
        $ticket->save();
        return View::make('Pagesdashboard.viewregisteredticket')->withDataticket($data);

    }
    public function viewagent()
    {
    
      // $se= Session::pull('sed');
        $agent=Agent::all();
        return View::make('Pagesdashboard.viewagent')->withAgent($agent);
    } 
    public function viewticket()
    {
        $tick=Ticket::all();
        return View::make('Pagesdashboard.viewticket')->withTick($tick);
    }
    public function vieweachticketclick($id)
    {
        $tick=Ticket::find($id);
        return View::make('Pagesdashboard.vieweachticketclick')->withTick($tick);
    } 
    public function viewedit($id)
    {
        $se= Session::get('sed');

        $agent = Agent::where('user_id','=',$se)->lists('fullname','id');
        $tick=Ticket::find($id);
        return View::make('Pagesdashboard.editticket')->with(['tick'=>$tick,'agent'=>[''=>'....Select an Agent.....'] + $agent]);
    } 
    public function updateticket($id)
    {
        $data=Input::all();
        $tick=Ticket::find($id);
        $validator=Validator::make($data,Ticket::$rules);
        if($validator->fails()){
            return View::make('Pagesdashboard.addticket')->withInfo('check input well');
        }
        if(($data['status']=="R")||($data['status']=="C")){

            $emailcontent= array('subject'=>$data['fullname'],'to'=>$data['requesteremail'],'sub'=>$data['subject'],'from'=>$data['helpdeskname']);

            Mail::queue('emails.emailresolvedticket', $emailcontent, function($message) use($emailcontent){
                $message->to($emailcontent['to'])
                    ->from($emailcontent['from'])
                    ->subject('Ticket Received-'.$emailcontent['sub'])->replyTo($emailcontent['from']);
            });
            
        }
        $tick->update($data);
        $tick=Ticket::all();
        return View::make('Pagesdashboard.viewticket')->withTick($tick);
    } 
    public function deleteticket($id)
    {
     
       Ticket::find($id)->delete();
        $tick=Ticket::all();
        return Redirect::to('viewticket')->withTick($tick);
    }
    public function profile()
    {
     
        return View::make('Pagesdashboard.profile');
    }
}