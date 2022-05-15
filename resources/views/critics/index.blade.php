@extends('layouts.app', ['activePage' => 'critics', 'titlePage' => __('Critics')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Critics</h4>
                            <p class="card-category">All critics</p>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Surname</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($critics as $critic)
                                        <tr>
                                            <td class="text-center">{{ $critic->c_name }}</td>
                                            <td class="text-center">{{ $critic->c_surname }}</td>
                                            <td class="text-center">{{ $critic->username }}</td>
                                            <td class="td-actions text-right">
                                                <a href="{{ route('critics.edit', $critic->critics_id) }}">
                                                    <button type="button" rel="tooltip" class="btn btn-success">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </a>

                                            </td>
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
