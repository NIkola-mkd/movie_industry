@extends('layouts.app', ['activePage' => 'movies', 'titlePage' => __('New Movie')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- Form 1 --}}
                <div class="col-md-12">
                    <form method="post" action="{{ route('movies.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        {{-- Categories Edit --}}
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add new movie') }}</h4>

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
                                    <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('m_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('m_name') ? ' is-invalid' : '' }}"
                                                name="m_name" id="input-name" type="text" placeholder="{{ __('Title') }}"
                                                aria-required="true" value="{{ old('m_name') }}" />

                                            @if ($errors->has('m_name'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-name">{{ $errors->first('m_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Country') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"
                                                name="country" id="input-country" type="text"
                                                placeholder="{{ __('Country') }}" aria-required="true"
                                                value="{{ old('country') }}" />

                                            @if ($errors->has('country'))
                                                <span class="error text-danger" id="country-error"
                                                    for="input-country">{{ $errors->first('m_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Production') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('production') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('production') ? ' is-invalid' : '' }}"
                                                name="production" id="input-production" type="text"
                                                placeholder="{{ __('Production') }}" aria-required="true"
                                                value="{{ old('production') }}" />

                                            @if ($errors->has('production'))
                                                <span class="error text-danger" id="production-error"
                                                    for="input-production">{{ $errors->first('production') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Premiere') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('premiere') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('premiere') ? ' is-invalid' : '' }}"
                                                name="premiere" id="input-premiere" type="date"
                                                placeholder="{{ __('Premiere') }}" aria-required="true"
                                                value="{{ old('premiere') }}" />

                                            @if ($errors->has('premiere'))
                                                <span class="error text-danger" id="premiere-error"
                                                    for="input-name">{{ $errors->first('premiere') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Genres') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('genre') ? ' has-danger' : '' }}">
                                            <select name="genre_id" id="" class="form-control">
                                                @foreach ($genres as $genre)
                                                    <option value="{{ $genre->genre_id }}">{{ $genre->genre_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if ($errors->has('name'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-genre">{{ $errors->first('genre') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Directors') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('genre') ? ' has-danger' : '' }}">
                                            <select name="directors_id" id="" class="form-control">
                                                @foreach ($directors as $director)
                                                    <option value="{{ $director->directors_id }}">
                                                        {{ $director->d_name }} {{ $director->d_surname }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if ($errors->has('name'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-genre">{{ $errors->first('genre') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Sequel of') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('genre') ? ' has-danger' : '' }}">
                                            <select name="is_sequel" id="" class="form-control">
                                                <option value="null">Select movie</option>

                                                @foreach ($movies as $movie)
                                                    <option value="{{ $movie->movie_id }}">
                                                        {{ $movie->m_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if ($errors->has('name'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-genre">{{ $errors->first('genre') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>





                                {{-- Footer Submit Save Button --}}
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-success m-2">{{ __('Save') }}</button>
                                    <a href="{{ route('genre.index') }}"
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
