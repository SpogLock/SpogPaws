<?php

namespace App\Http\Controllers\Vet;

use App\Helpers\ApiHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ClinicManagmentController extends Controller
{
    public function createClinic(Request $request)
    {
        // Check if user is in session
        $user = Session::get('user');

        if (!$user) {
            return redirect()->route('get-loginpage')->with('error', 'Please log in first.');
        }

        $clinicData = [
            'userId' => $user['user_id'],
            'clinicName' => $request->clinic_name,
            'about' => $request->about,
            'address' => $request->clinic_address,
            'approved' => false,
            'phoneNumber' => $request->phone_number,
        ];

        $response = ApiHelper::post('/clinic/create-clinic', $clinicData);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Clinic created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create clinic.');
        }
    }

    // Function to add a new service
    public function addService(Request $request)
    {
        $data = $request->validate([
            'clinicId'    => 'required|integer',
            'offerTitle'  => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'isActive'    => 'required|in:0,1'
        ]);

        // Convert 'isActive' to 0 or 1 explicitly
        $data['isActive'] = (int) $data['isActive'];

        // Ensure integers
        $data['price'] = (int) $data['price'];
        $data['clinicId'] = (int) $data['clinicId'];

        // dd($data); // Debugging output

        // Send the data to the external API
        $response = ApiHelper::post('/offer/create-offer', $data);

        // Check API response
        if (isset($response['status']) && $response['status'] === 'success') {
            return redirect()->back()->with('success', $response['message'] ?? 'Service added successfully.');
        } else {
            return redirect()->back()->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    // Function to update an existing service
    public function updateService(Request $request, $id)
    {
        $data = $request->validate([
            'offerTitle'  => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'isActive'    => 'required|boolean',
        ]);

        $response = ApiHelper::put("/offer/update-offer/{$id}", $data);

        return redirect()->back()->with($response['success'] ? 'success' : 'error', $response['message'] ?? 'Something went wrong');
    }

    // Function to delete a service
    public function deleteService($id)
    {
        $response = ApiHelper::delete("/offer/delete-offer/{$id}");

        return redirect()->back()->with($response['success'] ? 'success' : 'error', $response['message'] ?? 'Something went wrong');
    }

    public function updateClinicInfo(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Retrieve user session data
        $user = Session::get('user');

        // if (!$user) {
        //     return redirect()->route('get-loginpage')->with('error', 'Please log in first.');
        // }

        // Fetch the user ID
        $userId = $user['user_id']; // Assuming session stores user_id

        // Prepare the data to send to the API
        $clinicData = [
            'userId'     => $userId, // Send user ID to identify the clinic
            'clinicName' => $request->name,
        ];

        // Send request to update clinic info via API
        $response = ApiHelper::put("/clinic/update-clinic/{$userId}", $clinicData);

        // Handle API response
        if ($response['status'] === 'success') {
            return redirect()->back()->with('success', 'Clinic name updated successfully.');
        } else {
            return redirect()->back()->with('error', $response['message'] ?? 'Failed to update clinic name.');
        }
    }

}
