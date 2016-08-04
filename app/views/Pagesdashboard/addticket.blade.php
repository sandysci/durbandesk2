@extends('Layoutdashboard.main')
@section('title')
{{$authUser['companyname']}} :newticket
@stop
@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    New Ticket
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{url('dash')}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i>New ticket
                    </li>
                </ol>
            </div>
        </div>
     
        <div class="row">
            <div class="col-lg-6">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><small> The requester will receive an email notification that a new ticket has been created</small></strong>
                <br><br>
                {{Form::open(array('role'=>'form','enctype'=>'multipart/form-data','route'=>'storeticket'))}}
                <div class="form-group">
                    {{Form::label('Requester email')}}
                    {{Form::email('requesteremail','',array('class'=>'form-control','required'))}}

                    @if(isset($error))
                    <p class="help-block">
                        {{$messages->first('requesteremail')}}
                    </p>
                    @endif



                </div>
                
                <div class="form-group">
                    {{Form::label('Fullname')}}
                    {{Form::text('fullname','',array('class'=>'form-control','required'))}}
                    @if(isset($error))
                    <p class="help-block">
                        {{$messages->first('fullname')}}
                    </p>
                    @endif




                </div>
                <div class="form-group">
                    {{Form::label('Subject')}}
                    {{Form::text('subject','',array('class'=>'form-control','required'))}}
                    @if(isset($error))
                    <p class="help-block">
                        {{$messages->first('subject')}}
                    </p>
                    @endif




                </div>

                <div class="form-group">
                    {{Form::label('Type')}}

                    {{Form::select('type',array('Q'=>'Question','I'=>'Incident','P'=>'Problem'),'',array('class'=>'form-control','required'))}}
                    @if(isset($error))
                    <p class="help-block">
                        {{$messages->first('type')}}
                    </p>
                    @endif
                </div> 
                <div class="form-group">
                    {{Form::label('Status')}}

                    {{Form::select('status',array('O'=>'Open','P'=>'Pending'),'O',array('class'=>'form-control','required'))}}
                    @if(isset($error))
                    <p class="help-block">
                        {{$messages->first('status')}}
                    </p>
                    @endif
                </div>
                <div class="form-group">
                    {{Form::label('Priority')}}

                    {{Form::select('priority',array('H'=>'High','M'=>'Medium','L'=>'Low'),'',array('class'=>'form-control','required'))}}
                    @if(isset($error))
                    <p class="help-block">
                        {{$messages->first('priority')}}
                    </p>
                    @endif
                </div>
                <div class="form-group">
                    {{Form::label('Group')}}

                    {{Form::select('group',array('P'=>'Product Management','Q'=>'QA','S'=>'Sales'),'',array('class'=>'form-control','required'))}}
                    @if(isset($error))
                    <p class="help-block">
                        {{$messages->first('group')}}
                    </p>
                    @endif
                </div>
                <div class="form-group">
                    {{Form::label('Agent')}}

                    {{Form::select('agents_id',$agent,null,array('class'=>'form-control','required'))}}
                </div>

                <div class="form-group">
                    {{Form::label('Description')}}
                    {{Form::textarea('description','',array('class'=>'form-control','rows'=>'3','cols'=>'5','required'))}}
                    @if(isset($error))
                    <p class="help-block">
                        {{$messages->first('requesteremail')}}
                    </p>
                    @endif
                </div>
                
                {{Form::hidden('user_id', $authUser['id'],array('class'=>'form-control','required'))}}
                {{Form::hidden('helpdeskname', $authUser['Helpdeskname'],array('class'=>'form-control','required'))}}
                {{Form::submit('Add Ticket',array('class'=>'btn btn-warning'))}}
                {{Form::close()}}
                <br>
                <br>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop