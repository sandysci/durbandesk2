@extends('Layoutdashboard.main')
@section('title')
{{$authUser['companyname']}} :ViewAgent
@stop
@section('content')
<div id="page-wrapper">

    <div class="container-fluid">
<div class="row">
    <div class="col-lg-12 col-md-12">
        <h1>ViewAgent</h1>
        <div class="panel panel-primary">
            <div class="panel-heading">
                All Agent
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
            
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>Fullname</th>
                                    <th>Agent Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                           
                     
                          
                            
                            <tbody>
                                @if(isset($agent)&& $agent->count()> 0)
                                    @foreach($agent as $agt)
                                        @if($agt->user_id == $authUser['id'])
                               
                                                <tr>
                                                    <td>{{$agt->fullname}}</td>
                                                    <td>{{$agt->email}}</td>
                                                    <td>{{link_to_route('login','Edit','',array('class'=>'btn btn-warning'))}}</td>
                                                    <td>{{link_to_route('login','Delete')}}</td>



                                                </tr>
                               
                                        @endif
                                    @endforeach
                                @else
                                <p>No Agent found..... </p>

                               
                                
                                @endif
                               
                             </tbody>
                         
                        </table>

                    </div>

            </div>
            <div class="panel-footer">
               All Agent
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop
