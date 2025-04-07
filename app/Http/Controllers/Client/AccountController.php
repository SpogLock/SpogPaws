<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Helpers\ApiHelper;

class AccountController extends Controller
{
    public function get_accountManagmentpage()
    {
        return view('client.modules.manage-account');
    }

    public function update_personal_info(Request $request)
    {
        $user = session('user');

        if (!$user) {
            return redirect()->back()->with('error', 'User not authenticated.');
        }

        $endpoint = "/user/update/{$user['user_id']}";

        $formData = [
            'name' => $request->name,
        ];

        $response = ApiHelper::post($endpoint, $formData);

        if ($response->successful()) {
            session()->put('user.name', $request->name);
            return redirect()->back()->with('success', 'Personal information updated successfully.');
        }

        return redirect()->back()->with('error', $response->json()['message'] ?? 'Failed to update personal information.');
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

        $endpoint = "/user/update/{$user['id']}";

        $formData = [
            'current_password' => $request->current_password,
            'new_password' => $request->new_password,
        ];

        $response = ApiHelper::post($endpoint, $formData);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Password updated successfully.');
        }

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
