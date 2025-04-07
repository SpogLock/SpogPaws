<?php

namespace App\Http\Controllers\Vet;
use App\Helpers\ApiHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VetsMasterController extends Controller
{
    public function get_vets_dashboard($id)
    {
        // Fetch clinic details
        $clinicData = ApiHelper::get("/clinic/get-clinic-by-id/{$id}");

        if (!$clinicData) {
            return abort(404, 'Clinic not found');
        }

        // Fetch services offered by the clinic
        $clinicOffers = ApiHelper::get("/offer/get-offers-by-clinicId/{$id}") ?? ['data' => []];

        // Pass the clinic_id to the view
        return view('vets.modules.dashboard', compact('clinicData', 'clinicOffers', 'id'))->with('clinic_id', $id);
    }

}
