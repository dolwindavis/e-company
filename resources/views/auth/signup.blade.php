 @extends('layouts.wrapper')

@section('content')

@include('layouts.float')


<!-- style auth.scss -->
<div class="container" style="min-height: 750px;">
    <div class="row middle long">
        <div class="col-md-8 col-lg-5 col-sm-8 col-xs-12">
          @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
          @endif
            <div class="panel panel-default full" style="height: 700px;">
                <div class="panel-heading admin-head">
                    <h3>yes boss !!</h3>
                    <p>Ready for an adventure.</p>
                </div>
                <div class="panel-body" style="margin-top: 0px;">
                    <form class="form-vertical" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/admin/register') }}">
                        {{ csrf_field() }}
                        <div class="panel-wrapper">
<!-- profile pic field  -->
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 flex-middle-horizontal">
                                    <div class="flex-middle-vertical flex-middle-horizontal" id="container">
                                        <label>
                                    	    <input type="file" name="avatar" id="upload">
                                    	</label>
                                        <div id="upload-demo"></div>
                                        <input type="hidden" id="imagebase64" name="imagebase64">
                                        <!-- <img :src="image" id="draggable" :class="{ none:noImage }" height="200" width="200" alt="your image"  /> -->
                                    </div>
                                </div>
                            </div>
<!-- end of profile pic field -->

<!-- name field -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div style="margin-bottom: -7px;">
                                    <input id="firstname" type="text" class="form-control" style="width: 49.2%; display: inline-block" placeholder="First name" name="name" value="{{ old('name') }}" required autofocus>
                                    <input id="secondname" type="text" class="form-control" style="width: 49.2%; display: inline-block" placeholder="Second name" name="secondname" value="{{ old('secondname') }}" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block warning">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
<!-- end of name field -->

<!-- mail address field -->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div>
                                    <input id="email" type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block warning">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
<!-- end of mail field -->

<!-- password field -->
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block warning">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
<!-- end of password field -->

<!-- confirm password field -->
                            <div class="form-group">
                                <div>
                                    <input id="password-confirm" type="password" class="form-control"  placeholder="Confirm Password" name="password_confirmation" required>
                                </div>
                            </div>
<!-- end of confirm password field -->

<!-- bio field -->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div>
                                    <input id="bio" type="text" class="form-control" placeholder="Bio" name="bio" value="{{ old('bio') }}" required>
                                </div>
                            </div>
<!-- end of bio field -->

<!-- status field -->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom: 0px;">
                                <div>
                                    <textarea name="status" rows="3">Status</textarea>
                                </div>
                            </div>
<!-- end of status field -->

<!-- social icons -->
                            {{-- <div class="social-icons flex-middle-horizontal">
                                <div class="social-wrapper">
                                    <button class="social" type="button" name="button"></button>
                                    <button class="social" type="button" name="button"></button>
                                    <button class="social" type="button" name="button"></button>
                                    <button class="social" type="button" name="button"></button>
                                </div>
                            </div> --}}
<!-- end of social icons -->

<!-- log in button -->
                            <div class="form-group">
                                <div class="button" style="margin-top: 50px;">
                                    <button type="submit" class="btn btn-primary">
                                        Sign up
                                    </button>
                                </div>
                            </div>
<!-- end of submit button -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
