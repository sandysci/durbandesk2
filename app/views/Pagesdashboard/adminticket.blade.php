@extends('Layoutdashboard.main')
@section('title')
{{$authUser['companyname']}}:Admin
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
                        <i class="fa fa-edit"></i>Admin
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        
        
        <div class="row">
            <div class="col-lg-12">
        <!-- /. ROW  -->
        <hr />
       
        <!-- /. ROW  --> 
        <div class="row text-center pad-top">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="{{url('addagent')}}" >
                        <i class="fa fa-key fa-5x"></i>
                        <h4>Add Agent </h4>
                    </a>
                </div>


            </div>

             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="{{url('viewagent')}}" >
                        <i class="fa fa-users fa-5x"></i>
                        <h4>View agent</h4>
                    </a>
                </div>


            </div>
           
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="blank.html" >
                        <i class="fa fa-comments-o fa-5x"></i>
                        <h4>Support</h4>
                    </a>
                </div>


            </div>
            
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="blank.html" >
                        <i class="fa fa-envelope-o fa-5x"></i>
                        <h4>Mail Box</h4>
                    </a>
                </div>


            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="blank.html" >
                        <i class="fa fa-lightbulb-o fa-5x"></i>
                        <h4>New Issues</h4>
                    </a>
                </div>


            </div>

        </div>
        <!-- /. ROW  -->
        
    </div>
    </div>
    </div>
</div>
@stop