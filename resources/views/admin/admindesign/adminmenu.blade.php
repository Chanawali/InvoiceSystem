<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<!-- Our Custom CSS -->
<link rel="stylesheet" type="text/css" href="css/style4.css">
<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Invoice</h3>
            <strong>In</strong>
        </div>
        <!-- Menu Contents  -->
        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{''}}">
                    <i class="fas fa-home"></i>
                        Dashboard
                </a>
            </li>
            
            <li>
                <a href="{{'/registration'}}">
                    <i class="fas fa-paper-plane">
                        </i>Register
                </a>
            </li>

            <li>
                <a href="{{''}}">
                    <i class="fas fa-paper-plane">
                        </i>Company
                </a>
            </li>

            <li>
            <a href="{{''}}">
                    <i class="fas fa-briefcase"></i>
                    Items
                 </a>
            </li>

            <li>
                <a href="{{''}}">
                    <i class="fas fa-briefcase"></i>
                    Sales
                </a>
            </li>
            <li>
                <a href="{{''}}">
                    <i class="fas fa-briefcase"></i>
                    Orders
                </a>
            </li> 
            
            <li>
            <a href="{{''}}">
                    <i class="fas fa-briefcase"></i>
                    Estimates
                </a>
            </li>

            <li>
                <a href="{{''}}">
                    <i class="fas fa-copy"></i>
                    Invoice
                </a>
            </li>

            <li>
                <a href="{{''}}">
                    <i class="fas fa-briefcase"></i>
                    Paymeny Details
                </a>
            </li>
            <li>
                <a href="{{''}}">
                    <i class="fas fa-area-chart"></i>
                    Reports
                </a>
            </li>
            <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-settings"></i>
                        Settings
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">General Settings</a>
                        </li>
                        <li>
                            <a href="{{''}}">Tax Settings</a>
                        </li>
                    </ul>
                </li>
        </nav>
