@extends('layouts.customerApp')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                All Cars

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
                                    <th class="text-center">Actions</th>
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
                                        <td class="text-center">
                                            <a href="{{ route('profile_index') }}"
                                               class="btn btn-primary">
                                                <span class="tf-icons bx bxs-cart-add ">Order</span>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>{{ $carsAll->links('layouts.pagination') }}
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



