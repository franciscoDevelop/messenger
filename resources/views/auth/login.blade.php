@extends('layouts.app')

@section('content')
<b-container>
    <b-row class="justify-content-center">
        <b-col cols="8">
            <b-card title="{{ __('Login') }}">
                @if ($errors->any())
                  <b-alert show variant="danger">
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </b-alert>
                @else
                  <b-alert show>Porfavor ingresa tus datos</b-alert>
                @endif
                <b-form method="POST" action="{{ route('login') }}">
                    @csrf
                    <b-form-group id="exampleInputGroup1"
                                  label="{{ __('E-Mail Address') }}"
                                  label-for="UserEmail"
                                  :label-cols="4"
                                  breakpoint="md"
                                  description="Nunca compartiremos tu correo estas seguro con nosotros.">
                                  <b-form-input id="UserEmail"
                                                type="email"
                                                name="email"
                                                :input-cols="6"
                                                breakpoint="md"
                                                required
                                                value="{{ old('email') }}"
                                                placeholder="Ingress el correo electrónico">
                                  </b-form-input>
                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                    </b-form-group>
                    <b-form-group id="passwordInputGroup"
                                  label="{{ __('Password') }}"
                                  label-for="UserPassword"
                                  :label-cols="4"
                                  breakpoint="md">
                                  <b-form-input id="UserPassword"
                                                type="password"
                                                name="password"
                                                :input-cols="6"
                                                breakpoint="md"
                                                required
                                                placeholder="Ingresa una constraseña">
                                  </b-form-input>
                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                    </b-form-group>
                    <b-form-group>
                      <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                        {{ __('Remember Me') }}
                      </b-form-checkbox>
                    </b-form-group>
                    <b-button type="submit" variant="primary">
                      {{ __('Login') }}
                    </b-button>

                    @if (Route::has('password.request'))
                      <b-button variant="link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                      </b-button>
                    @endif
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
