@extends('layouts.app')
@section('content')
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="hero-static">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4">
                                <!-- Sign Up Block -->
                                <div class="block block-themed block-fx-shadow mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Create Account</h3>
                                        <div class="block-options">
                                            <a class="btn-block-option font-size-sm" href="javascript:void(0)" data-toggle="modal" data-target="#one-signup-terms">View Terms</a>
                                            <a class="btn-block-option" href="op_auth_signin.html" data-toggle="tooltip" data-placement="left" title="Sign In">
                                                <i class="fa fa-sign-in-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                  
                                    <div class="block-content">
                                          @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
                                        <div class="p-sm-3 px-lg-4 py-lg-5">
                                            <h1 class="mb-2">OneUI</h1>
                                            <p>Please fill the following details to create a new account.</p>

                                            <!-- Sign Up Form -->
                                            <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                            <form class="js-validation-signup" action="{{url('signup')}}" method="POST">
                                                @csrf
                                                <div class="py-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-lg form-control-alt" id="signup-username" name="name" placeholder="name" value="{{old('name')}}">
                                                    </div>
                                                     @if($errors->has('name'))
                   <p style="color: red;font-size: 14px">
                        {{ $errors->first('name') }}</p>
                    @endif
                                                    <div class="form-group">
                                                        <input type="email" class="form-control form-control-lg form-control-alt" id="signup-email" name="email" placeholder="Email" value="{{old('email')}}">
                                                    </div>
                                                     @if($errors->has('email'))
                  <p style="color: red;font-size: 14px">
                        {{ $errors->first('email') }}</p>
                    @endif
                                                    <div class="form-group">
                                                        <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password" name="password" placeholder="Password">
                                                    </div>
                                                     @if($errors->has('password'))
                   <p style="color: red;font-size: 14px">
                        {{ $errors->first('password') }}</p>
                    @endif
                                                    <div class="form-group">
                                                        <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password-confirm" name="password-confirm" placeholder="Password Confirm">
                                                    </div>
                                                     @if($errors->has('password-confirm'))
                    <p style="color: red;font-size: 14px">
                        {{ $errors->first('password-confirm') }}
                        </p>
                    @endif
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                                            <label class="custom-control-label font-w400" for="signup-terms">I agree to Terms &amp; Conditions</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-xl-5">
                                                        <button type="submit" class="btn btn-block btn-success">
                                                            <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END Sign Up Form -->
                                             <a href="{{url('log')}}" class="btn btn-primary" style="float: right;">
                                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Back to login
                                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sign Up Block -->
                            </div>
                        </div>
                    </div>
                    <div class="content content-full font-size-sm text-muted text-center">
                        <strong>OneUI 4.6</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Terms Modal -->
        <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-link mr-2" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">I Agree</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection