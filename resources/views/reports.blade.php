@extends('layouts.app')

@section('content')

<div class="info-section">
    <div class="panel-widget style2">
        <div class="b-meta">
            <img src="images/icon-5.png" alt="">
            <div class="info-meta">
                <span>Sales Earnings</span>
                <h4><ins>$</ins>0.00</h4>
                <i>10%</i>
            </div>
            <div class="spark">
                <div class="sparkline_line"></div>
            </div>
        </div>
    </div>
    <div class="panel-widget style2">
        <div class="b-meta"> <img src="images/icon-6.png" alt="">
            <div class="info-meta">
                <span>total sales</span>
                <h4>4512</h4>
                <i>20%</i>
            </div>
            <div class="spark">
                <div class="sparkline_three"></div>
            </div>
        </div>
    </div>
    <div class="panel-widget style2">
        <div class="b-meta"> <img src="images/icon-8.png" alt="">
            <div class="info-meta">
                <span>Today's Visits</span>
                <h4>158</h4>
                <i>30%</i>
            </div>
            <div class="spark">
                <div class="sparkline22"></div>
            </div>
        </div>
    </div>
</div>
<div class="info-section">
    <div class="panel-widget style2 top-25">
        <div class="b-meta">
            <img src="images/icon-5.png" alt="">
            <div class="info-meta">
                <span>Today's Earning</span>
                <h4>$300.19</h4>
                <i>30%</i>
            </div>
            <div class="spark">
                <div class="sparkline11"></div>
            </div>
        </div>
    </div>
    <div class="panel-widget style2 top-25">
        <div class="b-meta">
            <img src="images/icon-6.png" alt="">
            <div class="info-meta">
                <span>Today's Sales</span>
                <h4>3452</h4>
                <i>20%</i>
            </div>
            <div class="spark">
                <div class="sparkline_bar"></div>
            </div>
        </div>
    </div>
    <div class="panel-widget style2 top-25">
        <div class="b-meta">
            <img src="images/icon-8.png" alt="">
            <div class="info-meta">
                <span>Today's Visits</span>
                <h4>334</h4>
                <i>30%</i>
            </div>
            <div class="spark">
                <div class="sparkline12"></div>
            </div>
        </div>
    </div>
</div>
<!-- sparkline widgets-->

<div class="widget">
    <div class="quick-all-report">
        <div class="row">
            <div class="col-md-2">
                <div class="quick-all">
                    <span id="quick-visit" class="sparkline">1,5,2,7,9,6,7,11,9,13,12,15,14,18</span>
                    <h4>3,403</h4>
                    <p>Visits</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="quick-all">
                    <span id="quick-view" class="sparkline">6,4,7,2,9,8,2,5,4</span>
                    <h4>67,456</h4>
                    <p>Page Views</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="quick-all">
                    <span id="quick-page" class="sparkline">7,3,5,7,8,9,3,5,6</span>
                    <h4>67.9</h4>
                    <p>Page / Visits</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="quick-all">
                    <span id="quick-time" class="sparkline">7,5,2,6,7,8,5,8,7</span>
                    <h4>00:02:03</h4>
                    <p>Average Time</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="quick-all">
                    <span id="quick-returning" class="sparkline">4,6,7,8,3,5,8,6,5</span>
                    <h4>25%</h4>
                    <p>Returning Visits</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="quick-all">
                    <span id="quick-rate" class="sparkline">2,7,7,11,9,13,12,5,7</span>
                    <h4>66.1%</h4>
                    <p>Bounce Rate</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="widget">
            <div class="widget-title">
                <h4>Top Item Sales</h4>
                <span>Total Sales Made Today!</span>
                <ul class="widget-controls">
                    <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                    <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                    <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                </ul>

            </div>
            <div class="widget-peding">
                <div class="graph-inf">
                    <a href="#" class="gogl" title=""><i class="gren-skn"></i> Service A</a>
                    <a href="#" class="apl" title=""><i class="blu-skn"></i> Service B</a>
                </div>
                <div class="revenue-chart line">
                    <canvas id="canvas_line1"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="widget">
            <div class="widget-title no-margin">
                <h4>Total Revenue</h4>
                <ul class="widget-controls">
                    <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                    <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                    <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                </ul>
                <div class="graph-inf"> <a href="#" class="serv1" title=""><i class="prpl-skn"></i> Service A</a> <a
                        href="#" class="serv2" title=""><i class="gren-skn"></i> Service B</a> </div>
            </div>
            <div class="widget">
                <div class="revenue-chart line">
                    <canvas id="mybarChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
        <div class="widget">
            <div class="widget-title no-margin">
                <h4>Referrals</h4>
                <ul class="widget-controls">
                    <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                    <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                    <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                </ul>
                <div class="graph-inf"> <a href="#" class="fcb" title=""><i class="gren-skn"></i> Facebook</a> <a
                        href="#" class="gogl" title=""><i class="rd-skn"></i> Google</a> <a href="#" class="apl"
                        title=""><i class="prpl-skn"></i> Apple</a> </div>
            </div>
            <div class="widget">
                <div class="revenue-chart line">
                    <canvas id="canvas_line"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- line dot chart full -->

