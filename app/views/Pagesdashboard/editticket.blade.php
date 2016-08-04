@extends('Layoutdashboard.main')
@section('title')
{{$authUser['companyname']}} :Edit ticket
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
                        <i class="fa fa-edit"></i>Edit ticket
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><small> Edit Ticket and update if the problem has been resolved or closed</small></strong>
                <br><br>
                {{Form::model($tick,array('role'=>'form','enctype'=>'multipart/form-data','method'=>'post','route'=>array('ticket.update',$tick->id)))}}
                <div class="form-group">
                    {{Form::label('Requester email')}}
                    {{Form::email('requesteremail',$tick->requesteremail,array('class'=>'form-control','required'))}}





                </div>

                <div class="form-group">
                    {{Form::label('Fullname')}}
                    {{Form::text('fullname',$tick->fullname,array('class'=>'form-control','required'))}}




                </div>
                <div class="form-group">
                    {{Form::label('Subject')}}
                    {{Form::text('subject',$tick->subject,array('class'=>'form-control','required'))}}





                </div>

                <div class="form-group">
                    {{Form::label('Type')}}

                    {{Form::select('type',array('Q'=>'Question','I'=>'Incident','P'=>'Problem'),$tick->type,array('class'=>'form-control','required'))}}

                </div> 
                <div class="form-group">
                    {{Form::label('Status')}}

                    {{Form::select('status',array('R'=>'Resolved','C'=>'Closed'),$tick->status,array('class'=>'form-control','required'))}}

                </div>
                <div class="form-group">
                    {{Form::label('Priority')}}

                    {{Form::select('priority',array('H'=>'High','M'=>'Medium','L'=>'Low'),$tick->priority,array('class'=>'form-control','required'))}}

                </div>
                <div class="form-group">
                    {{Form::label('Group')}}

                    {{Form::select('group',array('P'=>'Product Management','Q'=>'QA','S'=>'Sales'),$tick->group,array('class'=>'form-control','required'))}}

                </div>
                <div class="form-group">
                    {{Form::label('Agent')}}

                    {{Form::select('agents_id',$agent,$tick->agents_id,array('class'=>'form-control','required','id'=>'disabledSelect'))}}

                </div>
                
               

                <div class="form-group">
                    {{Form::label('Description')}}
                    {{Form::textarea('description',$tick->description,array('class'=>'form-control','rows'=>'3','cols'=>'5','required'))}}

                </div>

                {{Form::hidden('user_id', $authUser['id'],array('class'=>'form-control','required'))}}
                {{Form::hidden('helpdeskname', $authUser['Helpdeskname'],array('class'=>'form-control','required'))}}
                {{Form::submit('Update Ticket',array('class'=>'btn btn-warning'))}}
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