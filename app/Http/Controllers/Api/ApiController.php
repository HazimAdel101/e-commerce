<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function register(Request $request)
    {

        try {
            $validate_user = Validator::make($request->all(), [
                'photo' => 'photo|mimes:jpeg,png,jpg,gif|max:2048',
                'name' => 'required|string|min:3|max:100',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
            ]);

            // Return validation errors if validation fails
            if ($validate_user->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validate_user->errors()
                ], 422);
            }

            // Hash the password before saving
            $request->merge(['password' => Hash::make($request->password)]);

            // Save the user using the repository and retrieve the user model
            $user = $this->userRepository->store($request);

            // Generate token for the saved user
            $token = $user->createToken('secret Token123')->plainTextToken;

            // Return success response with token
            return response()->json([
                'status' => true,
                'message' => 'User created successfully',
                'token' => $token
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function login(Request $request)
{
    try {
        $validate_user = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validate_user->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validate_user->errors()
            ], 422);
        }

        if (!Auth::attempt($request->only(['email', 'password']))) {
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                Log::warning('Login failed: User not found', ['email' => $request->email]);
            } else {
                Log::warning('Login failed: Incorrect password', ['email' => $request->email]);
            }
            return response()->json([
                'status' => false,
                'message' => 'Wrong user name or password',
            ], 401);
        }

        $user = Auth::user(); // Fetch the authenticated user
        return response()->json([
            'status' => true,
            'message' => 'User logged in successfully',
            'token' => $user->createToken('secret Token123')->plainTextToken
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}


    public function profile()
    {
        $user = Auth::user(); // Changed to Auth::user() instead of auth()->user()

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Profile Information',
            'data' => $user,
            'id' => $user->id
        ], 200);
    }

    public function logout()
{
    $user = Auth::user(); // Get the authenticated user

    if ($user) {
        // Delete all tokens for the user
        $user->tokens()->delete();
        return response()->json([
            'status' => true,
            'message' => 'User logged out',
            'data' => [],
        ], 200);
    }

    return response()->json([
        'status' => false,
        'message' => 'No authenticated user found',
    ], 401);
}



}
