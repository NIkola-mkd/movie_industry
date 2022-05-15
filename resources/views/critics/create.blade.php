@extends('layouts.app', ['activePage' => 'critics', 'titlePage' => __('Grade/Rate')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="alert alert-default" role="alert">
                @if (session('status'))
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-{{ session('color') }}">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>{{ session('status') }}</span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                {{-- Form 1 --}}
                <div class="col-md-12">
                    <form method="post" action="{{ route('grades.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @foreach ($critic as $c)
                            <input type="text" hidden value="{{ $c->critics_id }}" name="critics_id">
                        @endforeach
                        {{-- Categories Edit --}}
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Grade') }}</h4>
                            </div>
                            <div class="card-body ">
                                {{-- Season Message --}}
                                {{-- called from controller >>> return back()->withStatus(__('Profile successfully updated.')); --}}


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Actors') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('actors_id') ? ' has-danger' : '' }}">
                                            <select name="actors_id" id="" class="form-control">
                                                @foreach ($actors as $actor)
                                                    <option class="form-control" value="{{ $actor->actor_id }}">
                                                        {{ $actor->a_name }} {{ $actor->a_surname }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if ($errors->has('actors_id'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-genre">{{ $errors->first('actors_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- Name edit --}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Acting') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('acting') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('acting') ? ' is-invalid' : '' }}"
                                                name="acting" id="input-acting" type="number"
                                                placeholder="{{ __('Acting') }}" aria-required="true" />

                                            @if ($errors->has('acting'))
                                                <span class="error text-danger" id="name-acting"
                                                    for="input-acting">{{ $errors->first('acting') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Expression') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('expression') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('expression') ? ' is-invalid' : '' }}"
                                                name="expression" id="input-expression" type="number"
                                                placeholder="{{ __('Expression') }}" aria-required="true" />

                                            @if ($errors->has('expression'))
                                                <span class="error text-danger" id="name-expression"
                                                    for="input-expression">{{ $errors->first('expression') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Naturalness') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('naturalness') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('naturalness') ? ' is-invalid' : '' }}"
                                                name="naturalness" id="input-naturalness" type="number"
                                                placeholder="{{ __('Naturalness') }}" aria-required="true" />

                                            @if ($errors->has('naturalness'))
                                                <span class="error text-danger" id="name-naturalness"
                                                    for="input-naturalness">{{ $errors->first('naturalness') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Devotion') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('devotion') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('naturalness') ? ' is-invalid' : '' }}"
                                                name="devotion" id="input-naturalness" type="number"
                                                placeholder="{{ __('Devotion') }}" aria-required="true" />

                                            @if ($errors->has('devotion'))
                                                <span class="error text-danger" id="name-devotion"
                                                    for="input-devotion">{{ $errors->first('devotion') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- Footer Submit Save Button --}}
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-success m-2">{{ __('Save') }}</button>
                                    <a href="{{ route('critics.index') }}"
                                        class="btn btn-primary m-2">{{ __('Back') }}</a>
                                </div>

                            </div>
                    </form>
                </div>



                {{-- Form 1 End --}}

                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{{ route('ratings.store') }}" autocomplete="off"
                            class="form-horizontal">
                            @csrf
                            @foreach ($critic as $c)
                                <input type="text" hidden value="{{ $c->critics_id }}" name="critics_id">
                            @endforeach
                            {{-- Categories Edit --}}
                            <div class="card ">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">{{ __('Rate') }}</h4>
                                </div>
                                <div class="card-body ">

                                    {{-- Season Message --}}
                                    {{-- called from controller >>> return back()->withStatus(__('Profile successfully updated.')); --}}
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">{{ __(' Movie') }}</label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('movie_id') ? ' has-danger' : '' }}">
                                                <select name="movie_id" id="" class="form-control">
                                                    @foreach ($movies as $film)
                                                        <option class="form-control" value="{{ $film->movie_id }}">
                                                            {{ $film->m_name }}
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
                                        <label class="col-sm-2 col-form-label">{{ __('Rate') }}</label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('rate') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('rate') ? ' is-invalid' : '' }}"
                                                    name="rate" id="input-rate" type="number"
                                                    placeholder="{{ __('Rate') }}" aria-required="true" />

                                                @if ($errors->has('role'))
                                                    <span class="error text-danger" id="rate-error"
                                                        for="input-rate">{{ $errors->first('rate') }}</span>
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
                </div>
            </div>
        </div>
    </div>
@endsection
