
@extends('Layoutfront.mainregister')


@section('center')


    <div class="container" style="margin-top:100px;">
        <div class="row">

            <div class="col-lg-12">

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


                {{ Form::open(array('class' => 'log-page', 'route' => array('password.update', $token))) }}

                    <fieldset>
                        <h3 class="title">Update Password</h3>
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
                                {{Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'confirm password *','required data validation-required-message'=>'Please enter your password'))}}
                            </div>
                        </div>
                        <div class="form-group" style="margin-left: 80px;"><button class="btn btn-warning" type="submit">Update Password</button></div>
                        {{ Form::hidden('token', $token) }}
                    </fieldset>


                    {{ Form::hidden('token', $token) }}
                    {{ Form::close() }}

            </div>
        </div><!--/row-->
    </div><!--/container-->
@stop

