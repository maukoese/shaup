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
            <a class="dropdown-item" href="#">Date</a>
            <a class="dropdown-item" href="#">Name</a>
            <a class="dropdown-item" href="#">Cost</a>
            <a class="dropdown-item" href="#">Popular</a>
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
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input">
          <label class="custom-control-label"></label>
        </div>

        <label class="toggler fs-16 pl-12">
          <input type="checkbox" checked>
          <i class="fa fa-star"></i>
        </label>

        <a class="media-body text-truncate" href="#qv-product-details" data-toggle="quickview">
          <h5>Website design</h5>
          <small>Designing a website with about 5 common pages: Home, Services, Portfolio, About, Contact.</small>
        </a>

        <span class="lead text-fade mr-25" title="Balance" data-provide="tooltip">$5,000</span>
      </div>


      <div class="media align-items-center">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input">
          <label class="custom-control-label"></label>
        </div>

        <label class="toggler fs-16 pl-12">
          <input type="checkbox">
          <i class="fa fa-star"></i>
        </label>

        <a class="media-body text-truncate" href="#qv-product-details" data-toggle="quickview">
          <h5>PSD to HTML</h5>
          <small>Converting a photoshop design to valid HTML pages.</small>
        </a>

        <span class="lead text-fade mr-25" title="Balance" data-provide="tooltip">$3,500</span>
      </div>


      <div class="media align-items-center">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input">
          <label class="custom-control-label"></label>
        </div>

        <label class="toggler fs-16 pl-12">
          <input type="checkbox">
          <i class="fa fa-star"></i>
        </label>

        <a class="media-body text-truncate" href="#qv-product-details" data-toggle="quickview">
          <h5>Website re-design</h5>
          <small>Changing UI of an existing website to a brand new design without requiring to change its server-side code.</small>
        </a>

        <span class="lead text-fade mr-25" title="Balance" data-provide="tooltip">$4,500</span>
      </div>


      <div class="media align-items-center">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input">
          <label class="custom-control-label"></label>
        </div>

        <label class="toggler fs-16 pl-12">
          <input type="checkbox" checked>
          <i class="fa fa-star"></i>
        </label>

        <a class="media-body text-truncate" href="#qv-product-details" data-toggle="quickview">
          <h5>UI Kit</h5>
          <small>Developing a complete UI Kit using Bootstrap 4 for your next design.</small>
        </a>

        <span class="lead text-fade mr-25" title="Balance" data-provide="tooltip">$7,000</span>
      </div>


      <div class="media align-items-center">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input">
          <label class="custom-control-label"></label>
        </div>

        <label class="toggler fs-16 pl-12">
          <input type="checkbox">
          <i class="fa fa-star"></i>
        </label>

        <a class="media-body text-truncate" href="#qv-product-details" data-toggle="quickview">
          <h5>Full package</h5>
          <small>Designing a complete set of a startup brand, including logo, header, favicon, email template, landing page, etc.</small>
        </a>

        <span class="lead text-fade mr-25" title="Balance" data-provide="tooltip">$9,900</span>
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
    <a class="btn btn-float btn-primary" href="#qv-product-add" title="New Product" data-provide="tooltip" data-toggle="quickview"><i class="ti-plus"></i></a>
  </div>




  <!-- Quickview - Add product -->
  <div id="qv-product-add" class="quickview quickview-lg">
    <header class="quickview-header">
      <p class="quickview-title lead fw-400">Add new product</p>
      <span class="close"><i class="ti-close"></i></span>
    </header>

    <div class="quickview-body">

      <div class="quickview-block form-type-material">
        <div class="form-group">
          <input type="text" class="form-control">
          <label>Name</label>
        </div>

        <div class="form-group">
          <input type="text" class="form-control">
          <label>Cost</label>
        </div>

        <div class="form-group">
          <textarea class="form-control" rows="5"></textarea>
          <label>Description</label>
        </div>
      </div>

    </div>

    <footer class="p-12 text-right">
      <button class="btn btn-flat btn-secondary" type="button" data-toggle="quickview">Cancel</button>
      <button class="btn btn-flat btn-primary" type="submit">Add product</button>
    </footer>
  </div>
  <!-- END Quickview - Add user -->




  <!-- Quickview - Product detail -->
  <div id="qv-product-details" class="quickview quickview-lg">
    <header class="quickview-header">
      <p class="quickview-title lead fw-400">Change product</p>
      <span class="close"><i class="ti-close"></i></span>
    </header>

    <div class="quickview-body">

      <div class="quickview-block form-type-material">
        <div class="form-group">
          <input type="text" class="form-control" value="Web design">
          <label>Name</label>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" value="5000">
          <label>Cost</label>
        </div>

        <div class="form-group">
          <textarea class="form-control" rows="5">Designing a website with about 5 common pages: Home, Services, Portfolio, About, Contact</textarea>
          <label>Description</label>
        </div>
      </div>

    </div>

    <footer class="p-12 flexbox flex-justified">
      <button class="btn btn-flat btn-secondary" type="button" data-toggle="quickview">Cancel</button>
      <a class="btn btn-flat btn-danger">Remove</a>
      <button class="btn btn-flat btn-primary" type="submit">Save changes</button>
    </footer>
  </div>
  <!-- END Quickview - Product detail -->
@endsection