<div class="row merg10">
    <div class="col-lg-4 col-sm-6">
        <div class="widget">
            <div class="widget-title">
                <h4>Statistics</h4>
                <ul class="widget-controls">
                    <li class="refresh-content"><i class="fa fa-refresh"></i></li>
                    <li class="expand-content"><img src="images/full-screen.html" alt=""></li>
                </ul>
            </div>
            <div class="line-chart">
                <div class="static">
                    <div class="static-info">
                        <h4>63%</h4>
                        <span>2,341 New Customers</span>
                    </div>
                    <ul>
                        <li class="green">upcoming</li>
                        <li class="purpal">incoming</li>
                    </ul>
                </div>
                <canvas id="canvas_line5"></canvas>
            </div>
        </div>
        <!-- guage widget -->
    </div>
    <!-- statics chart widget -->
    <div class="col-lg-4 col-sm-6">
        <div class="widget">
            <div class="widget-title">
                <h4>Monthly visits</h4>
                <ul class="widget-controls">
                    <li class="refresh-content"><i class="fa fa-refresh"></i></li>
                    <li class="expand-content"><img src="images/full-screen.html" alt=""></li>
                </ul>
            </div>
            <div class="donut-chart">
                <ul class="total">
                    <li>Google Plus<span>25A</span></li>
                    <li>Direct Access<span>1034</span></li>
                </ul>
                <canvas id="canvasDoughnut"></canvas>
                <ul class="total">
                    <li>Facebook<span>779</span></li>
                    <li>Twitter<span>489</span></li>
                </ul>
            </div>
        </div>
        <!-- guage widget -->
    </div>
    <!-- donut widget -->
    <div class="col-lg-4 col-sm-6">
        <div class="widget">
            <div class="widget-title">
                <h4>Monthly sales</h4>
                <ul class="widget-controls">
                    <li class="refresh-content"><i class="fa fa-refresh"></i></li>
                    <li class="expand-content"><img src="images/full-screen.html" alt=""></li>
                </ul>
            </div>
            <div class="">
                <div class="gage-chart">
                    <div id="echart_gauge" style="height:370px;"></div>
                </div>
                <ul class="total-count">
                    <li> <span>$18,249</span> <i>Completed</i> </li>
                    <li> <span>$10,298</span> <i>Remaining</i> </li>
                </ul>
            </div>
        </div>
        <!-- guage widget -->
    </div>
    <!-- guage widget -->
</div>
<div class="widget">
    <div class="widget-title">
        <h4>Organizational Statistics</h4>
        <ul class="widget-controls">
            <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
            <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
            <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
        </ul>
    </div>
    <div class="widget-peding">
        <div class="revenue-chart line">
            <canvas id="canvas_line4"></canvas>
        </div>
    </div>
</div>
<!-- line dot chart full -->

<div class="row merg10">
    <div class="col-lg-4 col-sm-6">
        <div class="widget">
            <div class="widget-title">
                <h4>top Sales </h4>
                <ul class="widget-controls">
                    <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                    <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                    <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                </ul>
            </div>
            <div class="">
                <div class="pie-chart">
                    <ul class="total">
                        <li>Store<span>16b</span></li>
                        <li>online<span>20</span></li>
                    </ul>
                    <canvas id="pieChart"></canvas>
                    <ul class="total">
                        <li>services<span>150</span></li>
                        <li>shares<span>29</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- top sale donut pie chart -->
    </div>
    <div class="col-lg-8 col-sm-6">
        <div class="widget">
            <div class="widget-title">
                <h4>Browser Viewed</h4>
                <ul class="widget-controls">
                    <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                    <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                    <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                </ul>
                <em>Most Browser Viewed</em>
            </div>
            <div class="mst-brw">
                <div class="most-browsers">
                    <div class="pieID pie"> </div>
                    <ul class="pieID legend">
                        <li> <em>Chrome</em> <span>1118</span> </li>
                        <li> <em>Firefox</em> <span>300</span> </li>
                        <li> <em>Opera</em> <span>300</span> </li>
                        <li> <em>Safari</em> <span>500</span> </li>
                        <li> <em>Explorer</em> <span>400</span> </li>
                    </ul>
                </div>
                <a href="#" title=""><i class="fa fa-cog"></i> Change Settings</a>
            </div>
        </div>
    </div>


    <div class="col-md-12 col-sm-12">
        <div class="widget">
            <div class="widget-title">
                <h4>yearly sales</h4>
                <ul class="widget-controls">
                    <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                    <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                    <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                </ul>
            </div>
            <div class="widget-peding">
                <div class="revenue-chart">
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="chart-info"> <span>yearly sales</span>
                    <ul>
                        <li class="mango"><a href="#" title="">2015</a></li>
                        <li class="carrot"><a href="#" title="">2016</a></li>
                        <li class="berry"><a href="#" title="">2017</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- line chart widget full -->
    </div>
</div>
<!-- three widgets -->


@endsection

@section('extra')

@endsection
