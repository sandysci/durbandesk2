<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('dash')}}"><strong>{{$authUser['companyname']}}</strong></a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$authUser['companyname']}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{url('profile')}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>


                <li class="divider"></li>
                <li>
                    <a href="{{url('logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse ">
        <ul class="nav navbar-nav side-nav"  style="background-color:ash;">
            <li class="active">
                <a href="{{url('dash')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Ticketing<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="{{url('addticket')}}">New Ticket</a>
                    </li>
                    <li>
                        <a href="{{url('viewticket')}}">View Ticket</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('customer')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Customer</a>
            </li>
            <li>
                <a href="{{url('admin')}}"><i class="fa fa-fw fa-table"></i> Admin</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-fw fa-edit"></i>Report</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>