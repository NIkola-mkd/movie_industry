@extends('layouts.app', ['activePage' => 'actors', 'titlePage' => __('Edit Actor data')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="alert alert-default" role="alert">
                {{ $actor->a_name }} {{ $actor->a_surname }}

            </div>
            <div class="row">
                {{-- Form 1 --}}
                <div class="col-md-12">
                    <form method="post" action="{{ route('plays.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        <input type="text" hidden value="{{ $actor->actor_id }}" name="actor_id">
                        {{-- Categories Edit --}}
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Plays') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Paid') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('paid') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('paid') ? ' is-invalid' : '' }}"
                                                name="paid" id="input-paid" type="number" placeholder="{{ __('Paid') }}"
                                                aria-required="true" />

                                            @if ($errors->has('paid'))
                                                <span class="error text-danger" id="name-paid"
                                                    for="input-paid">{{ $errors->first('paid') }}</span>
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

                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{{ route('plays.store') }}" autocomplete="off"
                            class="form-horizontal">
                            @csrf

                            {{-- Categories Edit --}}
                            <div class="card ">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">{{ __('Plays') }}</h4>
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
                                        <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('genre_name') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('genre_name') ? ' is-invalid' : '' }}"
                                                    name="genre_name" id="input-name" type="text"
                                                    placeholder="{{ __('Name') }}" aria-required="true" />

                                                @if ($errors->has('name'))
                                                    <span class="error text-danger" id="name-error"
                                                        for="input-name">{{ $errors->first('genre_name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Footer Submit Save Button --}}
                                    <div class="card-footer justify-content-center">
                                        <button type="submit" class="btn btn-success m-2">{{ __('Edit') }}</button>
                                        <a href="{{ route('actors.index') }}"
                                            class="btn btn-primary m-2">{{ __('Back') }}</a>
                                    </div>

                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
