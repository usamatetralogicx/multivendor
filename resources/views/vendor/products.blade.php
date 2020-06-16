@extends('layouts.dashboard')
@section('styles')
  <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/dropzone/dist/min/dropzone.min.css">
        <style type="text/css">
        	input[type=number]::-webkit-inner-spin-button {
  opacity: 1;
};
       </style>

 
</style>
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
                <!-- Page Content -->
                <div class="content">
                    <!-- Quick Overview + Actions -->
                    <div class="row">
                       
                        
                        
                    </div>
                    <!-- END Quick Overview + Actions -->

                    <!-- Info -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Info</h3>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8">
                                    <form  id="product-form" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="one-ecom-product-name">Title</label>
                                            <input type="text" class="form-control" id="one-ecom-product-name" name="title" value="{{old('title')}}" >
                                             <span class="form-text  title_error" style="font-size: 16px;color: red;"></span>
                                        </div>
                                       
                                        <div class="form-group">
                                            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                                            <!-- For more info and examples you can check out http://ckeditor.com -->
                                            <label>Description</label>
                                           <textarea name="descrip" rows="4" id="editor" class="form-control" >{!!old('descrip')!!}</textarea>
                                              <span class="form-text  descrip_error" style="font-size: 16px;color: red;"></span>
                                        </div>
                                     
                                      {{--   <div class="form-group">
                                            <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                            <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                            <label for="one-ecom-product-category">Category</label>
                                            <select class="js-select2 form-control" id="one-ecom-product-category" name="one-ecom-product-category" style="width: 100%;" data-placeholder="Choose one..">
                                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                <option value="1">Cables</option>
                                                <option value="2" selected>Video Games</option>
                                                <option value="3">Tablets</option>
                                                <option value="4">Laptops</option>
                                                <option value="5">PC</option>
                                                <option value="6">Home Cinema</option>
                                                <option value="7">Sound</option>
                                                <option value="8">Office</option>
                                                <option value="9">Adapters</option>
                                            </select>
                                        </div> --}}
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
  {{-- 
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="one-ecom-product-price">Price in USD ($)</label>
                                                <input type="text" class="form-control" id="one-ecom-product-price" name="one-ecom-product-price" value="59,00">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="one-ecom-product-stock">Stock</label>
                                                <input type="text" class="form-control" id="one-ecom-product-stock" name="one-ecom-product-stock" value="29">
                                            </div>
                                        </div>
                                     --}}
                                       {{--  <div class="form-group">
                                            <label class="d-block">Condition</label>
                                            <div class="custom-control custom-radio custom-control-inline mb-1">
                                                <input type="radio" class="custom-control-input" id="one-ecom-product-condition-new" name="one-ecom-product-condition" checked>
                                                <label class="custom-control-label" for="one-ecom-product-condition-new">New</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline mb-1">
                                                <input type="radio" class="custom-control-input" id="one-ecom-product-condition-old" name="one-ecom-product-condition">
                                                <label class="custom-control-label" for="one-ecom-product-condition-old">Old</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Published?</label>
                                            <div class="custom-control custom-switch mb-1">
                                                <input type="checkbox" class="custom-control-input" id="one-ecom-product-published" name="one-ecom-product-published" checked>
                                                <label class="custom-control-label" for="one-ecom-product-published"></label>
                                            </div>
                                        </div> --}}
                                       {{--  <div class="form-group">
                                            <button type="submit" class="btn btn-alt-success">Update</button>
                                        </div> --}}
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Media</h3>
                        </div>

                        <div class="block-content block-content-full thumbnail"style="border: 1px black dotted" >
                            <div class="col-sm-4">
                            <div class="  text-center">
                    <img src="{{asset('images/no-thumbnail.jpeg')}}" style="height: 100px;width: 230px;" id="imgthumbnail"  alt="">
                </div>
                </div>
                            <div class="row justify-content-center " >
                                <div class="col-md-10 col-lg-8">
                                    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
                                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                                    
                                 <label for="imageUpload" class="btn btn-light btn-block btn-outlined">Add file</label>
<input type="file" id="imageUpload" name="thumbnail" accept="image/*" multiple style="display: none">
 
                     <span class="form-text  thumbnail_error" style="font-size: 16px;color: red;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Media -->
                    <!-- END Info -->
                      <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Inventory</h3>
                        </div>
                        <div class="block-content block-content-full">
                           <div class="col-md-8 offset-md-2">
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
                        <div class="block-content block-content-full" >
                           <div class="col-md-8 offset-md-2">
                                
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
  	 <label for="one-ecom-product-price">Country region/Zones</label>
  	 <br>
  	  <select class="custom-select col-sm-6" id="inlineFormCustomSelectPref" name="country">
    <option selected>Choose...</option>
    <option>Pak</option>
      </select>
	
