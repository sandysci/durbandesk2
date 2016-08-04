@include('Layoutfront.head')

<br/><br/><br/>

<body style="width:800px;margin:0px auto;line-height:1.3;font-family:Arial;">
    <div class="wrapper">
        <div class="content" style="background:#f6f3ef;"> 

            <div class="details" style="padding:10px 20px;">

                <div class="row margin-bottom-10">
                    <div class="col-lg-12 bg-light"><!-- Just delete "bg-light" class to hide background color -->
                        <h3 class="title">Dear {{$subject}}</h3>
                        <p>

                            We would like to acknowledge that we have received<br>
                            Your request and a ticket  has been created. 
                            <br/>
                            An agent has been assigned to your request.
                            <br/>You will get a response from us  soon
                            <br/> 


                            


                            Thank you for your patience. <br/>
                            Your Sincerely
                            <br>
                            {{$authUser['companyname']}}

                        </p>
                    </div>

                </div><!--/row-->

            </div>
        </div>
    </div>
</body>
