@extends('layouts.app')

@section('content')
<div class="inner-bg">
    <div class="pnl-bdy billing-sec">
        <div class="row">
            <div class="col-md-6 col-sm-6 field">
                <label>Your Name <span>*</span> </label>
                <input value="Brian" type="text">
            </div>
            <div class="col-md-6 col-sm-6 field">
                <label>Last Name <span>*</span> </label>
                <input value="Kelly" type="text">
            </div>
            <div class="col-md-6 col-sm-6 field">
                <label>Country <span>*</span> </label>
                <select>
                    <option>United State</option>
                    <option>Pakistan</option>
                    <option>United State</option>
                </select>
            </div>
            <div class="col-md-6 col-sm-6 field">
                <label>City <span>*</span> </label>
                <input placeholder="Enter Your City" type="text">
            </div>
            <div class="col-md-12 col-sm-12 field">
                <label>Address Line 1 <span>*</span> </label>
                <input placeholder="" type="text">
            </div>
            <div class="col-md-12 col-sm-12 field">
                <label>Address Line 2 <span>*</span> </label>
                <input placeholder="" type="text">
            </div>
            <div class="col-md-6 col-sm-12 field">
                <label>State / Province <span>*</span> </label>
                <input placeholder="" type="text">
            </div>
            <div class="col-md-6 col-sm-12 field">
                <label>Zip / Postal Code <span>*</span> </label>
                <input value="" type="text">
            </div>
            <div class="col-md-12 col-sm-12 field">
                <span class="upload-image">upload image</span>
                <label class="fileContainer"> <span>upload</span>
                    <input type="file">
                </label>
            </div>
            <div class="col-md-4 col-sm-6 field">
                <label>Add Facebook URL <span>*</span> </label>
                <input value="http://m.facebook.com/webinane" type="text">
            </div>
            <div class="col-md-4 col-sm-6 field">
                <label>Add Twitter URL <span>*</span> </label>
                <input value="http://m.twitter.com/webinane" type="text">
            </div>
            <div class="col-md-4 col-sm-12 field">
                <label>Add Google URL <span>*</span> </label>
                <input value="http://m.google.com/webinane" type="text">
            </div>
            <div class="col-md-12 col-sm-12 field">
                <label>Add Google URL <span>*</span> </label>
                <input value="http://m.google.com/webinane" type="text">
            </div>
            <div class="col-md-12 col-sm-12">
                <button type="submit">Save Settings Now</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra')

@endsection
