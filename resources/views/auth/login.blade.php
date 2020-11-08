<x-guest-layout>
    <div class="login-register" style="background-image:url(/assets/images/homepage-bg.jpg);">
      <div class="login-box card">
          <div class="card-body">
              <x-jet-validation-errors class="mb-4" />
              <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                  @csrf
                  <h3 class="text-center m-b-20">Sign In</h3>
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input class="form-control" name="email" type="text" placeholder="Email" :value="old('email')" required autofocus />
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-xs-12">
                          <input class="form-control" type="password" name="password" placeholder="Password" required autocomplete="current-password"> </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-12">
                          <div class="d-flex no-block align-items-center">
                              @if (Route::has('password.request'))
                                  <div class="ml-auto">
                                      <a href="{{ route('password.request') }}" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forget your password?</a>
                                  </div>
                              @endif
                          </div>
                      </div>
                  </div>
                  <div class="form-group text-center">
                      <div class="col-xs-12 p-b-20">
                          <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">{{ __('Login') }}</button>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                          <div class="social">
                              <a href="{{ url('auth/facebook') }}" class="btn btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </a>
                              <a href="{{ url('auth/google') }}" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </a>
                          </div>
                      </div>
                  </div>
                  <div class="form-group m-b-0">
                      <div class="col-sm-12 text-center">
                          Don't have an account? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
                      </div>
                  </div>
              </form>
              {{-- <form class="form-horizontal" id="recoverform" action="index.html">
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <h3>Recover Password</h3>
                          <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input class="form-control" type="text" required="" placeholder="Email"> </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                          <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                      </div>
                  </div>
              </form> --}}
          </div>
      </div>
    </div>
</x-guest-layout>
