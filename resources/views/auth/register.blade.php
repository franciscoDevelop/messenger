@extends('layouts.app')

@section('content')
  <b-container>
      <b-row class="justify-content-center">
          <b-col cols="8">
              <b-card title="{{ __('Register') }}">
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
                  <b-form method="POST" action="{{ route('register') }}">
                      @csrf
                      <b-form-group id="UserName"
                                    label="{{ __('Name') }}"
                                    label-for="UserName"
                                    :label-cols="4"
                                    breakpoint="md">
                                    <b-form-input id="UserEmail"
                                                  type="text"
                                                  name="name"
                                                  :input-cols="6"
                                                  breakpoint="md"
                                                  required
                                                  value="{{ old('name') }}"
                                                  placeholder="Ingress el correo electrónico">
                                    </b-form-input>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                      </b-form-group>
                      <b-form-group id="UserEmailRegister"
                                    label="{{ __('E-Mail Address') }}"
                                    label-for="UserEmailRegister"
                                    :label-cols="4"
                                    breakpoint="md"
                                    description="Nunca compartiremos tu correo estas seguro con nosotros.">
                                    <b-form-input id="UserEmailRegister"
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
                      <b-form-group id="passwordConfirm"
                                    label="{{ __('Confirm Password') }}"
                                    label-for="password-confirm"
                                    :label-cols="4"
                                    breakpoint="md">
                                    <b-form-input id="password-confirm"
                                                  type="password"
                                                  name="password_confirmation"
                                                  :input-cols="6"
                                                  breakpoint="md"
                                                  required
                                                  placeholder="Ingresa una constraseña">
                                    </b-form-input>
                      </b-form-group>
                      <b-button type="submit" variant="primary">
                        {{ __('Register') }}
                      </b-button>
                  </b-form>
              </b-card>
          </b-col>
      </b-row>
  </b-container>
@endsection
