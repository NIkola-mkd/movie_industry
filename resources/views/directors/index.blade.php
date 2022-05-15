@extends('layouts.app', ['activePage' => 'directors', 'titlePage' => __('Directors')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Directors</h4>
                            <p class="card-category">All directors</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="{{ route('directors.create') }}"
                                        class="btn btn-sm btn-primary py-3 d-flex align-items-center mx-auto"
                                        style="width: fit-content;"><i class="material-icons"
                                            style="font-size: 30px;">post_add</i> <span class="mt-1">Add new
                                            director</span></a>
                                </div>
                            </div>
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Surname</th>
                                        <th class="text-center">Expertise</th>
                                        <th class="text-center">Genre</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($directors as $director)
                                        <tr>
                                            <td class="text-center">{{ $director->directors_id }}</td>
                                            <td class="text-center">{{ $director->d_name }}</td>
                                            <td class="text-center">{{ $director->d_surname }}</td>
                                            <td class="text-center">{{ $director->expertise }}</td>
                                            <td class="text-center">{{ $director->genre_name }}</td>
                                            <td class="td-actions text-right">
                                                <a href="{{ route('directors.edit', $director->directors_id) }}">
                                                    <button type="button" rel="tooltip" class="btn btn-success">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('directors.destroy', $director->directors_id) }}"
                                                    method="post" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="
                                                                                submit" rel="tooltip"
                                                        class="btn btn-danger">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>
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
