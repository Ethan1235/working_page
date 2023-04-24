@extends('layouts.default')

@section('content')

<!--main content start-->
        <section class="main-content-wrapper">
            <div class="pageheader">
                <h1>Dashboard</h1>
                <p class="description">Welcome to NEUBOARD Responsive Admin Theme</p>
                <div class="breadcrumb-wrapper hidden-xs">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <section id="main-content" class="animated fadeInUp">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-solid-success widget-mini">
                                    <div class="panel-body">
                                        <i class="icon-bar-chart"></i>
                                        <span class="total text-center">$3,200</span>
                                        <span class="title text-center">Earnings</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel widget-mini">
                                    <div class="panel-body">
                                        <i class="icon-support"></i>
                                        <span class="total text-center">1,230</span>
                                        <span class="title text-center">Support</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel widget-mini">
                                    <div class="panel-body">
                                        <i class="icon-envelope-open"></i>
                                        <span class="total text-center">1,680</span>
                                        <span class="title text-center">Messages</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-solid-info widget-mini">
                                    <div class="panel-body">
                                        <i class="icon-user"></i>
                                        <span class="total text-center">12,680</span>
                                        <span class="title text-center">Signups</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-default browser-chart">
                            <div class="panel-heading">
                                <h3 class="panel-title">BROWSER STATS</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <ul>
                                            <li><i class="fa fa-circle success-color"></i> Chrome</li>
                                            <li><i class="fa fa-circle primary-color"></i> IE</li>
                                            <li><i class="fa fa-circle warning-color"></i> Safari</li>
                                            <li><i class="fa fa-circle info-color"></i> Firefox</li>
                                            <li><i class="fa fa-circle default-color"></i> Other</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div id="doughnut-canvas-holder">
                                            <canvas id="doughnut-chart-area" width="137" height="137"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Monthly Goal</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-expand"></i>
                                </div>
                            </div>
                            <div class="panel-body widget-gauge">
                                <canvas width="160" height="100" id="gauge" class=""></canvas>
                                <div class="goal-wrapper">
                                    <span class="gauge-value pull-left">$</span>
                                    <span id="gauge-text" class="gauge-value pull-left">3,200</span>
                                    <span id="goal-text" class="goal-value pull-right">$5,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">SERVER STATS</h3>
                                <div class="reportdate actions">
                                    <i class="fa fa-calendar-o"></i>
                                    <span>Jan 1 - June 30</span>
                                    <b class="caret"></b>
                                </div>
                            </div>
                            <div class="panel-body server-chart">
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <ul>
                                            <li>
                                                <span class="text-left">Network Usage</span>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="text-left">CPU Load</span>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                    </div>
                                    <div class="col-md-12 col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <div class="line-chart">
                                                    <canvas id="canvas1" height="100"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="bar-chart">
                                                    <canvas id="canvas2" height="100"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Animated Progress</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-expand"></i>
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-default" style="width: 10%">皇帝内径10%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-primary" style="width: 20%">20%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 40%">40%</div>
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
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="calendar-block ">
                                    <div class="cal1">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Weather</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-expand"></i>
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body widget-weather">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <h3 class="text-center title">Today</h3>
                                        <div class="text-center">
                                            <canvas id="clear-day" width="75" height="75"></canvas>
                                            <div class="temp">62°C</div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <h3 class="text-center title">Tonight</h3>
                                        <div class="text-center">
                                            <canvas id="partly-cloudy-night" width="75" height="75"></canvas>
                                            <div class="temp">44°C</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <h6 class="text-center small-thin uppercase">Mon</h6>
                                        <div class="text-center">
                                            <canvas id="partly-cloudy-day" width="32" height="32"></canvas>
                                            <span>48°C</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <h6 class="text-center small-thin uppercase">Tue</h6>
                                        <div class="text-center">
                                            <canvas id="rain" width="32" height="32"></canvas>
                                            <span>39°C</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <h6 class="text-center small-thin uppercase">Wed</h6>
                                        <div class="text-center">
                                            <canvas id="sleet" width="32" height="32"></canvas>
                                            <span>32°C</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <h6 class="text-center small-thin uppercase">Thu</h6>
                                        <div class="text-center">
                                            <canvas id="snow" width="32" height="32"></canvas>
                                            <span>28°C</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <h6 class="text-center small-thin uppercase">Fri</h6>
                                        <div class="text-center">
                                            <canvas id="wind" width="32" height="32"></canvas>
                                            <span>40°C</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <h6 class="text-center small-thin uppercase">Sat</h6>
                                        <div class="text-center">
                                            <canvas id="fog" width="32" height="32"></canvas>
                                            <span>42°C</span>
                                        </div>
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