@extends('layouts.app', ['activePage' => 'directors', 'titlePage' => __('New Director')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- Form 1 --}}
                <div class="col-md-12">
                    <form method="post" action="{{ route('directors.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        {{-- Categories Edit --}}
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add new director') }}</h4>

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
                                        <div class="form-group{{ $errors->has('d_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('d_name') ? ' is-invalid' : '' }}"
                                                name="d_name" id="input-name" type="text" placeholder="{{ __(' Name') }}"
                                                aria-required="true" value="{{ old('d_name') }}" />

                                            @if ($errors->has('d_name'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-name">{{ $errors->first('d_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Surname') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('d_surname') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('d_surname') ? ' is-invalid' : '' }}"
                                                name="d_surname" id="input-surname" type="text"
                                                placeholder="{{ __(' Surname') }}" aria-required="true"
                                                value="{{ old('d_surname') }}" />

                                            @if ($errors->has('d_surname'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-surname">{{ $errors->first('surname') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __(' Expertise') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('expertise') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('expertise') ? ' is-invalid' : '' }}"
                                                name="expertise" id="input-surname" type="text"
                                                placeholder="{{ __(' Expertise') }}" aria-required="true"
                                                value="{{ old('expertise') }}" />

                                            @if ($errors->has('expertise'))
                                                <span class="error text-danger" id="expertise-error"
                                                    for="input-expertise">{{ $errors->first('expertise') }}</span>
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


                                {{-- Footer Submit Save Button --}}
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-success m-2">{{ __('Save') }}</button>
                                    <a href="{{ route('directors.index') }}"
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
