@extends('layouts.default')

@section('content')

<!--main content start-->
<section class="main-content-wrapper">
    <div class="pageheader">
        <h1>Working Page</h1>
        <p class="description">Welcome to Working Page</p>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Working Page</li>
            </ol>
        </div>
    </div>
    <section id="main-content" class="animated fadeInUp">
        
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default">


                    <div class="panel-heading">
                        <h3 class="panel-title">Target List</h3>
                        <div class="reportdate actions">
                            <i class="fa fa-calendar-o"></i>
                            <span>Apr 23 - Apr 29</span>
                            <b class="caret"></b>
                        </div>
                    </div>

                    <div class="panel-body server-chart">
                        <div class="row">
                                <div class="progress progress-striped active">
                                     <div class="progress-bar progress-bar-warning" style="width: 10%">黄帝内经 6/81 </div>
                                </div>

                                <div class="progress progress-striped active">
                                     <div class="progress-bar progress-bar-primary" style="width: 15%">吉他 10%</div>
                                </div>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 20%">网站 15%</div>
                                </div>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" style="width: 60%">60%</div>
                                </div>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" style="width: 80%">80%</div>
                                </div>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" style="width: 100%">100%</div>
                                </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
@stop