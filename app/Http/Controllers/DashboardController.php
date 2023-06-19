<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $myProfile = User::find(Auth::user()->id)->Profile;

        $carsAll = Car::all();
        $carsCount = 0;
        foreach ($carsAll as $car) {
            $carsCount++;
        }

        $ordersAll = Order::all();
        $ordersCount = 0;
        foreach ($ordersAll as $order){
            $carsCount++;
        }

        $usersAll = User::all();
        $usersCount = 0;
        foreach($usersAll as $user){
            $usersCount++;
        }
        if (Auth::user()->role == 'Administrator') {
            $ordersCount = Order::where('status', '=', 'incomplete')->count();

            return view('adminDashboard', compact('myProfile', 'ordersCount', 'usersCount', 'carsCount'));
        } else {
            return view('customerDashboard', compact('myProfile', 'ordersCount'));
        }
    }
}
