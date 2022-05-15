@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header">
                            <h4 class="card-title ">Movies</h4>
                            <p class="card-category">All movies</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="{{ route('movies.create') }}"
                                        class="btn btn-sm btn-primary py-3 d-flex align-items-center mx-auto"
                                        style="width: fit-content;"><i class="material-icons"
                                            style="font-size: 30px;">post_add</i> <span class="mt-1">Add new
                                            movie</span></a>
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
                            <div class="row my-5">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header card-header-warning">
                                            <h4 class="card-title ">Films</h4>
                                            <p class="card-category">All films</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <a href="{{ route('films.create') }}"
                                                        class="btn btn-sm btn-warning py-3 d-flex align-items-center mx-auto"
                                                        style="width: fit-content;"><i class="material-icons"
                                                            style="font-size: 30px;">post_add</i> <span
                                                            class="mt-1">Add new
                                                            film</span></a>
                                                </div>
                                            </div>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Genre</th>
                                                        <th class="text-right">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($films as $film)
                                                        <tr>
                                                            <td class="text-center">{{ $film->m_name }}</td>
                                                            <td class="text-center">{{ $film->genre_name }}</td>
                                                            <td class="td-actions text-right">
                                                                <a href="{{ route('films.show', $film->movie_id) }}">
                                                                    <button type="button" rel="tooltip"
                                                                        class="btn btn-success">
                                                                        <i class="material-icons">visibility</i>
                                                                    </button>
                                                                </a>
                                                                <form
                                                                    action="{{ route('films.destroy', $film->movie_id) }}"
                                                                    method="post" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button
                                                                        type="
                                                                                                                                            submit"
                                                                        rel="tooltip" class="btn btn-danger">
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
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header card-header-danger">
                                            <h4 class="card-title ">TV SERIES</h4>
                                            <p class="card-category">All series</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <a href="{{ route('series.create') }}"
                                                        class="btn btn-sm btn-danger py-3 d-flex align-items-center mx-auto"
                                                        style="width: fit-content;"><i class="material-icons"
                                                            style="font-size: 30px;">post_add</i> <span
                                                            class="mt-1">Add new
                                                            serial</span></a>
                                                </div>
                                            </div>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Genre</th>
                                                        <th class="text-right">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($series as $s)
                                                        <tr>
                                                            <td class="text-center">{{ $s->m_name }}</td>
                                                            <td class="text-center">{{ $s->genre_name }}</td>
                                                            <td class="td-actions text-right">
                                                                <a href="{{ route('series.show', $s->movie_id) }}">
                                                                    <button type="button" rel="tooltip"
                                                                        class="btn btn-success">
                                                                        <i class="material-icons">visibility</i>
                                                                    </button>
                                                                </a>
                                                                <form
                                                                    action="{{ route('series.destroy', $s->movie_id) }}"
                                                                    method="post" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" rel="tooltip"
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
                </div>
            </div>
        </div>
    </div>
@endsection
