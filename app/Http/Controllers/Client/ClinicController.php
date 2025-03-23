<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClinicController extends Controller
{
    public function get_find_vetspage(){
        $response = Http::get('https://gnat-careful-sparrow.ngrok-free.app/api/v1/clinic/get-clinics');

        if ($response->successful()) {
            $clinics = $response->json();
            // dd($clinics);
        } else {
            $clinics = []; // Fallback in case of API failure
        }

        return view('client.modules.connect-to-vet', compact('clinics'));
    }


    public function get_vets_detailpage($id) {
        // Fetch clinic details from API
        $clinicResponse = Http::get("https://gnat-careful-sparrow.ngrok-free.app/api/v1/clinic/get-clinic-by-id/{$id}");

        // Fetch services (clinic offers) from API
        $serviceResponse = Http::get("https://gnat-careful-sparrow.ngrok-free.app/api/v1/offer/get-offers-by-clinicId/{$id}");

        // Check if clinic details API request was successful
        if ($clinicResponse->successful()) {
            $clinicData = $clinicResponse->json();
        } else {
            return abort(404, 'Clinic not found');
        }

        // Check if clinic services API request was successful
        if ($serviceResponse->successful()) {
            $clinicOffers = $serviceResponse->json();
            // dd($clinicOffers);
        } else {
            $clinicOffers = ['data' => []]; // Default empty if API fails
        }

        return view('client.modules.vet-details', compact('clinicData', 'clinicOffers'));
    }

}
