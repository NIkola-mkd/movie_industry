@extends('layouts.app', ['activePage' => 'movies', 'titlePage' => __('New Film')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- Form 1 --}}
                <div class="col-md-12">
                    <form method="post" action="{{ route('films.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        {{-- Categories Edit --}}
                        <div class="card ">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">{{ __('Add new film') }}</h4>

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
                                    <label class="col-sm-2 col-form-label">{{ __('City Premiere') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('city_premiere') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('city_premiere') ? ' is-invalid' : '' }}"
                                                name="city_premiere" id="input-name" type="text"
                                                placeholder="{{ __('City') }}" aria-required="true"
                                                value="{{ old('city_premiere') }}" />

                                            @if ($errors->has('city_premiere'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-name">{{ $errors->first('city_premiere') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Earnings') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('earnings') ? ' is-invalid' : '' }}"
                                                name="earnings" id="input-earnings" type="number"
                                                placeholder="{{ __('Earnings') }}" aria-required="true"
                                                value="{{ old('earnings') }}" />

                                            @if ($errors->has('earnings'))
                                                <span class="error text-danger" id="earnings-error"
                                                    for="input-earnings">{{ $errors->first('earnings') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('2D') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                            <input type="checkbox" value="1" name="2D">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('3D') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                            <input type="checkbox" value="1" name="3D">
                                        </div>
                                    </div>
                                </div>


                                {{-- Footer Submit Save Button --}}
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-success m-2">{{ __('Save') }}</button>
                                    <a href="{{ route('home') }}" class="btn btn-warning m-2">{{ __('Back') }}</a>
                                </div>

                            </div>
                    </form>
                </div>
                {{-- Form 1 End --}}

            </div>
        </div>
    </div>
@endsection
