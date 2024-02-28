@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="d-flex gap-3 justify-content-between">
                            <h4 class="card-title">{{ $project['name'] }}</h4>
                            <a href="{{ Route('admin.projects.edit', ['project' => $project->id]) }}"><button
                                    class="btn btn-danger">EDIT</button></a>
                        </div>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $project['assignment_date'] }}</h6>
                        @if ($project->preview != null)
                            <img src="{{ asset('/storage/' . $project->preview) }}" alt="{{ $project->name }}"
                                width="100px">
                        @endif
                        <p class="card-text">{{ $project['description'] }}</p>
                        <p class="card-text"><strong>Type: </strong>{{ $project->type->name }}</p>
                        <p class="card-text"><strong>Supervisors: </strong>{{ $project['supervisors'] }}</p>
                        <p class="card-text"><strong>Framework: </strong>{{ $project['framework'] }}</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-auto">
                <a href="{{ route('admin.projects.index') }}"><button class="btn btn-primary">Torna alla lista</button></a>
                <a href="{{ route('admin.dashboard') }}"><button class="btn btn-primary">Torna alla
                        dashboard</button></a>
            </div>
        </div>
    </div>
@endsection
