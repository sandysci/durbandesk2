@extends('Layoutdashboard.main')
@section('title')
{{$authUser['companyname']}} :Profile
@stop
@section('content')
<div id="page-wrapper">

    <div class="container-fluid">
        
        <!-- Page Heading -->
  
            <div class="row">
                <div class="col-lg-12">
                    
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="{{url('dash')}}">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i>Profile
                        </li>
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="modal-body">
           
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-8">
                                            <h2>{{$authUser['companyname']}}</h2>
                                            <p><strong>Email: </strong> {{$authUser['email']}} </p>
                                            <p><strong>Helpdeskname: </strong>{{$authUser['Helpdeskname']}}  </p>
                                            <p><strong>Phone no: </strong>{{$authUser['phoneno']}}  </p>
                                            
                                        </div><!--/col-->          
                                        <div class="col-xs-12 col-sm-4 text-center">
                                            <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="" class="center-block img-circle img-responsive">
                                            <ul class="list-inline ratings text-center" title="Ratings">
                                                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                            </ul>
                                        </div><!--/col-->

                                        <div class="col-xs-12 col-sm-4">
                                            <h2><strong> 20,7K </strong></h2>                    
                                            <p><small>Followers</small></p>
                                            <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                                        </div><!--/col-->
                                        <div class="col-xs-12 col-sm-4">
                                            <h2><strong>245</strong></h2>                    
                                            <p><small>Following</small></p>
                                            <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                                        </div><!--/col-->
                                        <div class="col-xs-12 col-sm-4">
                                            <h2><strong>43</strong></h2>                    
                                            <p><small>Snippets</small></p>
                                            <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Options </button>  
                                        </div><!--/col-->
                                    </div><!--/row-->
                                </div><!--/panel-body-->
                            </div><!--/panel-->



                        </div>
                    </div>
                         
        </div>
        </div>
        </div>
    
  
</div>
</div>
</div>
@stop