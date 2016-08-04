@extends('Layoutdashboard.main')
@section('content')
@section('title')
{{$authUser['companyname']}} :View Ticket
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
                        <i class="fa fa-edit"></i>View Ticket
                    </li>
                </ol>


                <strong><h3>All Ticket </h3></strong>

            </div>
        </div>
        @if(isset($tick) )
        @foreach($tick as $tic)
        <div class="well">
            <div>
                <strong style="text-transform:Capitalize; "> {{$tic->subject}}</strong>
                <br>

                <span style="text-transform:lowercase; color:blue">{{$tic->requesteremail}} </span>Date reported :{{$tic->created_at}} <br> created at via Phone or System<br><br>
                <div style="float:right"> {{link_to_route('deleteticket','Delete',$tic->id ,array('class'=>'btn btn-warning'))}}</div>
                 <div style="float:right ;margin-right:10px;"> {{link_to_route('viewedit','Edit',$tic->id ,array('class'=>'btn btn-warning'))}}</div>  
                <u><h4>Description of the problem:</h4></u>
                <h5 style="text-transform:Capitalize; "> {{$tic->description}}</h5>

            </div>
        </div>
        @endforeach
        @else
        <p>No Ticket found</p>
        @endif
    </div>
</div>

@stop