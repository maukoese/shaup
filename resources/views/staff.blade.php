@extends('layouts.app')
@php($title = 'Remit')
@php($user = \App\User::find(1))
@section('content')

<div class="row">

    <div class="col-lg-12">

        <form class="card form-type-material" id="tab2" method="POST" action='{{url("process")}}'
            enctype="multipart/form-data">
            @csrf

            <div class="card-body row">
                <div class="col-md-6">
                    <div class="form-group text-full-name row">
                        <input class="form-control col-md-6 m-2" name="text-full-name" type="text" value=""
                            aria-invalid="false" aria-required="true" required="" placeholder="Full Name">
                        <input class="form-control col-md-4 offset-md-1 pt-1" name="pin" type="text" value=""
                            aria-invalid="false" aria-required="true" required="" placeholder="KRA PIN">
                    </div>
                    <br> CHOOSE TAX RETURN YEAR
                    <div class="btQuoteBooking" style="opacity: 1;">
                        <div class="btQuoteBookingWrap">
                            <div class="btQuoteBookingForm btActive">
                                <div class="row">
                                    @foreach ([2015, 2016, 2017, 2018, 2020, 2020] as $item)

                                    <div class="form-group col" id="btQuoteItem5e2a9c84236c2">
                                        <label class="switch">
                                            <div>
                                                <input type="checkbox" name="years[]" value="{{$item}}" {{($item == date('Y') ? 'checked' : '')}}>

                                                <span class="switch-indicator"></span>
                                                <span class="switch-description">{{$item}}</span>
                                            </div>
                                        </label>
                                    </div>
                                    @endforeach
                            </div>
                                <div class="form-group" id="btQuoteItem5e2a9c84237e6">
                                    <label class="switch">
                                        <div class="btQuoteSwitch btQuoteElement" data-off="0" data-on="1000">

                                            <input type="checkbox" checked>

                                            <span class="switch-indicator"></span>
                                            <span class="switch-description">MIGRATING TAXPAYER PIN TO ITAX</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-group" id="btQuoteItem5e2a9c84238dc">
                                    <label class="switch">
                                        <div class="btQuoteSwitch btQuoteElement" data-off="0" data-on="1000">

                                            <input type="checkbox" checked>

                                            <span class="switch-indicator"></span>
                                            <span class="switch-description">CHANGE EMAIL LINKED TO PIN</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-group" id="btQuoteItem5e2a9c84239d0">
                                    <label class="switch">
                                        <div class="btQuoteSwitch btQuoteElement" data-off="0" data-on="1000">

                                            <input type="checkbox" checked>

                                            <span class="switch-indicator"></span>
                                            <span class="switch-description">AMEND PIN DETAILS</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="btTotalNextWrapper">
                                    <div class="btQuoteTotal"><span class="btQuoteTotalText">Total</span><span
                                            class="btQuoteTotalCurrency">Ksh</span><span
                                            class="btQuoteTotalCalc">0.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group text-full-name row">
                        <input class="form-control col-md-5 m-1" name="phone" type="text" value="" aria-invalid="false"
                            aria-required="true" required="" placeholder="Phone Number">
                        <input class="form-control col-md-6 m-1" name="email" type="email" value=""
                            aria-invalid="false" aria-required="true" required="" placeholder="Email Address">
                    </div>
                    <div class="form-group form-type-material file-group">
                        <input type="text" class="form-control file-value file-browser" readonly="">
                        <label>P9/ TAX DEDUCTION CARD FOR THE YEAR</label>
                        <input type="file" multiple="">
                    </div>
                    <br> DO YOU PERSONALLY PAY FOR THE FOLLOWING?
                    <div class="form-group checkbox checkbox-841">
                        <div class="custom-control custom-checkbox">
                            <input name="checkbox-841[]" type="checkbox" class="custom-control-input"
                                value="Life Insurance" aria-invalid="false" aria-required="true" required="">
                            <label class="custom-control-label">Life Insurance</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="checkbox-841[]" type="checkbox" class="custom-control-input"
                                value="Medical Insurance" aria-invalid="false" aria-required="true" required="">
                            <label class="custom-control-label">Medical Insurance</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="checkbox-841[]" type="checkbox" class="custom-control-input"
                                value="Education Policy" aria-invalid="false" aria-required="true" required="">
                            <label class="custom-control-label">Education Policy</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="checkbox-841[]" type="checkbox" class="custom-control-input" value="None"
                                aria-invalid="false" aria-required="true" required="">
                            <label class="custom-control-label">None</label>
                        </div>
                    </div>
                    <br> DO YOU HAVE A MORTGAGE?
                    <div class="form-group checkbox exclusive-checkbox checkbox-806">
                        <div class="custom-control custom-checkbox">
                            <input name="checkbox-806[]" type="checkbox" class="custom-control-input" value="YES"
                                aria-invalid="false" aria-required="true" required="">
                            <label class="custom-control-label">YES</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="checkbox-806[]" type="checkbox" class="custom-control-input" value="NO"
                                aria-invalid="false" aria-required="true" required="">
                            <label class="custom-control-label">NO</label>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="bt-cc-data" value="" class="form-control hidden">

            </div>

            <footer class="card-footer text-right">
                <button class="btn btn-flat btn-danger" type="reset">Reset</button>
                <button class="btn btn-flat btn-primary" type="submit">Submit Now</button>
            </footer>
        </form>

    </div>

</div>
@endsection

@section('extra')
@endsection

@section('scripts')
@endsection
