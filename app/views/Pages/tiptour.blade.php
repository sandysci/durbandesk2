@include('Layoutfront.head')



<div class="container-fluid">
    <div class="row" style="width:110%; height:250px;background-image:url(../img/header3.jpg);">

    </div>


</div>



<div class="tabs">
    <div class="intro-text text-center"><div><h3 class="intro-lead-in">Congrats! Your Durbandesk is ready!</h3></div>
        <small  class="intro-heading">Jump start your customer support in just two steps......</small></div>


    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Support Email</a></li>
        <li><a href="#profile" data-toggle="tab">Adding Agent</a></li>

    </ul><!--/tabs-->


    <div class="tab-content margin-bottom-40">
        <div class="tab-pane active" id="home">

            <h4>Heading Sample 1</h4>
            <p>h Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac felis consectetur id.<strong> Donec eget orci metus.</strong></p>
        </div>
        <div class="tab-pane" id="profile">


            @if(isset($user))
            @foreach($user as $use)
            <?php $me=array($use->id);?>

            @endforeach
            {{Form::open(array('route'=>'storeagent','class'=>'log-page'))}}
            <fieldset>



                <br/>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-user"></i></span>
                        {{Form::textarea('email','',array('class'=>'form-control'))}}

                    </div>
                </div>

                {{Form::hidden('user_id',$me[0])}}

                <div class="form-group"> {{Form::submit('Add Agent',array('class'=>'btn btn-warning'))}}</div>
            </fieldset>
            {{Form::close()}}

            @endif 
            {{$Userdetails['firstname']}}

        </div>


    </div>
</div>
<br><br>
@include('Layoutfront.footer')