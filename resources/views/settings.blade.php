@extends('layouts.app')

@section('content')
<div class="row">


    <div class="col-lg-3">
        <div class="card">
            <ul class="nav nav-lg nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#tab1" data-toggle="tab">Account Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab3" data-toggle="tab">Invoice Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab4" data-toggle="tab">Invoice Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab5" data-toggle="tab">Email Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab6" data-toggle="tab">Email Notification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab7" data-toggle="tab">SMS Notification</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="col-lg-9 tab-content">
        <form class="card form-type-material tab-pane fade active show" id="tab1" method="POST"
            action='{{url("users/".auth()->user()->id)}}'>
            @method('PUT')
            @csrf
            <h4 class="card-title fw-400">User Details</h4>

            <div class="card-body">
                <div class="flexbox gap-items-4">
                    <img class="avatar avatar-xl" src="{{auth()->user()->avatar}}" alt="{{auth()->user()->name}}">

                    <div class="flex-grow">
                        <h5>{{auth()->user()->name}}</h5>
                        <div class="d-felx flex-column flex-sm-row gap-y gap-items-2 mt-16">
                            <div class="file-group file-group-inline">
                                <button class="btn btn-sm btn-w-lg btn-outline btn-round btn-secondary file-browser"
                                    type="button">Change Picture</button>
                                <input type="file">
                            </div>

                            <a class="btn btn-sm btn-w-lg btn-outline btn-round btn-danger align-top" href="#">Delete
                                Picture</a>
                        </div>

                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" value="{{auth()->user()->name}}">
                            <label>First name</label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <input class="form-control" type="text" name="email" value="{{auth()->user()->email}}">
                    <label>Email</label>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" title="&#xA0;" data-provide="selectpicker">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                                <option>United Kingdom</option>
                            </select>
                            <label>Country</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="phone" value="{{auth()->user()->phone}}">
                            <label>Phone</label>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="card-footer text-right">
                <button class="btn btn-flat btn-primary" type="submit">Save Changes</button>
            </footer>
        </form>




        <form class="card form-type-material tab-pane fade" id="tab3" method="POST" action="{{url('settings')}}">
            @csrf

            <input type="hidden" name="user_id" value="{{auth()->id()}}">
            <input type="hidden" name="option" value="invoice">
            <h4 class="card-title fw-400">Invoice Settings</h4>

            <div class="card-body">
                <h6>Invoice number</h6>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" name="value[prefix]" type="text" value="{{auth()->user()->setting('invoice', 'prefix', '#')}}">
                            <label>Prefix</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" name="value[padding]" type="text" value="{{auth()->user()->setting('invoice', 'padding', '5')}}">
                            <label>Padding</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" name="value[counter]" type="text" value="1">
                            <label>Counter</label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <textarea class="form-control" name="value[footer]" rows="4">{!! auth()->user()->setting('invoice', 'footer', 'Something random') !!}</textarea>
                    <label>Default footer</label>
                </div>


                <div class="form-group">
                    <textarea class="form-control" name="value[terms]" rows="4"></textarea>
                    <label>Default terms and service</label>
                </div>

            </div>

            <footer class="card-footer text-right">
                <button class="btn btn-flat btn-primary" type="submit">Save Changes</button>
            </footer>
        </form>






        <form class="card form-type-material tab-pane fade" id="tab4">
            <h4 class="card-title fw-400">Invoice Design</h4>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" data-provide="selectpicker">
                                <option selected>Clean</option>
                                <option>Modern</option>
                                <option>Bold</option>
                                <option>Plain</option>
                            </select>
                            <label>Theme</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" data-provide="selectpicker">
                                <option selected>Roboto</option>
                                <option>Open Sans</option>
                                <option>Ubunto</option>
                                <option>Arial</option>
                            </select>
                            <label>Font</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" data-provide="selectpicker">
                                <option>A1</option>
                                <option>A2</option>
                                <option>A3</option>
                                <option selected>A4</option>
                                <option>A5</option>
                            </select>
                            <label>Page size</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" type="text" value="12">
                            <label>Font size</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" type="text" value="#33cabb" data-provide="colorpicker">
                            <label>Primary Color</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" type="text" value="#48b0f7" data-provide="colorpicker">
                            <label>Primary Color</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="switch-indicator"></span>
                                <span class="switch-description">Hide header</span>
                            </label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="switch-indicator"></span>
                                <span class="switch-description">Hide footer</span>
                            </label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="switch-indicator"></span>
                                <span class="switch-description">High quality PDF</span>
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <footer class="card-footer text-right">
                <button class="btn btn-flat btn-primary" type="submit">Save Changes</button>
            </footer>
        </form>







        <form class="card tab-pane fade" id="tab5">
            <h4 class="card-title fw-400">Email Settings</h4>

            <div class="card-body">
                <div class="row form-type-material">

                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" data-provide="selectpicker">
                                <option selected>Modern</option>
                                <option>Light</option>
                                <option>Dark</option>
                            </select>
                            <label>Email template</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" data-provide="selectpicker">
                                <option selected>Roboto</option>
                                <option>Open Sans</option>
                                <option>Ubunto</option>
                                <option>Arial</option>
                            </select>
                            <label>Font</label>
                        </div>
                    </div>
                </div>

                <hr>


                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Attach PDFs</span>
                    </label>
                </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Send as HTML</span>
                    </label>
                </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Include a link to PDF</span>
                    </label>
                </div>


            </div>

            <footer class="card-footer text-right">
                <button class="btn btn-flat btn-primary" type="submit">Save Changes</button>
            </footer>
        </form>







        <form class="card tab-pane fade" id="tab6">
            <h4 class="card-title fw-400">Email Settings</h4>

            <div class="card-body">

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Email me when an invoice is sent</span>
                    </label>
                </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Email me when an invoice is viewed</span>
                    </label>
                </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Email me when an invoice is paid</span>
                    </label>
                </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Email me when a quote is approved</span>
                    </label>
                </div>


            </div>

            <footer class="card-footer text-right">
                <button class="btn btn-flat btn-primary" type="submit">Save Changes</button>
            </footer>
        </form>







        <form class="card tab-pane fade" id="tab7">
            <h4 class="card-title fw-400">SMS Settings</h4>

            <div class="card-body">


                    <div class="form-group">
                        <input class="form-control" name="value[padding]" type="text" value="{{auth()->user()->setting('sms', 'phone', auth()->user()->phone)}}">
                        <label>Send SMS to this number</label>
                    </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Email me when an invoice is sent</span>
                    </label>
                </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Email me when an invoice is viewed</span>
                    </label>
                </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Email me when an invoice is paid</span>
                    </label>
                </div>

                <div class="form-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-indicator"></span>
                        <span class="switch-description">Email me when a quote is approved</span>
                    </label>
                </div>


            </div>

            <footer class="card-footer text-right">
                <button class="btn btn-flat btn-primary" type="submit">Save Changes</button>
            </footer>
        </form>







    </div>


</div>
@endsection

@section('extra')
@endsection
