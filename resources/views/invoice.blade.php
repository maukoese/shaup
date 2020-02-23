@extends('layouts.app')

@section('content')
<div class="invoice-pad">
    <div class="gap no-gap">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="invoice-info"> <img src="images/logo2.png" alt="">
                    <h3>Subject: <span>invoice for bootstrap4 only </span></h3>
                    <h4>invoice info</h4>
                    <ul class="some-about">
                        <li><span>date:</span>05 January 2017</li>
                        <li><span>status:</span><i>pending</i></li>
                        <li><span>id:</span>#145698</li>
                        <li><span>Invoice#:</span>#12398521473</li>
                        <li><span>Total Due:</span>$298</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="invoice-detail">

                    <h4>Invoice No: <span>01-qrv-0112</span></h4>
                    <h5>Dragon Delivery</h5>
                    <p>208, Peris Point, Dep, Tianhe Road Guangzhou, GD, 51000</p>
                    <ul class="some-about">
                        <li><span>E-mail:</span> <a
                                href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="75061007031c1610351c1b131a5b161a18">[email&#160;protected]</a>
                        </li>
                        <li><span>Phone:</span>(123) 456-7890</li>
                        <li><span>fax:</span>123-456-3210 </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="gap no-top">
        <div class="invoice-table">
            <div class="widget">
                <table class="prj-tbl striped bordered table-responsive">
                    <thead class="drk">
                        <tr>
                            <th><em>No.</em></th>
                            <th><em>Projects</em></th>
                            <th><em>Amount</em></th>
                            <th><em>Quantity</em></th>
                            <th><em>Total</em></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span>01</span></td>
                            <td><i>Pretty Little Pie Chart (PSD)</i></td>
                            <td><ins>$200.00</ins></td>
                            <td><i>02</i></td>
                            <td><i>$400.00</i></td>
                        </tr>
                        <tr>
                            <td><span>02</span></td>
                            <td><i>Map Pins & Tooltips</i></td>
                            <td><ins>$200.00</ins></td>
                            <td><i>02</i></td>
                            <td><i>$400.00</i></td>
                        </tr>
                        <tr>
                            <td><span>03</span></td>
                            <td><i>Vector World Map</i></td>
                            <td><ins>$200.00</ins></td>
                            <td><i>02</i></td>
                            <td><i>$400.00</i></td>
                        </tr>
                        <tr>
                            <td><span>04</span></td>
                            <td><i>World map and info</i></td>
                            <td><ins>$200.00</ins></td>
                            <td><i>02</i></td>
                            <td><i>$400.00</i></td>
                        </tr>
                        <tr>
                            <td><span>05</span></td>
                            <td><i>Map Pins & Tooltips</i></td>
                            <td><ins>$200.00</ins></td>
                            <td><i>02</i></td>
                            <td><i>$400.00</i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="gap no-gap">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <ul class="some-about">
                    <li><span>date:</span>05 January 2017</li>
                    <li><span>status:</span><i>pending</i></li>
                    <li><span>id:</span>#145698</li>
                    <li class="total-amount"><span>Total:</span><i>$1702.00</i></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="proced-btns"> <a class="btn-st " href="#" title="">print
                        invoice</a> <a class="btn-st drk-clr" href="#"
                        title="">cancel invoice</a> </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra')
@endsection
