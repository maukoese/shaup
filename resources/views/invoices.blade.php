@extends('layouts.app')

@section('content')
<div class="media-list media-list-divided media-list-hover" data-provide="selectall">

    <header class="flexbox align-items-center media-list-header bg-transparent b-0 py-16 pl-20">
        <div class="flexbox align-items-center">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
            </div>

            <span class="divider-line mx-1"></span>

            <div class="dropdown">
                <a class="btn btn-sm dropdown-toggle" data-toggle="dropdown" href="#">Sort by</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Create Date</a>
                    <a class="dropdown-item" href="#">Due Date</a>
                    <a class="dropdown-item" href="#">Client</a>
                    <a class="dropdown-item" href="#">Amount</a>
                    <a class="dropdown-item" href="#">Status</a>
                </div>
            </div>
        </div>

        <div>
            <div class="lookup lookup-circle lookup-right">
                <input type="text" data-provide="media-search">
            </div>
        </div>
    </header>


    <div class="media-list-body bg-white b-1">
        <div class="media align-items-center">
            <div class="custom-control custom-checkbox pr-12">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
            </div>

            <a class="flexbox align-items-center flex-grow gap-items text-truncate" href="#qv-user-details"
                data-toggle="quickview">
                <img class="avatar" src="assets/img/avatar/1.jpg" alt="...">

                <div class="media-body text-truncate">
                    <h6>Maryam Amiri</h6>
                    <small>
                        <span>#68435</span>
                        <span class="divider-dash">Due on 23 March 2017</span>
                        <span class="divider-dash"><span class="text-warning">Sent</span></span>
                    </small>
                </div>
            </a>

            <span class="lead text-fade">$2,500</span>
        </div>


        <div class="media align-items-center">
            <div class="custom-control custom-checkbox pr-12">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
            </div>

            <a class="flexbox align-items-center flex-grow gap-items text-truncate" href="#qv-user-details"
                data-toggle="quickview">
                <img class="avatar" src="assets/img/avatar/2.jpg" alt="...">

                <div class="media-body text-truncate">
                    <h6>Hossein Shams</h6>
                    <small>
                        <span>#68531</span>
                        <span class="divider-dash">Due on 03 March 2017</span>
                        <span class="divider-dash"><span class="text-warning">Sent</span></span>
                    </small>
                </div>
            </a>

            <span class="lead text-fade">$3,500</span>
        </div>



        <div class="media align-items-center">
            <div class="custom-control custom-checkbox pr-12">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
            </div>

            <a class="flexbox align-items-center flex-grow gap-items text-truncate" href="#qv-user-details"
                data-toggle="quickview">
                <img class="avatar" src="assets/img/avatar/3.jpg" alt="...">

                <div class="media-body text-truncate">
                    <h6>Sarah Conner</h6>
                    <small>
                        <span>#98654</span>
                        <span class="divider-dash">Due on 18 February 2017</span>
                        <span class="divider-dash"><span class="text-success">Paid</span></span>
                    </small>
                </div>
            </a>

            <span class="lead text-fade">$5,400</span>
        </div>




        <div class="media align-items-center">
            <div class="custom-control custom-checkbox pr-12">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
            </div>

            <a class="flexbox align-items-center flex-grow gap-items text-truncate" href="#qv-user-details"
                data-toggle="quickview">
                <img class="avatar" src="assets/img/avatar/4.jpg" alt="...">

                <div class="media-body text-truncate">
                    <h6>Frank Camly</h6>
                    <small>
                        <span>#46358</span>
                        <span class="divider-dash">Due on 15 February 2017</span>
                        <span class="divider-dash"><span class="text-danger">NOT PAID</span></span>
                    </small>
                </div>
            </a>

            <span class="lead text-fade">$6,000</span>
        </div>




        <div class="media align-items-center">
            <div class="custom-control custom-checkbox pr-12">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
            </div>

            <a class="flexbox align-items-center flex-grow gap-items text-truncate" href="#qv-user-details"
                data-toggle="quickview">
                <img class="avatar" src="assets/img/avatar/default.jpg" alt="...">

                <div class="media-body text-truncate">
                    <h6>Garret Gloss</h6>
                    <small>
                        <span>#54882</span>
                        <span class="divider-dash">Due on 09 February 2017</span>
                        <span class="divider-dash"><span class="text-success">Paid</span></span>
                    </small>
                </div>
            </a>

            <span class="lead text-fade">$9,900</span>
        </div>





        <div class="media align-items-center">
            <div class="custom-control custom-checkbox pr-12">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
            </div>

            <a class="flexbox align-items-center flex-grow gap-items text-truncate" href="#qv-user-details"
                data-toggle="quickview">
                <img class="avatar" src="assets/img/avatar/5.jpg" alt="...">

                <div class="media-body text-truncate">
                    <h6>Bobby Mincy</h6>
                    <small>
                        <span>#87634</span>
                        <span class="divider-dash">Due on 26 January 2017</span>
                        <span class="divider-dash"><span class="text-success">Paid</span></span>
                    </small>
                </div>
            </a>

            <span class="lead text-fade">$7,500</span>
        </div>

    </div>


    <footer class="flexbox align-items-center py-20">
        <span class="flex-grow text-right text-lighter pr-2">1-10 of 1,853</span>
        <nav>
            <a class="btn btn-sm btn-square disabled" href="#"><i class="ti-angle-left"></i></a>
            <a class="btn btn-sm btn-square" href="#"><i class="ti-angle-right"></i></a>
        </nav>
    </footer>

