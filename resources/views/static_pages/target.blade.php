<!DOCTYPE html>
<html class="no-js">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NeuBoard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <!-- Fonts  -->
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/simple-line-icons.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="static/css/animate.css">
    <!-- Daterange Picker -->
    <link rel="stylesheet" href="static/css/daterangepicker-bs3.css">
    <!-- Switchery -->
    <link rel="stylesheet" href="static/css/switchery.min.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="static/css/main.css">
    <!-- Feature detection -->
    <script src="static/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/vendor/html5shiv.js"></script>
    <script src="assets/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--main content start-->

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">学习中医知识</h3>
        <div class="actions pull-right">
            <i class="fa fa-expand"></i>
            <i class="fa fa-chevron-down"></i>
            <i class="fa fa-times"></i>
        </div>
    </div>
    <div class="panel-body">
        <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-warning" style="width: 10%"> 素问 6/81</div>
        </div>
        <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-success" style="width: 25%">四书五经</div>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">康之源自研系统</h3>
        <div class="actions pull-right">
            <i class="fa fa-expand"></i>
            <i class="fa fa-chevron-down"></i>
            <i class="fa fa-times"></i>
        </div>
    </div>
    <div class="panel-body">
        <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-default" style="width: 15%">Laravel 课程 1/6%</div>
        </div>
        <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-info" style="width: 40%">重刷一遍Docker</div>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Alerts</h3>
        <div class="actions pull-right">
            <i class="fa fa-expand"></i>
            <i class="fa fa-chevron-down"></i>
            <i class="fa fa-times"></i>
        </div>
    </div>
    <div class="panel-body">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>夜卧早起！</strong>使志生而勿杀，春气之应，养生之道，逆之则伤肝。</div>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Heads up!</strong>11点就该准备睡觉了。</div>
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Warning!</strong>7点半就该起床了。</div>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Oh snap!</strong>Change a few things up and try submitting again.</div>
    </div>
</div>






    <!--Global JS-->
    <script src="static/js/jquery-1.11.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/jquery.navgoco.min.js"></script>
    <script src="static/js/pace.min.js"></script>
    <script src="static/js/jquery.fullscreen-min.js"></script>
    <script src="static/js/app.js"></script>
    <!--Page Level JS-->
    <script src="static/js/jquery.countTo.js"></script>
    <script src="static/js/skycons.js"></script>
    <script src="static/js/moment.min.js"></script>
    <script src="static/js/daterangepicker.js"></script>
    <!-- ChartJS  -->
    <script src="static/js/Chart.min.js"></script>
    <!-- Morris  -->
    <script src="static/js/morris.min.js"></script>
    <script src="static/js/raphael.2.1.0.min.js"></script>
    <!-- Vector Map  -->
    <script src="static/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="static/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Gauge  -->
    <script src="static/js/gauge.min.js"></script>
    <script src="static/js/gauge-demo.js"></script>
    <!-- Calendar  -->
    <script src="static/js/clndr.js"></script>
    <script src="static/js/clndr-demo.js"></script>
    <script src="static/js/underscore-min.js"></script>
    <!-- Switch -->
    <script src="static/js/switchery.min.js"></script>
    <!--Load these page level functions-->
    <script>
    $(document).ready(function() {
        app.dateRangePicker();
        app.chartJs();
        app.weather();
        app.spinStart();
        app.spinStop();
    });
    </script>
     
</body>
</html>