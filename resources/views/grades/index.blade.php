@extends('layouts.app', ['activePage' => 'grades', 'titlePage' => __('Total Grades')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header">
                            <h4 class="card-title ">Actors by Grades</h4>
                            @foreach ($avg as $a)
                                <h5>Average Grade: {{ $a->avgG }}</h5>
                            @endforeach
                        </div>
                        <div class="card-body">

                            <div class="row my-5">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header card-header-success">
                                            <h4 class="card-title ">Higher Grades than Average</h4>

                                        </div>
                                        <div class="card-body">


                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Surname</th>
                                                        <th class="text-center">Average Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($higher as $h)
                                                        <tr>
                                                            <td class="text-center">{{ $h->a_name }}</td>
                                                            <td class="text-center">{{ $h->a_surname }}</td>
                                                            <td class="text-center">{{ $h->avg }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header card-header-danger">
                                            <h4 class="card-title ">Lower Grades than Average</h4>
                                        </div>
                                        <div class="card-body">


                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Surname</th>
                                                        <th class="text-center">Average Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($lower as $l)
                                                        <tr>
                                                            <td class="text-center">{{ $l->a_name }}</td>
                                                            <td class="text-center">{{ $l->a_surname }}</td>
                                                            <td class="text-center">{{ $l->avg }}</td>
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
                </div>
            </div>
        </div>
    </div>
@endsection
