<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ApiHelper;

class ClinicController extends Controller
{
    public function get_find_vetspage()
    {
        $clinics = ApiHelper::get('/clinic/get-clinics');

        return view('client.modules.connect-to-vet', ['clinics' => $clinics ?? []]);
    }

    public function get_vets_detailpage($id)
    {
        // Fetch clinic details
        $clinicData = ApiHelper::get("/clinic/get-clinic-by-id/{$id}");

        if (!$clinicData) {
            return abort(404, 'Clinic not found');
        }

        // Fetch services offered by the clinic
        $clinicOffers = ApiHelper::get("/offer/get-offers-by-clinicId/{$id}") ?? ['data' => []];

        return view('client.modules.vet-details', compact('clinicData', 'clinicOffers'));
    }
}
