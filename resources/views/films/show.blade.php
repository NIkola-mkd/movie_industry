@extends('layouts.app', ['activePage' => 'films', 'titlePage' => __('Film Info')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        {{-- Card Header --}}
                        @foreach ($films as $film)
                            <div class="card-header card-header-warning">
                                <h4 class="card-title ">{{ $film->m_name }}</h4>
                            </div>

                            {{-- Card Body --}}
                            <div class="card-body">
                                <div class="table-responsive">

                                    {{-- Title --}}
                                    <div class="row mx-0 my-2">
                                        <p class="col-md-2 col-form-label">{{ __('Genre:') }}</p>
                                        <div class="col-md-10 border-left">
                                            <p class="col-form-label">{{ $film->genre_name }}</p>
                                        </div>
                                    </div>

                                    <hr>

                                    {{-- Description --}}
                                    <div class="row mx-0 my-2">
                                        <p class="col-md-2 col-form-label ">{{ __('Director:') }}</p>
                                        <div class="col-md-10 border-left">
                                            <p class="col-form-label">{{ $film->d_name }} {{ $film->d_surname }}</p>
                                        </div>
                                    </div>

                                    <div class="row mx-0 my-2">
                                        <p class="col-md-2 col-form-label ">{{ __('Expertise:') }}</p>
                                        <div class="col-md-10 border-left">
                                            <p class="col-form-label">{{ $film->expertise }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mx-0 my-2">
                                        <p class="col-md-2 col-form-label ">{{ __('Genre:') }}</p>
                                        <div class="col-md-10 border-left">
                                            <p class="col-form-label">{{ $film->genre_name }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mx-0 my-2">
                                        <p class="col-md-2 col-form-label ">{{ __('City Premiere:') }}</p>
                                        <div class="col-md-10 border-left">
                                            <p class="col-form-label">{{ $film->city_premiere }}</p>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <p class="col-md-2 col-form-label ">{{ __('Earnings:') }}</p>
                                        <div class="col-md-10 border-left">
                                            <p class="col-form-label">{{ $film->earnings }} $</p>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <p class="col-md-2 col-form-label ">{{ __('Format:') }}</p>
                                        <div class="col-md-10 border-left">
                                            @if ($film->_2d != null)
                                                <p class="col-form-label">2D </p>
                                            @endif

                                            @if ($film->_3d != null)
                                                <p class="col-form-label">3D </p>
                                            @endif
                                        </div>
                                    </div>
                        @endforeach

                        <hr>
                        <div class="row mx-0 my-2">
                            <p class="col-md-2 col-form-label ">{{ __('Actors:') }}</p>
                            <div class="col-md-10 border-left">
                                @foreach ($actors as $actor)
                                    <p class="col-form-label">{{ $actor->a_name }} {{ $actor->a_surname }}</p>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="row mx-0 my-2">
                            <p class="col-md-2 col-form-label ">{{ __('Rating:') }}</p>
                            <div class="col-md-10 border-left">
                                @foreach ($rating as $r)
                                    <p class="col-form-label">{{ $r->average }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                    <a href="{{ route('home') }}" class="btn btn-warning m-2">{{ __('Back') }}</a>
                </div>
            </div>



        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
