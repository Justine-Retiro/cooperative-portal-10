<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CDN's -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/globalCss/style.css')}}" />

    <link rel="stylesheet" href="{{asset('css/dashboard/dashboard.css')}}">
</head>
  <body>
    <nav class="navbar navbar-default no-margin">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header fixed-brand px-4">
        
        <a class="navbar-brand" href="#">NEUST Credit Cooperative Partners</a>
        <button
          type="button"
          class="btn navbar-toggle collapsed"
          data-toggle="collapse"
          id="menu-toggle">
          <i class="bi bi-list"></i>
        </button>
      </div>
      <!-- navbar-header-->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <button
              class="navbar-toggle collapse in"
              data-toggle="collapse"
              id="menu-toggle-2"
            >
              <span
                class="glyphicon glyphicon-th-large"
                aria-hidden="true"
              ></span>
            </button>
          </li>
        </ul>
      </div>
      <!-- bs-example-navbar-collapse-1 -->
    </nav>
    <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
          <div class="logo-container">
            <img src="{{asset('assets/logo.png')}}" alt="">
          </div>
          <li>Menu</li>
          <li>
            <a href="/coop/Admin/Dashboard/dashboard.php">
              <span class="fa-stack fa-lg pull-left">
                <i class="bi bi-border-all"></i>
              </span>
              <span class="nav-text">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="/coop/Admin/Repositories/repositories.php">
              <span class="fa-stack fa-lg pull-left">
                <i class="bi bi-inbox"></i>
              </span>
              <span class="nav-text">Repositories</span>
            </a>
          </li>
          <li>
            <a href="/coop/Admin/MemberLoan/loan.php">
              <span class="fa-stack fa-lg pull-left">
                <i class="bi bi-archive"></i>
              </span>
              <span class="nav-text">Members Loan</span>
            </a>
          </li>
          <li>
            <a href="/coop/Admin/Payment/payment.php">
              <span class="fa-stack fa-lg pull-left"
                ><i class="bi bi-wallet2"></i></span>
                <span class="nav-text">Payment</span> 
              </a
            >
          </li>
          <li>
            <a href="/Account/account.html">
              <span class="fa-stack fa-lg pull-left">
                <i class="bi bi-person"></i>
              </span>
              <span class="nav-text">Profile</span>
            </a>
          </li>
         

          <li>Settings</li>
          <li>
            <a href="#"
              ><span class="fa-stack fa-lg pull-left"
                ><i class="bi bi-info-circle"></i></span
              ><span class="nav-text">Help</span></a
            >
          </li>
          <li>
            <form method="POST" action="{{ route('admin.logout') }}" >
              @csrf
              <a href="{{ route('admin.logout') }} "
                onclick="event.preventDefault();
                this.closest('form').submit();">
                
                <span class="fa-stack fa-lg pull-left">
                  <i class="bi bi-box-arrow-left"></i></span
                ><span class="nav-text">Logout</span></a
              >
            </form>
          </li>
        </ul>
      </div>
      <!-- /#sidebar-wrapper -->
      
      <!-- Page Content -->
        <div id="page-content-wrapper">
          @yield('admin')
        </div>
        <!-- /#page-content-wrapper -->
              <!-- /#page-content-wrapper -->
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn2.hubspot.net/hubfs/476360/Chart.js"></script>
<script src="https://cdn2.hubspot.net/hubfs/476360/utils.js"></script>
<!-- Sidebar -->
<script src="{{asset('js/globalJs/script.js')}}"></script>

</body>
</html>
