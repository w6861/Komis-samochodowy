@include('layouts.customerApp')

@section('content')
    <div class="container">
        <br>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <img width="150px" src="img/order.png" class="center">
                        <span class="rounded text-info"><h2 style="color: black">Current number of your orders: {{ $ordersCount}}</h2></span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

