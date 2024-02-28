@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">

                <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="text-center mb-3">
                        <h3>Stai Modificando: {{ $project['name'] }}</h3>
                    </div>

                    <div class="form-group mt-3">
                        <label for="name" class=" form-label ">Name:</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror" value="{{ $project['name'] }}"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="description" class=" form-label ">Description:</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                            cols="30" rows="10">{{ $project['description'] }}</textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="type_id" class="form-label">Select type:</label>
                        <select name="type_id" id="type" class=" form-select @error('type_id') is-invalid @enderror "
                            required>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="supervisors" class=" form-label ">Supervisors:</label>
                        <input type="text" name="supervisors"
                            class="form-control @error('supervisors') is-invalid @enderror" id="supervisors"
                            value="{{ $project['supervisors'] }}" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="framework" class=" form-label ">Framework:</label>
                        <input type="text" name="framework" class="form-control @error('framework') is-invalid @enderror"
                            id="framework" value="{{ $project['framework'] }}" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="assignment_date" class=" form-label ">Assignment Date:</label>
                        <input type="date" name="assignment_date"
                            class="form-control @error('assignment_date') is-invalid @enderror" id="assignment_date"
                            value="{{ $project['Assignment Date'] }}" required>
                    </div>

                    <div class="form-group mt-3 text-center">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
