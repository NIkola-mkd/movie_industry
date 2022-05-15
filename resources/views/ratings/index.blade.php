@extends('layouts.app', ['activePage' => 'ratings', 'titlePage' => __('Ratings')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Ratings</h4>
                        </div>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ratings as $rate)
                                        <tr>
                                            <td class="text-center">{{ $rate->m_name }}</td>
                                            <td class="text-center">{{ $rate->average }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Include this script if there is delete button for sweet alert --}}
@endsection
