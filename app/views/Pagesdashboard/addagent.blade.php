@extends('Layoutdashboard.main')
@section('title')
{{$authUser['companyname']}} :newAgent
@stop
@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    New Agent
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{url('dash')}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i>New Agent
                    </li>
                </ol>
            </div>
        </div>
        
    <div class="row">
        <div class="col-lg-12">
        <div class="modal-body">

            @if(isset($error) && $error->count())
            <ul>
                @foreach($error->all() as $error )

                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-warning col-lg-12-12" role="alert" style="display:inline-block">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        {{ $error }}
                    </div>
                </div>
                @endforeach
            </ul>
            @endif
            
            @if(isset($message))
            <button class="btn btn-info">{{$message}}</button>
            
            @endif
            <br>
            <br>
            
            {{Form::open(array('route'=>'storeagent','class'=>'form-horizontal','role'=>'form'))}}
            <div class="form-group">
                
                <label for="fullname" class="col-lg-2 control-label">Agent Full name:</label>
                <div class="col-lg-10">
                    {{Form::text('fullname','',array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group">
                <label for="Email" class="col-lg-2 control-label">Agent Email:</label>
                <div class="col-lg-10">
                    
                    
                    {{Form::email('email','',array('class'=>'form-control'))}}
                </div>
                </div>
                {{Form::hidden('user_id', $authUser['id'],array('class'=>'form-control','required'))}}
               
               <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        &nbsp;&nbsp;&nbsp; {{Form::submit('Add Agent',array('class'=>'btn btn-success'))}}
                    </div>
                </div>
                {{Form::close()}}
           
        </div>

        
    </div>
    </div>
    </div>
</div>
@stop