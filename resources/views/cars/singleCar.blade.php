@include('layouts.customerApp')


<div class="row">
        <div class="col-md-12 col-xl-8 m-auto">
            <div class="card shadow-lg mb-5 rounded">
                    <img class="card-img-top" src="{{ asset('users/cars/' . $car->picture) }}" alt="Card image cap">
                <div class="card-body">
                    <h3 class="text-dark">Name</h3>
                    <h6 class="text-secandery">{{ $car->name }}</h6>
                    <h3 class="text-dark">Type and Color of Car</h3>
                    <h6 class="text-secandery text-capitalize">{{ $car->type }} | {{ $car->color }}</h6>
                    <h3 class="text-dark">Description of Car</h3>
                    <h6 class="text-secandery">{{ $car->description }}</h6>
                    <h3 class="text-dark">Price of Car</h3>
                    <h6 class="text-secandery">{{ $car->price }}$</h6>
                    <div class="col-md-12 col-sm-12 mb-3 text-center">
                        <form action="{{ route('order-store', ['id' => $car->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-info">
                            <span class="tf-icons bx bxs-save"></span> Store
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

