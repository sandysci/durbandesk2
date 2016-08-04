
@extends('Layoutfront.mainregister')


@section('center')


    <div class="container" style="margin-top:100px;">
        <div class="row">

            <div class="col-lg-12">
                <center>
                @if(Session::has('status'))

                    <div  >
                        <button type="button" class="btn btn-warning" data-dismiss="alert">
                            {{ Session::get('status') }}
                        </button>
                    </div>

                    <br><br>

                @endif
                </center>

                <center>
                @if(Session::has('error'))

                            <div  >
                                <button type="button" class="btn btn-warning" data-dismiss="alert">
                                    {{ Session::get('error') }}
                                </button>
                            </div>

                            <br><br>

                @endif
                </center>

                    {{ Form::open(array('route' => 'password.request', 'class' =>'log-page')) }}

                    <fieldset>
                    <h3 class="title">Reset Password</h3>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-lock"></i></span>
                            {{Form::email('email','',array('class'=>'form-control','placeholder'=>'email *','required data validation-required-message'=>'Please enter your email'))}}

                        </div>
                    </div>

                    <div class="form-group" style="margin-left: 80px;"><button class="btn btn-warning" type="submit">Reset Password</button></div>
                    <hr/>
                        <div style="line-height:3em">
                            <span >Not yet registered? <a href="{{ url('register') }}" title="Register">Register Now</a></span>
                        </div>
                </fieldset>
                {{Form::close()}}
            </div>
        </div><!--/row-->
    </div><!--/container-->
@stop

