<x-guest-layout>
  <div class="login-register" style="background-image:url(/assets/images/homepage-bg.jpg);">
    <div class="login-box card">
        <div class="card-body" x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
              {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>
            <x-jet-validation-errors class="mb-4" />

            <form class="form-horizontal form-material" id="2faform" method="POST" action="/two-factor-challenge">
                @csrf
                <div class="form-group" x-show="! recovery">
                    <div class="col-xs-12">
                        <x-jet-label for="code" value="{{ __('Code') }}" />
                        <input class="form-control" id="code" name="code" type="text" inputmode="numeric" required autofocus autocomplete="one-time-code" />
                    </div>
                </div>
                <div class="form-group" x-show="recovery">
                  <div class="col-xs-12">
                      <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                      <input class="form-control" id="recovery_code" name="recovery_code" x-ref="recovery_code" type="text" required autocomplete="one-time-code" />
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                              <div class="ml-auto">
                                  <button type="button" class="text-muted"
                                      x-show="! recovery"
                                      x-on:click="recovery = true;">
                                      {{ __('Use a recovery code') }}
                                  </button>
                                  <button type="button" class="text-muted"
                                      x-show="recovery"
                                      x-on:click="recovery = false;">
                                    {{ __('Use an authentication code') }}
                                  </button>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12 p-b-20">
                        <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">{{ __('Login') }}</button>
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
