<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function get_loginpage(){
        return view('client.modules.login');
    }

    public function get_registerpage(){
        return view('client.modules.register');
    }

    public function get_vets_registerpage(){
        return view('client.modules.become-vet-form');
    }

    public function get_find_vetspage(){
        return view('client.modules.connect-to-vet');
    }

    public function get_vets_detailpage(){
        return view('client.modules.vet-details');
    }

    public function get_casestudiespage(){
        return view('client.modules.case-studies-menu');
    }

    public function get_adoptionpage(){
        return view('client.modules.adopt-a-pet');
    }

    public function get_reportcasepage(){
        return view('client.modules.report-case');
    }
}
