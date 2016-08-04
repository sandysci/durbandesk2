@extends('Layoutfront.mainregister')

@section('center')


<div class="container" style="margin-top:50px;" >		
    <div class="row">
        @if(isset($message))
        <center> <div class="col-md-12">
            <div class="alert alert-dismissible alert-warning col-lg-12-12" role="alert" style="display:inline-block">
                <button type="button" class="btn btn-warning">{{ $message }}</button>

            </div>
            </div><br>

            {{link_to_route('ind','Return to home page','',array('class'=>'btn btn-warning'))}}

        </center>

        @endif
        @if(isset($errors) && $errors->count())
        <ul>
            @foreach($errors->all() as $error )

            <div class="col-md-12">
                <div class="alert alert-dismissible alert-warning col-lg-12-12" role="alert" style="display:inline-block">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                    {{ $error }}
                </div>
            </div>
            @endforeach
        </ul>
        @endif
        <br><br>
        <div class="col-lg-12">




            
            {{Form::open(array('route'=>'storeuser','class'=>'log-page'))}}
            <fieldset>



                <h3 class="title">Register to Durbandesk</h3>
                <br/>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-user"></i></span>
                        {{Form::text('firstname','',array('class'=>'form-control','placeholder'=>'First name *','required data validation-required-message'=>'Please enter your first name'))}}

                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                        {{Form::text('lastname','',array('class'=>'form-control','placeholder'=>'last name *','required data validation-required-message'=>'Please enter your last name'))}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                        {{Form::email('email','',array('class'=>'form-control','placeholder'=>'email *','required data validation-required-message'=>'Please enter your email'))}}
                    </div>
                </div> 
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                        {{Form::password('password',array('class'=>'form-control','placeholder'=>'password *','required data validation-required-message'=>'Please enter your password'))}}

                    </div>
                </div> 
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                        {{Form::text('companyname','',array('class'=>'form-control','placeholder'=>'Companyname *','required data validation-required-message'=>'Please enter your Companyname'))}}
                    </div>
                </div>
                <div class="form-group"  >
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                        {{Form::text('helpdeskname','',array('class'=>'form-control','placeholder'=>'helpdeskname*','required data validation-required-message'=>'Please enter your Helpdeskname','data-ghost-text'=>'.durbandesk.com'))}} 
                    </div><span style="float:right">.durbandesk.com </span>
                </div>
                <br/>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                        {{Form::input('tel','phoneno','',array('class'=>'form-control','placeholder'=>'Your Phone *','required data-validation-required-message'=>'Please enter your phone number.'))}} 
                    </div>
                </div>
                <div class="form-group"><label class="checkbox"><input type="checkbox"/>&nbsp; I read <a href="">Terms and Conditions</a></label></div>
                <div class="form-group"> {{Form::submit('Register',array('class'=>'btn btn-warning'))}}</div>
            </fieldset>
            {{Form::close()}}
        </div>
    </div><!--/row-->
</div><!--/container-->




@stop