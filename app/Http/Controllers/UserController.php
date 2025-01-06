<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        $totalUsers = User::count();

        return response()->json([
            'data' => UserResource::collection($users),
            'total' => $totalUsers
        ]);
    }

    public function store(StoreUserRequest $request)
    {
        $user = new User();

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->service_id = $request->input('service_id');

        $user->save();

        return new UserResource($user);
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        // Vérifier si un mot de passe est fourni
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->role = $request->input('role');
        $user->service_id = $request->input('service_id');

        $user->save();

        return new UserResource($user);
    }

    public function updatePassword(Request $request, User $user)
    {
        $user->password = bcrypt($request->input('newPassword'));
        $user->save();
        return response()->json([
            'message' => 'Password updated successfully.',
            'user' => new UserResource($user),
        ], Response::HTTP_OK);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->noContent();
    }

}
