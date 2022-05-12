@extends('layouts.app', ['activePage' => 'genre', 'titlePage' => __('New Genre')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- Form 1 --}}
                <div class="col-md-12">
                    <form method="post" action="{{ route('genre.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        {{-- Categories Edit --}}
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add new genre') }}</h4>

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
                                    <label class="col-sm-2 col-form-label">{{ __('Genre Name') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                name="genre_name" id="input-name" type="text"
                                                placeholder="{{ __('Genre Name') }}" aria-required="true"
                                                value="{{ old('name') }}" />

                                            @if ($errors->has('name'))
                                                <span class="error text-danger" id="name-error"
                                                    for="input-name">{{ $errors->first('name') }}</span>
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
