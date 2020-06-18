@extends('layouts.dashboard')
@section('styles')
  {{-- <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css"> --}}
        {{-- <link rel="stylesheet" href="assets/js/plugins/dropzone/dist/min/dropzone.min.css"> --}}
        <style type="text/css">
            .ck-content {
    min-height: 300px;
};
            input[type=number]::-webkit-inner-spin-button {
  opacity: 1;
};
       </style> 





 {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.css"> --}}
@endsection
@section('content')
        <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->

                        <!-- Apps Modal -->
                        <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                        <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                            <i class="si si-grid"></i>
                        </button>
                        <!-- END Apps Modal -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="si si-magnifier"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Search Form (visible on larger screens) -->
                      
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="si si-magnifier"></i>
                                    </span>
                                </div>
                            </div>
                       
                        <!-- END Search Form -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 18px;">
                                <span class="d-none d-sm-inline-block ml-1">Adam</span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                                </div>
                                <div class="p-2">
                                    <h5 class="dropdown-header text-uppercase">User Options</h5>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                        <span>Inbox</span>
                                        <span>
                                            <span class="badge badge-pill badge-primary">3</span>
                                            <i class="si si-envelope-open ml-1"></i>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                                        <span>Profile</span>
                                        <span>
                                            <span class="badge badge-pill badge-success">1</span>
                                            <i class="si si-user ml-1"></i>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span>Settings</span>
                                        <i class="si si-settings"></i>
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <h5 class="dropdown-header text-uppercase">Actions</h5>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                                        <span>Lock Account</span>
                                        <i class="si si-lock ml-1"></i>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                                        <span>Log Out</span>
                                        <i class="si si-logout ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="si si-bell"></i>
                                <span class="badge badge-primary badge-pill">6</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-2 bg-primary text-center">
                                    <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                </div>
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <small class="text-muted">15 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-info"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">1 new sale, keep it up</div>
                                                <small class="text-muted">22 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-times-circle text-danger"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">Update failed, restart server</div>
                                                <small class="text-muted">26 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-info"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">2 new sales, keep it up</div>
                                                <small class="text-muted">33 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-user-plus text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new subscriber</div>
                                                <small class="text-muted">41 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <small class="text-muted">42 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Notifications Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                       
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
        <div class="content content-full pt-3 pb-3">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h5 my-2">
                    Add New Product
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3 mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Products</a>
                        </li>

                        <li class="breadcrumb-item">Add New</li>
                    </ol>
                </nav>
            </div>
        
    
                    <!-- Quick Overview + Actions -->
                  
                    <!-- END Quick Overview + Actions -->

                    <!-- Info -->
                    <div class="row">
                        <div class="col-sm-8">  
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Info</h3>
                        </div>
                        <div class="block-content block-content-full">
                           
                                    <form  id="product-form" method="POST" enctype="multipart/form-data">
                                        @csrf
                                       <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="product-name">Title</label>
                                    <input class="form-control" type="text" id="product-name" name="title"
                                           placeholder="Short Sleeve Shirt" >
                                           <span class="form-text  descrip_error" style="font-size: 16px;color: red;"></span>
                                </div>
                            </div>
                                       
                                        <div class="form-group">
                                         
                                            <label>Description</label>
                                           <textarea name="descrip" id="editor" class="form-control" >{!!old('descrip')!!}</textarea>
                                              <span class="form-text  descrip_error" style="font-size: 16px;color: red;"></span>
                                        </div>
                                     
                                    
                                         <div class="form-row">
    <div class="col">
          <label for="one-ecom-product-price">Price in USD ($)</label>
      <input type="text" class="form-control" name="price" id="one-ecom-product-price" placeholder="$ 0.00" value="{{old('price')}}">
      
                    <span class="form-text  price_error" style="font-size: 16px;color: red;"></span>
    </div>
    <div class="col">

          <label for="one-ecom-product-price">Compare at price</label>
      <input type="text" class="form-control" name="compare_price" placeholder="$ 0.00" value="{{old('compare_price')}}">
       
                     <span class="form-text  compare_price_error" style="font-size: 16px;color: red;"></span>
    </div>
  </div>

   <div class="form-group mt-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" checked id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Charge tax on this product
      </label>
    </div>

                                    
                                </div>
                            </div>
                        </div>
                    
                     <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Media</h3>
                        </div>
                      <div action="/"
      class="dropzone"
      id="my-awesome-dropzone"></div>
                       
                    </div>
                    <!-- END Media -->
                    <!-- END Info -->
                      <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Inventory</h3>
                        </div>
                        <div class="block-content block-content-full">
                           
                                <div class="form-row">
    <div class="col">
          <label for="one-ecom-product-price">SKU (Stock Keeping Unit)</label>
      <input type="text" class="form-control" name="sku" id="one-ecom-product-price" placeholder="$ 0.00" value="{{old('sku')}}">
     
                     <span class="form-text  sku_error" style="font-size: 16px;color: red;"></span>
    </div>
    <div class="col">

          <label for="one-ecom-product-price">Barcode (ISBN, UPC, GTIN, etc.)</label>
      <input type="text" class="form-control" name="barcode" placeholder="$ 0.00" value="{{old('barcode')}}">
       
                     <span class="form-text  barcode_error" style="font-size: 16px;color: red;"></span>
    </div>
  </div>
  <div class="form-group">
     <label for="one-ecom-product-price">Quantity</label>
     <br>
     <small>Available</small>
    <input type="number" class="form-control col-sm-6"  name="quantity" value="{{old('quantity')}}">
    
                     <span class="form-text  quantity_error" style="font-size: 16px;color: red;"></span>
  </div>
 
                            </div>
                        </div>
                  
      <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Shippping</h3>
                        </div>
                        <div class="form-group mt-2">
    <div class="form-check ml-5 mt-2">
      <input class="form-check-input" type="checkbox" id="shipping">
      <label class="form-check-label" for="gridCheck">
        This is a physical product
      </label>
    </div>
  </div>
  <hr>
  <div id="content">
                        <div class="block-content block-content-full ml-4" >
  <div class="form-group">
     <label for="one-ecom-product-price">Weight</label>
     <br>
     <small>Used to calculate shipping rates at checkout and label prices during fulfillment.</small>
     <div class="form-inline mt-2">
    <input type="text" class="form-control col-sm-4"  name="weight">
      <select class="custom-select col-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="1">Kg</option>
    <option value="2">oz</option>
    <option value="3">g</option>
    <option value="3">oz</option>
  </select>
  </div>
</div>
<hr>
<div class="form-group">
         <label for="one-ecom-product-price">CUSTOMS INFORMATION</label>
     <br>
     <small>Used by border officers to calculate duties when shipping internationally. Shown on customs forms you print during fulfillment.</small>
     <br>
     <label for="one-ecom-product-price" class="mt-2" >Country region/Zones</label>
     <br>
      <select class="custom-select col-sm-6" id="inlineFormCustomSelectPref" name="country">
    <option value="0" selected>Choose...</option>
    <option>Pak</option>
      </select>
    
</div>
 </div>
                            </div>
                        </div>
                    
                    <!-- Meta Data -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Varients</h3>
                        </div>
                         <div class="form-group mt-2">
    <div class="form-check ml-5 mt-2">
      <input class="form-check-input" type="checkbox"  id="varients">
      <label class="form-check-label" for="gridCheck">
        This product has multiple options, like different sizes or colors
      </label>
    </div>
  </div>
  <hr>
        
                        <div class="block-content block-content-full ml-4">  
                                  
<div class="form-group" id="content1">
    <h3 class="font-w300">Options</h3>
    <br>
    <h5> Option 1</h5>
    <div class="form-group">
        
        <div class="row">
            <div class="col-sm-3">
                <input type="text" class="form-control" value="Size">
            </div>
            <div class="col-sm-9">
                <input class="js-tags-options options-preview form-control" type="text"
                id="testInput1" name="option1" value="javascript,vanilla js">
            </div>
        </div>
        
        <div class="form-group mt-2">
            <button type="button" class="btn btn-light btn-square" id="button" >Add another option</button>
        </div>
    </div>
    <div id="option2">
          <h5> Option 1</h5>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
                <input type="text" class="form-control" value="Color">
            </div>
            <div class="col-sm-9">
                <input class="js-tags-options options-preview form-control" type="text"
                id="testInput2" name="option1" value="javascript,vanilla js">
            </div>
        </div>
    </div>
    <div class="form-group mt-2">
        <button type="button" class="btn btn-light btn-square" id="button1" >Add another option</button>
    </div>
    </div>
    <div id="option3">
         <h5> Option 3</h5>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
                <input type="text" class="form-control" value="Material">
            </div>
            <div class="col-sm-9">
                <input class="js-tags-options options-preview form-control" type="text"
                id="testInput3" name="option1" value="javascript,vanilla js">
            </div>
        </div>
    </div>          
</div>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END col-sm-8 -->

                    <!--start  coll-sm-4-->
        <div class="col-sm-4">
            <div class="block">
                <div class="block-header block-header-default">
                    <div class="block-title">
                        Status
                    </div>
                </div>
        <div class="block-content">
            <div class="form-group">
                <div  class="custom-control custom-radio mb-1">
                    <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios" value="option1" checked>
                    <label class="custom-control-label" for="exampleRadios">
                        Published
                    </label>
                </div>
                <div  class="custom-control custom-radio mb-1">
                    <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                    <label class="custom-control-label" for="exampleRadios1">
                        Draft
                    </label>
                </div>
            </div>
           
                </div>
                 <!--end block content -->
                
            </div>
            <!-- end block -->
        
             <div class="block">
                        <div class="block-header block-header-default">
                            <div class="block-title">
                                Mark as Fulfilled
                            </div>
                        </div>
                        <div class="block-content pt-0" >
                            <div class="form-group">
                            <div class="custom-control custom-radio mt-3">
                                <input type="radio" required class="custom-control-input" id="example-radio-customfulfilled" name="fulfilled-by" value="Fantasy" checked="">
                                <label class="custom-control-label" for="example-radio-customfulfilled">By WeFullFill</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" required class="custom-control-input" id="example-radio-customAliExpress" name="fulfilled-by" value="AliExpress" >
                                <label class="custom-control-label" for="example-radio-customAliExpress">By AliExpress</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- end block-->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <div class="block-title">
                                Product Category
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                 <span class="category_down" data-value="0" style="margin-right: 5px;font-size: 16px;vertical-align: middle"><i class="fa fa-angle-right"></i></span>
                                 <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" name="category[]" value="8" class="custom-control-input category_checkbox" id="rowcat_Home &amp; Garden">
                                            <label class="custom-control-label" for="rowcat_Home &amp; Garden">Home &amp; Garden</label>
                                        </div>
                                        <br>
                                        <span class="category_down" data-value="0" style="margin-right: 5px;font-size: 16px;vertical-align: middle"><i class="fa fa-angle-right"></i></span>
                                 <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" name="category[]" value="8" class="custom-control-input category_checkbox" id="computer">
                                            <label class="custom-control-label" for="computer">Computer &amp; Office</label>

                                        </div>
                                        <br>
                                        <span class="category_down" data-value="0" style="margin-right: 5px;font-size: 16px;vertical-align: middle"><i class="fa fa-angle-right"></i></span>
                                 <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" name="category[]" value="8" class="custom-control-input category_checkbox" id="Home">
                                            <label class="custom-control-label" for="home">Home Improvement</label>
                                            
                                        </div>
                                         <br>
                                        <span class="category_down" data-value="0" style="margin-right: 5px;font-size: 16px;vertical-align: middle"><i class="fa fa-angle-right"></i></span>
                                 <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" name="category[]" value="8" class="custom-control-input category_checkbox" id="electronics">
                                            <label class="custom-control-label" for="electronics">Car Electronics</label>
                                            
                                        </div>
                                         <br>
                                        <span class="category_down" data-value="0" style="margin-right: 5px;font-size: 16px;vertical-align: middle"><i class="fa fa-angle-right"></i></span>
                                 <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" name="category[]" value="8" class="custom-control-input category_checkbox" id="health">
                                            <label class="custom-control-label" for="health">Health &amp; Personal Care</label>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- end block -->
                     <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Organization</h3>
                        </div>
                        <div class="block-content pt-0">
                            <div class="form-group">
                                <div class="col-xs-12 push-10">
                                    <label>Product Type</label>
                                    <input type="text" class="form-control" name="product_type"
                                           placeholder="eg. Shirts">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 push-10">
                                    <label>Vendor</label>
                                    <input type="text" class="form-control" name="vendor" placeholder="eg. Nike">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary">
                                        <label>Tags</label>
                                        <input class="js-tags-input form-control" type="text"
                                               id="product-meta-keywords" name="tags" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end block -->
                      <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">More Details</h3>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <div class="col-xs-12 push-10">
                                    <label>Processing Time</label>
                                    <input type="text" class="form-control" name="processing_time" placeholder="eg. 7 working days" value="">
                                </div>
                            </div>
<div class="form-group">
    <div class="col-xs-12">
        <label>Warned Platform</label>
        <br>
        <div class="custom-control custom-checkbox d-inline-block">
            <input type="checkbox" name="platforms[]" value="3" class="custom-control-input" id="row_Aliexpress">
            <label class="custom-control-label" for="row_Aliexpress">Aliexpress</label>
        </div>
        <br>
        <div class="custom-control custom-checkbox d-inline-block">
            <input type="checkbox" name="platforms[]" value="4" class="custom-control-input" id="row_Amazon">
            <label class="custom-control-label" for="row_Amazon">Amazon</label>
        </div>
        <br>
        <div class="custom-control custom-checkbox d-inline-block">
            <input type="checkbox" name="platforms[]" value="7" class="custom-control-input" id="row_Ebay">
            <label class="custom-control-label" for="row_Ebay">Ebay</label>
        </div>
        <br>
    </div>
</div>
</div>
</div>
 <!-- end block -->
        <div class="form-group">
      <button id="button" type="submit" class="btn btn-primary float-right">Save</button>
  </div>              
</form>
<!-- end block -->
            
        </div>
        <!-- end col-sm-4 -->
        
        </div>
        <!--end row --> 
                       
                </div>
                <!--end content div-->
                
            </main>
            <!-- END main -->
            @endsection
            @section('scripts')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.js"></script>
 --}}

 {{-- 
 <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script> --}}
              
             <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
         <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
      {{--   <script src="https://phpstack-362288-1193299.cloudwaysapps.com/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
 --}}
        <!-- Page JS Helpers (Select2 + CKEditor plugins) -->
        <script>jQuery(function(){ One.helpers(['select2', 'maxlength']); });</script>
          <script type="text/javascript">
$(document).ready(function() {
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( err => {
            console.error( err.stack );
        } );
        });
</script>

       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js" ></script>
       

        <script>
           
            $(function() {
                $("#testInput1").tags({
                    unique: true,
                    maxTags: 5
                });
                $("#testInput2").tags({
                    unique: true,
                    maxTags: 5
                });
                $("#testInput3").tags({
                    unique: true,
                    maxTags: 5
                });

            });
            
 $(function(){
    $('#shipping').on('change',function(){
      $('#content').slideToggle(this.checked);
    });
  });
 $('#content').hide();
 $('#content1').hide();
  $(function(){
    $('#varients').on('change',function(){
      $('#content1').toggle(this.checked);
    });
  });
  $('#option2').hide();
   $('#option3').hide();
   $(function(){
    $('#button').on('click',function(){
      $('#option2').show();
    });
  });
     $(function(){
    $('#button1').on('click',function(){
      $('#option3').show();
    });
   
  });
   $('#imageUpload').on('change', function() {
var file = $(this).get(0).files;
var reader = new FileReader();
reader.readAsDataURL(file[0]);
reader.addEventListener("load", function(e) {
var image = e.target.result;
$("#imgthumbnail").attr('src', image);
});
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
   
$('#product-form').submit(function(e){
e.preventDefault();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
}
});
var myForm = document.getElementById('product-form');
var formData = new FormData(myForm);
$.ajax({
url: "{{ url('post_product') }}",
method : 'post',
data: formData,
contentType: false,
cache: false,
processData: false,
success: function(result){
if(result.success==0){
if(result.validation==0){
if(result.message.title)
{
$('.title_error').html(result.message.title[0]);
}else{
$('.name_error').html('');
}
if(result.message.descrip)
{
$('.descrip_error').html(result.message.descrip[0]);
}
if(result.message.price)
{
$('.price_error').html(result.message.price[0]);
}
if(result.message.compare_price)
{
$('.campare_price_error').html(result.message.compare_price[0]);
}
if(result.message.thumbnail)
{
$('.thumbnail_error').html(result.message.thumbnail[0]);
}
if(result.message.sku)
{
$('.sku_error').html(result.message.sku[0]);
}
if(result.message.barcode)
{
$('.barcode_error').html(result.message.barcode[0]);
}
if(result.message.quantity)
{
$('.quantity_error').html(result.message.quantity[0]);
}
}
}
else{
bootbox.alert({
title: "Message",
message:result.message,
callback: function(){
  setTimeout(function(){ location.reload(); }, 1000);
// $("#product-form").trigger("reset");
// $('#editor').html('');
 // $('#imgthumbnail').attr('src','');
 // $('.ck-content p').html(' <br data-cke-filler="true">');
// $('.show_image').css('display','none');
}
});
}
}});
});
});
                 
</script>
 <script type="text/javascript">
 Dropzone.options.myAwesomeDropzone = {
  maxFiles: 1,
  addRemoveLinks: true,
  accept: function(file, done) {
    console.log("uploaded");
    done();
  },
  init: function() {
    this.on("maxfilesexceeded", function(file){
        alert("No more files please!");
        this.removeFile(file);
    });
    // this.on("addedfile", function(file) {
    //    myDropzone.options.removefile.call(myDropzone, mockFile);
    //    //  I want to delete an existing element
    //  });
  }
};
</script>
            @endsection