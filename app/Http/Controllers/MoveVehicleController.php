<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoveVehicleController extends Controller
{
    public function index(Request $request)
    {
        $car_move = $request->all();
        $selectedVehicleType = $car_move['vehicle-type'];
        $selectedCondition = $car_move['vehicle-condition'];
        $distance = $car_move['distance'];
        $car_owner = $car_move['vehicle-mover'];

        $premium_package = null;
        $express_package = null;
        $economyPackage = null;
        $tax_notation = null;

        if (in_array($selectedVehicleType, ['Citadine', 'Berline', 'Sportive', 'Monospace', '4×4', '3m3', '6m3', '9m3', '12m3', '15m3', 'Camion-benne', 'Camping-car', 'Van-aménagé']) && in_array($selectedCondition, ['En-panne', 'Accidenté'])) {
            $premium_package = 1.49 * $distance + 149;
        } elseif ($selectedVehicleType === 'Collection') {
            $premium_package = 1.49 * $distance + 149;
        } elseif (in_array($selectedVehicleType, ['25m3', '30m3', 'Camion-benne', 'Camping-car', 'Van-aménagé']) && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.94 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
        } elseif (in_array($selectedVehicleType, ['20m3', '25m3', '30m3']) && in_array($selectedCondition, ['En-panne', 'Accidenté'])) {

        } elseif (in_array($selectedVehicleType, ['Citadine', 'Berline']) && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.65 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
        } elseif (in_array($selectedVehicleType, ['Sportive', 'Monospace', '4×4']) && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.66 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
        } elseif (in_array($selectedVehicleType, ['3m3', '6m3']) && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.69 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
        } elseif ($selectedVehicleType === '9m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.73 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
        } elseif ($selectedVehicleType === '12m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.76 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
        } elseif ($selectedVehicleType === '15m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = 0.84 * $distance + 59;
            $economyPackage = 0.09 * $distance + 49;
            $premium_package = 1.49 * $distance + 149;
        }

        // Multiply packages by 1.2 if $car_owner is equal to $car_move['vehicle-mover']
        if ($car_owner === 'private') {
            $premium_package *= 1.2;
            $express_package *= 1.2;
            $economyPackage *= 1.2;
        }
        if ($car_owner === 'professional') {
            $tax_notation = 'HT';
        }
        else {
            $tax_notation = 'TTC';
        }

        return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package', 'tax_notation'));
    }



    // public function economyPackage()
    // {

    // }
}
