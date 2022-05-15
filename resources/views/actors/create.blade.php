@extends('layouts.app', ['activePage' => 'actors', 'titlePage' => __('New Actor')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- Form 1 --}}
                <div class="col-md-12">
                    <form method="post" action="{{ route('actors.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        {{-- Categories Edit --}}
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add new actor') }}</h4>

                            </div>
                            <div class="card-body ">

                                {{-- Season Message --}}
                                {{-- called from controller >>> return back()->withStatus(__('Profile successfully updated.')); --}}
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-{{ session('color') }}">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                {{-- Name edit --}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Name') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('a_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('a_name') ? ' is-invalid' : '' }}"
                                                name="a_name" id="input-name" type="text" placeholder="{{ __(' Name') }}"
                                                aria-required="true" value="{{ old('a_name') }}" />

                                            @if ($errors->has('d_name'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Surname') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('a_surname') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('a_surname') ? ' is-invalid' : '' }}"
                                                name="a_surname" id="input-surname" type="text"
                                                placeholder="{{ __(' Surname') }}" aria-required="true"
                                                value="{{ old('a_surname') }}" />

                                            @if ($errors->has('a_surname'))
                                                <span class="error text-danger" id="surname-error"
                                                    for="input-surname">{{ $errors->first('surname') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Date of birth') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('date_of_birth') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}"
                                                name="date_of_birth" id="input-birth" type="date"
                                                placeholder="{{ __(' Date of Birth') }}" aria-required="true"
                                                value="{{ old('date_of_birth') }}" />

                                            @if ($errors->has('date_of_birth'))
                                                <span class="error text-danger" id="birth-error"
                                                    for="input-birth">{{ $errors->first('birth') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Agent code') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('agent_code') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}"
                                                name="agent_code" id="input-birth" type="number"
                                                placeholder="{{ __(' Code') }}" aria-required="true"
                                                value="{{ old('agent_code') }}" />

                                            @if ($errors->has('date_of_birth'))
                                                <span class="error text-danger" id="code-error"
                                                    for="input-code">{{ $errors->first('code') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>



                                {{-- Footer Submit Save Button --}}
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-success m-2">{{ __('Save') }}</button>
                                    <a href="{{ route('actors.index') }}"
                                        class="btn btn-primary m-2">{{ __('Back') }}</a>
                                </div>

                            </div>
                    </form>
                </div>
                {{-- Form 1 End --}}

            </div>
        </div>
    </div>
@endsection
