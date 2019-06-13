@extends('backpack::layout_guest')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="row m-t-40">
        <div class="col-md-4 col-md-offset-4">
            <h3 class="title title__blue title__center">{{ trans('backpack::base.login') }}</h3>
            <div>
                <div class="box-body">
                    <form class="col-md-12 p-t-10" style="text-align: center" role="form" method="POST" action="{{ route('backpack.auth.login') }}">
                        {!! csrf_field() !!}
                        <div class="floating-label {{ $errors->has($username) ? ' has-error' : '' }}">
                            <input class="single-stage__form-input" placeholder="{{ config('backpack.base.authentication_column_name') }}"
                                   type="text" name="{{ $username }}"
                                   value="{{ old($username) }}">
                            <label>{{ config('backpack.base.authentication_column_name') }}</label>
                            @if($errors->has($username))
                                <span class="form-error">{{$errors->first($username)}}</span>
                            @endif
                        </div>
                        <div class="floating-label {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="single-stage__form-input" placeholder="{{ trans('backpack::base.password') }}"
                                   type="password" name="password"
                                   value="{{ old($username) }}">
                            <label>{{ trans('backpack::base.password') }}</label>
                            @if($errors->has('password'))
                                <span class="form-error">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="button" title="Se connecter">
                                    <span class="button-blue__left"> {{ trans('backpack::base.login') }}</span>
                                    <i class="button-blue__right button-blue__right--size"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
