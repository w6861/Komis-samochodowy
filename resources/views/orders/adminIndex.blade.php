@include('layouts.app')

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="text-primary">All Orders</h2>
                            </div>
                        </h5>
                        <div class="table-responsive text-nowrap">
                            <div id="carTableDiv">
                                <table class="table table-striped" id="CarTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Car</th>
                                        <th>User</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Color</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    @if (count($orders) > 0)
                                        <tbody class="table-border-bottom-0">
                                        @php
                                            $count = 1;
                                        @endphp
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $count++ }}</td>
                                                <td>{{ $order->carName }}</td>
                                                <td>{{ $order->userName }}</td>
                                                <td>{{ $order->type }}</td>
                                                <td>{{ $order->price }}</td>
                                                <td>{{ $order->color }}</td>
                                                <td>
                                                    @if ($order->status == 'complete')
                                                        <span class="badge rounded-pill bg-success">Complete</span>
                                                    @else
                                                        <span class="badge rounded-pill bg-danger">Incomplete</span>
                                                    @endif
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($order->created_at)->diffForHumans() }}
                                                </td>
                                                <td>
                                                <a class="text-center">
                                                    @if ($order->status == 'incomplete')
                                                        <a href="{{ route('order-update', ['id' => $order->id]) }}"
                                                           id="{{ $order->id }}"
                                                           class="btn btnComplete btn-sm btn-s rounded-pill btn-icon btn-danger">
                                                            <span class="tf-icons fa-solid fa-check">Completed</span>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('order-update', ['id' => $order->id]) }}"
                                                           id="{{ $order->id }}"
                                                           class="btn btnComplete btn-sm btn-s rounded-pill btn-icon btn-danger">
                                                            <span class="tf-icons fa-solid fa-check">Incompleted</span>
                                                        </a>

                                                    @endif
                                                        <a href="{{ route('order-destroy', ['id' => $order->id]) }}"
                                                           id="{{ $order->id }}"
                                                           class="btn btnComplete btn-sm btn-s rounded-pill btn-icon btn-danger">
                                                            <span class="tf-icons fa-solid fa-check">Delete</span>
                                                        </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                    <span class="badge rounded-pill bg-primary">Totall :
                                                        {{ $orders->sum('price') }} $</span>
                                            </td>
                                            <td colspan="2" class="text-center">
                                                    <span class="badge rounded-pill bg-danger">Incomplete :
                                                        {{ $orderIncomplete->sum('price') }} $</span>
                                            </td>
                                            <td colspan="2" class="text-center">
                                                    <span class="badge rounded-pill bg-success">Complete :
                                                        {{ $orders->sum('price') - $orderIncomplete->sum('price') }}
                                                        $</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    @endif
                                </table>
                            </div>

                        </div>
                        <div class="card-footer">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



