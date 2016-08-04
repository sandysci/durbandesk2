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
                        <i class="fa fa-edit"></i>Ticket
                    </li>
                </ol>
                
                    <h4>You added a new ticket from <small> @if(isset($dataticket))
                        {{$dataticket['requesteremail']}}
                        @endif</small></h4>
              
                
               
            </div>
        </div>
     
        
<div class="well">
    <div>
        @if(isset($dataticket))
       <?php $dt = new DateTime();?>
       
        <strong style="text-transform:Capitalize; "> {{$dataticket['subject']}}</strong>
        <br>
        
        <span style="text-transform:lowercase; color:blue">{{$dataticket['requesteremail']}} </span>reported a minute ago  {{$dt->format('Y-m-d H:i:s')}} via Phone or System<br><br>
     
        <h5 style="text-transform:Capitalize; "> {{$dataticket['description']}}</h5>
        @endif
    </div>
</div>
</div>
</div>

@stop