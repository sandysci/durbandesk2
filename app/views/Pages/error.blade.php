@extends('Layoutfront.mainregister')

<br/><br/><br/><br/><br/><br/>
@section('center')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="color-red pull-left">Page Not Found</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{url('/')}}">Home</a> </li>
            <li><a href="{{url('/')}}">Pages</a> </li>
            <li class="active">404</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
    <div class="row page-404">
        <p><i>404</i> <span>Dont feel sad, try again....</span></p>
        <center><a href="{{url('/')}}" class="btn btn-lg btn-warning"><i class="icon-chevron-left"></i> Return to Home page</a></center>
    </div><!--/row-->
</div><!--/container-->		
<!--=== End Content Part ===-->
@stop