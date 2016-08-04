@extends('Layoutdashboard.main')
@section('content')
@section('title')
{{$authUser['companyname']}} :Ticket
@stop

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
                        <i class="fa fa-edit"></i>View each
                    </li>
                </ol>



            </div>
        </div>

        @if(isset($tick))
        <div class="well">
            <div>



                <strong style="text-transform:Capitalize; "> {{$tick->subject}}</strong>
                <br>

                <span style="text-transform:lowercase; color:blue">{{$tick->requesteremail}} </span>Date reported :{{$tick->created_at}} <br> created at via Phone or System
                <div style="float:right"> {{link_to_route('deleteticket','Delete',$tick->id ,array('class'=>'btn btn-warning'))}}</div>
                <div style="float:right;margin-right:10px;"> {{link_to_route('viewedit','Edit',$tick->id ,array('class'=>'btn btn-warning'))}}</div> 
                
                <br><br>
                <u><h4>Description of the problem:</h4></u>
                <h5 style="text-transform:Capitalize; "> {{$tick->description}}</h5>

            </div>
        </div>
        @endif

    </div>
</div>

@stop