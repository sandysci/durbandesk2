@extends('Layoutdashboard.main')
@section('content')
@section('title')
{{$authUser['companyname']}} :Customer
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
                        <i class="fa fa-edit"></i>Customer
                    </li>
                </ol>

                
                <strong><h3>All Customer</h3></strong>

            </div>
        </div>
        @if(isset($tick))
        @foreach($tick as $tic)
        <div class="well">
            <div>
            <div style="float:right">
                
                {{link_to_route('vieweachticketclick','Click to see details for this ticket',$tic->id ,array('class'=>'btn btn-warning'))}}
                <br><br>
               
                </div>
                <strong style="text-transform:Capitalize; "> {{$tic->fullname}}</strong>
                <br>

                <h5 style="text-transform:Capitalize; "> {{$tic->description}}</h5>
            
            </div>
        </div>
        @endforeach
        @else
        <p>No ticket found...</p>
        @endif
    </div>
</div>

@stop