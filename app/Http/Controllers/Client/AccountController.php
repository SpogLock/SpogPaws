<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AccountController extends Controller
{
    public function get_accountManagmentpage(){
        return view('client.modules.manage-account');
    }

    public function update_personal_info(Request $request)
    {
        $user = session('user');

        if (!$user) {
            return redirect()->back()->with('error', 'User not authenticated.');
        }

        $apiUrl = "https://gnat-careful-sparrow.ngrok-free.app/api/v1/user/update/{$user['user_id']}";

        $formData = [
            'name' => $request->name,
        ];

        $response = Http::post($apiUrl, $formData);
        if ($response->successful()) {
            session()->put('user.name', $request->name);
            return redirect()->back()->with('success', 'Personal information updated successfully.');
        } else {
            $errorMessage = $response->json()['message'] ?? 'Failed to update personal information.';
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        $user = session('user');

        if (!$user) {
            return redirect()->back()->with('error', 'User not authenticated.');
        }

        // Fetch user from DB
        $dbUser = User::find($user['id']); // Assuming you have the User model

        if (!$dbUser || !Hash::check($request->current_password, $dbUser->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // If password matches, proceed with the API request
        $formData = [
            'current_password' => $request->current_password,
            'new_password' => $request->new_password,
        ];

        $response = Http::post("https://gnat-careful-sparrow.ngrok-free.app/api/v1/user/update/{$user['id']}", $formData);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            $errorMessage = 'Failed to update password.';
            $errorBody = $response->json();

            if (isset($errorBody['message'])) {
                $errorMessage = $errorBody['message'];
            } elseif (isset($errorBody['errors'])) {
                $errorMessage = implode(', ', array_map(fn ($errors) => implode(' ', $errors), $errorBody['errors']));
            }

            return redirect()->back()->with('error', $errorMessage);
        }
    }

}
