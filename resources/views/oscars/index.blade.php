@extends('layouts.app', ['activePage' => 'oscars', 'titlePage' => __('Oscar Winners')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Oscars</h4>
                            <p class="card-category">All winners</p>
                        </div>
                        <div class="card-body">
                            <div class="row">

                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#agent code</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Surname</th>
                                        <th class="text-center">Date of birth</th>
                                        <th class="text-center">Movie</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td class="text-center">{{ $d->agent_code }}</td>
                                            <td class="text-center">{{ $d->a_name }}</td>
                                            <td class="text-center">{{ $d->a_surname }}</td>
                                            <td class="text-center">{{ $d->date_of_birth }}</td>
                                            <td class="text-center">{{ $d->m_name }}</td>
                                            <td class="text-center">{{ $d->role }}</td>
                                            <td class="text-center">{{ $d->year }}</td>
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
