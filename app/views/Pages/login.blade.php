@extends('Layoutfront.mainregister')


@section('center')


<div class="container" style="margin-top:100px;">		
    <div class="row">

        <div class="col-lg-12">
            <center>
            @if(isset($error))

              <div>
                <button type="button" class="btn btn-warning" data-dismiss="alert">
                    {{ $error }}
                </button>
              </div>

            <br><br>

            @endif
            </center>
            {{Form::open(array('route'=>'authenticate','class'=>'log-page'))}}
            <fieldset>
                <h3 class="title">Login to your account</h3>
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
                <div class="form-group"><label class="checkbox"><input type="checkbox" name ="remember"/>&nbsp; Remember password</label></div>
                <div class="form-group"><button class="btn btn-warning" type="submit">Login</button></div>
                <hr/>
                <h4>Forgot your Password?</h4>
                <p>no worries, <a class="color-red" href="{{url('password/reset')}}">click here</a> to reset your password.</p>
            </fieldset>
            {{Form::close()}}
        </div>
    </div><!--/row-->
</div><!--/container-->
@stop
