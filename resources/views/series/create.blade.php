@extends('layouts.app', ['activePage' => 'movies', 'titlePage' => __('New TV Serial')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- Form 1 --}}
                <div class="col-md-12">
                    <form method="post" action="{{ route('series.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        {{-- Categories Edit --}}
                        <div class="card ">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">{{ __('Add new serial') }}</h4>

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


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Movie') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('movie_id') ? ' has-danger' : '' }}">
                                            <select name="movie_id" id="" class="form-control">
                                                @foreach ($movies as $movie)
                                                    <option class="form-control" value="{{ $movie->movie_id }}">
                                                        {{ $movie->m_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if ($errors->has('movie_id'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-genre">{{ $errors->first('movie_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- Name edit --}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('TV Chanel') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('tv_chanel') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('tv_chanel') ? ' is-invalid' : '' }}"
                                                name="tv_chanel" id="input-chanel" type="text"
                                                placeholder="{{ __('Chanel') }}" aria-required="true"
                                                value="{{ old('tv_chanel') }}" />

                                            @if ($errors->has('tv_chanel'))
                                                <span class="error text-danger" id="chanel-error"
                                                    for="input-chanel">{{ $errors->first('tv_chanel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Episodes') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('number_ep') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('number_ep') ? ' is-invalid' : '' }}"
                                                name="number_ep" id="input-ep" type="number"
                                                placeholder="{{ __('Episodes') }}" aria-required="true"
                                                value="{{ old('number_ep') }}" />

                                            @if ($errors->has('number_ep'))
                                                <span class="error text-danger" id="ep-error"
                                                    for="input-ep">{{ $errors->first('number_ep') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Seasons') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('number_se') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('number_se') ? ' is-invalid' : '' }}"
                                                name="number_se" id="input-se" type="number"
                                                placeholder="{{ __('Seasons') }}" aria-required="true"
                                                value="{{ old('number_se') }}" />

                                            @if ($errors->has('number_se'))
                                                <span class="error text-danger" id="se-error"
                                                    for="input-se">{{ $errors->first('number_se') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>



                                {{-- Footer Submit Save Button --}}
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-success m-2">{{ __('Save') }}</button>
                                    <a href="{{ route('home') }}" class="btn btn-danger m-2">{{ __('Back') }}</a>
                                </div>

                            </div>
                    </form>
                </div>
                {{-- Form 1 End --}}

            </div>
        </div>
    </div>
@endsection