</div>
@endsection

@section('extra')
<div class="fab fab-fixed">
    <a class="btn btn-float btn-primary" href="#qv-invoice-add" title="New Invoice" data-provide="tooltip"
        data-toggle="quickview"><i class="ti-plus"></i></a>
</div>




<!-- Quickview - Add invoice -->
<div id="qv-invoice-add" class="quickview quickview-lg">
    <header class="quickview-header">
        <p class="quickview-title lead fw-400">Create new invoice</p>
        <span class="close"><i class="ti-close"></i></span>
    </header>

    <div class="quickview-body">

        <div class="quickview-block form-type-material">

            <h6>Details</h6>
            <div class="form-group">
                <input type="text" class="form-control">
                <label>Client</label>
            </div>

            <div class="form-group">
                <input type="text" class="form-control">
                <label>Invoice Number</label>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" data-provide="datepicker">
                <label>Invoice Date</label>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" data-provide="datepicker">
                <label>Due Date</label>
            </div>

            <div class="form-group input-group">
                <div class="input-group-input">
                    <input type="text" class="form-control">
                    <label>Discount</label>
                </div>
                <select data-provide="selectpicker">
                    <option>Percent</option>
                    <option>Amount</option>
                </select>
            </div>

            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
                <label>Note to client</label>
            </div>

            <div class="h-40px"></div>

            <h6>Products</h6>

            <div class="form-group input-group align-items-center">
                <select title="Item" data-provide="selectpicker" data-width="100%">
                    <option>Website design</option>
                    <option>PSD to HTML</option>
                    <option>Website re-design</option>
                    <option>UI Kit</option>
                    <option>Full Package</option>
                </select>
                <div class="input-group-input">
                    <input type="text" class="form-control">
                    <label>Quantity</label>
                </div>

                <a class="text-danger pl-12" id="btn-remove-item" href="#" title="Remove" data-provide="tooltip"><i
                        class="ti-close"></i></a>
            </div>

            <a class="btn btn-sm btn-primary" id="btn-new-item" href="#"><i class="ti-plus fs-10"></i> New item</a>

        </div>
    </div>

    <footer class="p-12 text-right">
        <button class="btn btn-flat btn-secondary" type="button" data-toggle="quickview">Cancel</button>
        <button class="btn btn-flat btn-primary" type="submit">Create invoice</button>
    </footer>
</div>
<!-- END Quickview - Add user -->




<!-- Quickview - User detail -->
<div id="qv-user-details" class="quickview quickview-lg">
    <header class="quickview-header">
        <p class="quickview-title lead fw-400">Change invoice</p>
        <span class="close"><i class="ti-close"></i></span>
    </header>

    <div class="quickview-body">

        <div class="quickview-block form-type-material">

            <h6>Details</h6>
            <div class="form-group">
                <input type="text" class="form-control" value="Hossein Shams">
                <label>Client</label>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" value="68531">
                <label>Invoice Number</label>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" value="03/03/2017" data-provide="datepicker">
                <label>Invoice Date</label>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" value="02/28/2017" data-provide="datepicker">
                <label>Due Date</label>
            </div>

            <div class="form-group input-group">
                <div class="input-group-input">
                    <input type="text" class="form-control" value="0">
                    <label>Discount</label>
                </div>
                <select data-provide="selectpicker">
                    <option>Percent</option>
                    <option>Amount</option>
                </select>
            </div>

            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
                <label>Note to client</label>
            </div>

            <div class="h-40px"></div>

            <h6>Products</h6>

            <div class="form-group input-group align-items-center">
                <select title="Item" data-provide="selectpicker" data-width="100%">
                    <option>Website design</option>
                    <option>PSD to HTML</option>
                    <option selected>Website re-design</option>
                    <option>UI Kit</option>
                    <option>Full Package</option>
                </select>
                <div class="input-group-input">
                    <input type="text" class="form-control" value="1">
                    <label>Quantity</label>
                </div>

                <a class="text-danger pl-12" id="btn-remove-item" href="#" title="Remove" data-provide="tooltip"><i
                        class="ti-close"></i></a>
            </div>

            <div class="form-group input-group align-items-center">
                <select title="Item" data-provide="selectpicker" data-width="100%">
                    <option>Website design</option>
                    <option>PSD to HTML</option>
                    <option>Website re-design</option>
                    <option selected>UI Kit</option>
                    <option>Full Package</option>
                </select>
                <div class="input-group-input">
                    <input type="text" class="form-control" value="1">
                    <label>Quantity</label>
                </div>

                <a class="text-danger pl-12" id="btn-remove-item" href="#" title="Remove" data-provide="tooltip"><i
                        class="ti-close"></i></a>
            </div>

            <a class="btn btn-sm btn-primary" id="btn-new-item" href="#"><i class="ti-plus fs-10"></i> New item</a>

        </div>
    </div>

    <footer class="p-12 flexbox flex-justified">
        <button class="btn btn-flat btn-secondary" type="button" data-toggle="quickview">Cancel</button>
        <a class="btn btn-flat btn-danger">Delete</a>
        <button class="btn btn-flat btn-primary" type="submit">Update</button>
    </footer>
</div>
<!-- END Quickview - User detail -->
@endsection
