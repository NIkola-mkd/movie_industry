@extends('layouts.app', ['activePage' => 'actors', 'titlePage' => __('Actors')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Actors</h4>
                            <p class="card-category">All actors</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="{{ route('actors.create') }}"
                                        class="btn btn-sm btn-primary py-3 d-flex align-items-center mx-auto"
                                        style="width: fit-content;"><i class="material-icons"
                                            style="font-size: 30px;">post_add</i> <span class="mt-1">Add new
                                            actor</span></a>
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
                                        <th class="text-center">#agent code</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Surname</th>
                                        <th class="text-center">Date of birth</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actors as $actor)
                                        <tr>
                                            <td class="text-center">{{ $actor->agent_code }}</td>
                                            <td class="text-center">{{ $actor->a_name }}</td>
                                            <td class="text-center">{{ $actor->a_surname }}</td>
                                            <td class="text-center">{{ $actor->date_of_birth }}</td>
                                            <td class="td-actions text-right">
                                                <a href="{{ route('actors.edit', $actor->actor_id) }}">
                                                    <button type="button" rel="tooltip" class="btn btn-success">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('actors.destroy', $actor->actor_id) }}"
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
