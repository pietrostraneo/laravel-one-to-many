@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">

                <div class="d-flex justify-content-end mb-5">
                    <a href="{{ route('admin.projects.create') }}"><button class="btn btn-success">Add Project</button></a>
                </div>

                <table class="table justify-content-center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td><a
                                        href="{{ route('admin.projects.show', ['project' => $project['id']]) }}">{{ $project['name'] }}</a>
                                </td>
                                <td>{{ $project->type_id != null ? $project->type->name : 'Senza Categoria' }}</td>
                                <td>{{ $project['assignment_date'] }}</td>
                                <td>
                                    <div class="d-flex gap-1">

                                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#delete-{{ $project->id }}"><i
                                                class="fas fa-trash-can"></i></button>

                                        <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"><button
                                                class="btn btn-warning btn-sm"><i
                                                    class="fas fa-pen-to-square"></i></button></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-auto">
                <a href="{{ route('admin.dashboard') }}"><button class="btn btn-primary">Torna alla
                        dashboard</button></a>
            </div>
        </div>
    </div>

    @include('admin.projects.modal')
@endsection
