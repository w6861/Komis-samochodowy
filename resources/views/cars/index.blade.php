@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                All Cars
                                <a href="{{ route('cars-create') }}" class="btn btn-info">
                                    New Car &nbsp; <span class="tf-icons fa-solid fa-angles-right"></span>
                                </a>
                            </div>
                        </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped" id="CarTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>picture</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($carsAll as $car)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $car->name }}</td>
                                        <td>{{ $car->price }} $ </td>
                                        <td class="col-2">
                                            <img class="img-fluid"
                                                 src="{{ asset('users/cars/' . $car->picture) }}" />
                                        </td>
                                        <td>
                                            <a href="{{ route('cars-edit', ['id' => $car->id]) }}"
                                               id="{{ $car->id }}"
                                               class="btn btn-primary">Edit
                                                <span class="tf-icons bx bx-edit"></span>
                                            </a>
                                            <a href="{{ route('cars-destroy', ['id' => $car->id]) }}" id=""
                                               class="btn btn-danger active">Delete
                                                <span class="tf-icons fa-solid fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>{{ $carsAll->links('layouts.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



