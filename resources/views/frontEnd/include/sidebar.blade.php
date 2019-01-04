
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="/home">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-indent"></i>
                        <span>Registration</span>
                    </a>
                    <ul class="sub">
						<li><a href="/patient-reg">Patient</a></li>
						<li><a href="/diseases-reg">Diseases</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/patient-info">
                        <i class="fa fa-wheelchair"></i>
                        <span>Patient Info </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/weekly-chart">Weekly</a></li>
                        <li><a href="/monthly-chart">Monthly</a></li>
                        <li><a href="/yearly-chart">Yearly</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                        <span>Log Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>