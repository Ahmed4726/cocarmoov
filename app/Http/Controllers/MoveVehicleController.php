<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoveVehicleController extends Controller
{
    public function index(Request $request)
    {
        // dd("ok");
        $car_move = $request->all();
        // dd($car_move);
        $selectedVehicleType = $car_move['vehicle-type'];
        $selectedCondition = $car_move['vehicle-condition'];
        $distance = $car_move['distance'];
        // dd($distance);
        // dd($selectedVehicleType);


        $premium_package = 0;


        if (($selectedVehicleType === 'Citadine' || $selectedVehicleType === 'Berline' || $selectedVehicleType === 'Sportive' || $selectedVehicleType === 'Monospace' || $selectedVehicleType === '4×4' || $selectedVehicleType === '3m3' || $selectedVehicleType === '6m3' || $selectedVehicleType === '9m3' || $selectedVehicleType === '12m3' || $selectedVehicleType === '15m3' || $selectedVehicleType === 'Camion-benne' || $selectedVehicleType === 'Camping-car' || $selectedVehicleType === 'Van-aménagé') && ($selectedCondition === 'En-panne' || $selectedCondition === 'Accidenté')) {
            $premium_package = 1.49 * $distance + 149;
            return view('frontend.move_vehicle', compact('car_move', 'premium_package'));
        } else if ($selectedVehicleType === 'Collection') {
            $premium_package = 1.49 * $distance + 149;
            return view('frontend.move_vehicle', compact('car_move', 'premium_package'));
        } else if (($selectedVehicleType === '25m3' || $selectedVehicleType === '30m3' || $selectedVehicleType === 'Camion-benne' || $selectedVehicleType === 'Camping-car' || $selectedVehicleType === 'Van-aménagé') && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.94 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage'));
        } else if (($selectedVehicleType === '20m3' || $selectedVehicleType === '25m3' || $selectedVehicleType === '30m3') && ($selectedCondition === 'En-panne' && $selectedCondition === 'Accidenté')) {
            $express_package = 'No Packages Available';
            $economyPackage = 0.09 * $distance + 49;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage'));
        } else if (($selectedVehicleType === 'Citadine' || $selectedVehicleType === 'Berline') && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.65 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package'));
        } else if (($selectedVehicleType === 'Sportive' || $selectedVehicleType === 'Monospace' || $selectedVehicleType === '4×4') && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.66 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package'));
        } else if (($selectedVehicleType === '3m3' || $selectedVehicleType === '6m3') && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.69 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package'));
        } else if ($selectedVehicleType === '9m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.73 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package'));
        } else if ($selectedVehicleType === '12m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.76 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package'));
        } else if ($selectedVehicleType === '15m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.84 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package'));
        } else {
            $express_package = null;
            $economyPackage = null;
            $premium_package = null;
            return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package'));
        }
    }

    // public function economyPackage()
    // {

    // }
}
