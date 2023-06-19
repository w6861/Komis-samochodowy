@include('layouts.app')

@section('content')
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <img width="200px" src="img/car.png" class="center">
                        <span class="rounded text-info"><h2 style="color: black">Current number of cars: {{ $carsCount }}</h2></span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <img width="150px" src="img/order.png" class="center">
                        <span class="rounded text-info"><h2 style="color: black">Current number of incompleted orders: {{ $ordersCount}}</h2></span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <img width="150px" src="img/user.jpg" class="center">
                        <span class="rounded text-info"><h2 style="color: black">Current number of users: {{ $usersCount }}</h2></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

