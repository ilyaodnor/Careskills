<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{

    public function saveUsersToDataBase()
    {
        $path = public_path('CareskillsAssets/usersSeder.json');

        if (!File::exists($path)) {
            return response()->json(['error' => 'users.json not found'], 404);
        }

        $users = json_decode(File::get($path), true);

        if (!$users || !is_array($users)) {
            return response()->json(['error' => 'Invalid JSON format'], 400);
        }

        foreach ($users as $user) {
            if (!isset($user['name'], $user['email'], $user['password'], $user['level'])) {
                continue;
            }

            $user['password'] = bcrypt($user['password']);
            $user['email_verified_at'] = now();
            $user['remember_token'] = null;
            $user['created_at'] = now();
            $user['updated_at'] = now();
            $user['level'] = $user['level'] ?? 0;
            $user['xp_to_next_level'] = $user['xp_to_next_level'] ?? 0;
            $user['avatar'] = $user['avatar'] ?? null;
            User::create($user);
        }
        $users = User::orderBy('level', 'desc')->get();
        return response()->json(['message' => 'Users imported successfully']);
    }

}
