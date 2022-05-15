@extends('layouts.app', ['activePage' => 'actors', 'titlePage' => __('Actor Info')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        {{-- Card Header --}}

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ $actor->a_name }} {{ $actor->a_surname }}</h4>
                        </div>

                        {{-- Card Body --}}
                        <div class="card-body">
                            <div class="table-responsive">

                                <div class="row mx-0 my-2">
                                    <p class="col-md-2 col-form-label ">{{ __('Grades:') }}</p>
                                    <div class="col-md-10 border-left">
                                        @foreach ($grades as $g)
                                            <p class="col-form-label">Acting: {{ $g->acting }}</p>
                                            <p class="col-form-label">Expression: {{ $g->expression }}</p>
                                            <p class="col-form-label">Naturalness: {{ $g->naturalness }}</p>
                                            <p class="col-form-label">Devotion: {{ $g->devotion }}</p>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="row mx-0 my-2">
                                    <p class="col-md-2 col-form-label ">{{ __('Earnings by Movie:') }}</p>
                                    <div class="col-md-10 border-left">
                                        @foreach ($plays as $p)
                                            <p class="col-form-label">{{ $p->m_name }}| {{ $p->paid }} $</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <a href="{{ route('actors.index') }}" class="btn btn-primary m-2">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
