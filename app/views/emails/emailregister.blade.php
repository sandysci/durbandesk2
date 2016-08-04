@include('Layoutfront.head')

<br/><br/><br/>

<body style="width:800px;margin:0px auto;line-height:1.3;font-family:Arial;">
    <div class="wrapper">
        <div class="content" style="/*background:#f6f3ef;"> 

            <div class="details" style="padding:10px 20px;">

                <div class="row margin-bottom-10">
                    <div class="col-lg-12 bg-light"><!-- Just delete "bg-light" class to hide background color -->
                        <h3 class="title">Hey {{$subject}}</h3>
                        <p>

                            Thanks for signing up, and welcome to Durbandesk! The next thing to do while you’re getting started is forward your help@ or support@sandytech to Durbandesk and solve a few tickets with your team. 
                            <br/> <br/> 


                            <a href="{{route('login')}}" class="btn btn-warning" style="margin-left:33%;">Activate account</a> 
                            <br/>


                            Cheers, <br/>
                            Your Durbandesk Team

                        </p>
                    </div>

                </div><!--/row-->

            </div>
        </div>
    </div>
</body>