</div>
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
        
                        <div class="block-content">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8">
                                  
<div class="form-group" id="content1">
    <label>Options</label>
    <br>
    <small> Option 1</small>
    <div class="form-row mt-1">
        
        <div class="col-sm-3">
            <select class="custom-select" id="inlineFormCustomSelectPref" name="option">
                <option value="0">Choose..</option>
                <option value="1">Size</option>
                <option value="2">Color</option>
                <option value="3">Material</option>
                <option value="3">Style</option>
                <option value="3">Title</option>
            </select>
            
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="option_value" placeholder="Separate options with commas">
        </div>
    </div>
    <div class="form-group mt-2">
        <button class="form-control col-sm-4 btn btn-light" id="button" >Add another option</button>
    </div>
    <div id="option2">
         <small> Option 2</small>
    <div class="form-row mt-1">
        
        <div class="col-sm-3">
            <select class="custom-select" id="inlineFormCustomSelectPref">
                <option value="1">Size</option>
                <option value="2">Color</option>
                <option value="3">Material</option>
                <option value="3">Style</option>
                <option value="3">Title</option>
            </select>
            
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" placeholder="Separate options with commas">
        </div>
    </div>
    <div class="form-group mt-2">
        <button class="form-control col-sm-4 btn btn-light" id="button1"  >Add another option</button>
    </div>
    </div>
    <div id="option3">
         <small> Option 3</small>
    <div class="form-row mt-1">
        
        <div class="col-sm-3">
            <select class="custom-select" id="inlineFormCustomSelectPref">
                <option value="1">Size</option>
                <option value="2">Color</option>
                <option value="3">Material</option>
                <option value="3">Style</option>
                <option value="3">Title</option>
            </select>
            
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" placeholder="Separate options with commas">
        </div>
    </div>
   
    </div>
    
</div>
                                         <div class="form-group">
      <button id="button" type="submit" class="btn btn-primary float-right">Save</button>
  </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Meta Data -->

                    <!-- Media -->
                   
                </div>
                <!-- END Page Content -->
            </main>
            @endsection
            @section('scripts')
              <script src="assets/js/oneui.core.min.js"></script>
             <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
         <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
        <script src="{{asset('assets/js/plugins/dropzone/dropzone.min.js')}}"></script>

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
$("#product-form").trigger("reset");
$('#editor').html('');
 $('#imgthumbnail').html('');
// $('#avatar').html('');

// $('.show_image').css('display','none');
}
});
}
}});
});

});


                 

              //   jQuery('#product-form').submit(function(e){
              //     e.preventDefault();
              //     $.ajaxSetup({
              //       headers: {
              //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              //       }
              //     });
              //     var myForm = document.getElementById('product-form');
              //     var formData = new FormData(myForm);
              //       jQuery.ajax({
              //         url: "{{ url('update/{id}') }}",
              //         method : 'post',
              //         data: formData,
              //         contentType: false,
              //          cache: false,
              //          processData: false,
              //         success: function(result){
              //           if(result.success==0){
              //             if(result.validation==0){
              //               if(result.message.title)
              //               {
              //                 $('.title_error').html(result.message.title[0]);
              //               }
              //              if(result.message.image)
              //               {
              //                 $('.image_error').html(result.message.image[0]);
              //               }
              //               if(result.message.price)
              //               {
              //                 $('.price_error').html(result.message.price[0]);
              //               }
              //               if(result.message.description)
              //               {
              //                 $('.description_error').html(result.message.description[0]);
              //               }

              //             }
              //           }
                        
              //           else{
              //             bootbox.alert({
              //   title: "Message",
              //   message:result.message,
              //   callback: function(){
              //      $("#category-form").trigger("reset");
              //                 $('.image_error').html('');
              //                 $('.category_error').html('');
              //                 $('.show_image').css('display','none');
              //   }   
              // });


              //           }
              //         }});
              //     });

                 
                 // Update record
// $(document).on("click", ".update" , function() {
//   var edit_id = $(this).data('id');

//   var name = $('#name_'+edit_id).val();
//   var image = $('#image_'+edit_id).val();

//   if(name != '' && email != ''){
//     $.ajax({
//       url: "{{url('update')}}"/+id,
//       type: 'post',
//       data: {_token: CSRF_TOKEN,editid: edit_id,name: name,email: email},
//       success: function(response){
//         alert(response);
//       }
//     });
//   }else{
//     alert('Fill all fields');
//   }
// });


           
        
    
</script>
            @endsection