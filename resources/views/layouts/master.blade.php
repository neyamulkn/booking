<!DOCTYPE html>

<head>
  <title>Dashboard - Target Admin</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="{{asset('scripts/css')}}/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('scripts/css')}}/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="{{asset('scripts/js')}}/plugins/morris/morris.css">
  <link rel="stylesheet" href="{{asset('scripts/js')}}/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="{{asset('scripts/js')}}/plugins/select2/select2.css">
  <link rel="stylesheet" href="{{asset('scripts/js')}}/plugins/fullcalendar/fullcalendar.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="{{asset('scripts/css')}}/target-admin.css">
  <link rel="stylesheet" href="{{asset('scripts/css')}}/custom.css">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.{{asset('scripts/js')}}/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>


@yield('content')


<footer class="footer">

  <div class="container">

    <div class="row">

      <div class="col-sm-3">

        <h4>About Theme</h4>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>  

        <hr>    

        <p>&copy; 2014 Jumpstart Themes.</p>

      </div> <!-- /.col -->

      <div class="col-sm-3"> 

        <h4>Support</h4>

        <br>

        <ul class="icons-list">
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Frequently Asked Questions</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Ask a Question</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Video Tutorial</a>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Feedback</a>
          </li>
        </ul>          

      </div> <!-- /.col -->

      <div class="col-sm-3">

        <h4>Legal</h4>

        <br>

        <ul class="icons-list">
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">License</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Terms of Use</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Privacy Policy</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Security</a>
          </li>
        </ul>          

      </div> <!-- /.col -->

      <div class="col-sm-3">

        <h4>Settings</h4>

        <br>

        <ul class="icons-list">
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Consectetur adipisicing</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Eiusmod tempor </a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Fugiat nulla pariatur</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Officia deserunt</a>
          </li>
        </ul>        

      </div> <!-- /.col -->

    </div> <!-- /.row -->

  </div> <!-- /.container -->
  
</footer>

 <script src = "{{asset('scripts/js')}}/libs/jquery-1.10.1.min.js"></script>
  <script src="{{asset('scripts/js')}}/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="{{asset('scripts/js')}}/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="./{{asset('scripts/js')}}/libs/excanvas.compiled.js"></script>
  <![endif]-->
  
  <!-- Plugin JS -->
  <script src="{{asset('scripts/js')}}/plugins/icheck/jquery.icheck.js"></script>
  <script src="{{asset('scripts/js')}}/plugins/select2/select2.js"></script>
  <script src="{{asset('scripts/js')}}/libs/raphael-2.1.2.min.js"></script>
  <script src="{{asset('scripts/js')}}/plugins/morris/morris.min.js"></script>
  <script src="{{asset('scripts/js')}}/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="{{asset('scripts/js')}}/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="{{asset('scripts/js')}}/plugins/fullcalendar/fullcalendar.min.js"></script>

  <!-- App JS -->
  <script src="{{asset('scripts/js')}}/target-admin.js"></script>
  
  <!-- Plugin JS -->
  <script src="{{asset('scripts/js')}}/demos/dashboard.js"></script>
  <script src="{{asset('scripts/js')}}/demos/calendar.js"></script>
  <script src="{{asset('scripts/js')}}/demos/charts/morris/area.js"></script>
  <script src="{{asset('scripts/js')}}/demos/charts/morris/donut.js"></script>

</body>

</html>

