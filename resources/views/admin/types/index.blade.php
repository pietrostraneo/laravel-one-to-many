@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-5">
                <ul class=" list-unstyled ">
                    @foreach ($types as $type)
                        <li class="d-flex justify-content-between p-3">
                            <h6>{{ $type->name }}</h6>
                            <div class="d-flex gap-1">
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash-can"></i></button>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#edit-{{ $type->id }}"><i class="fas fa-pen-to-square"></i></button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    @include('admin.types.modal')
@endsection
