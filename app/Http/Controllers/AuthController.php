<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('apikey.verify');
        $this->middleware('auth:api', ['except' => ['login','register','check_duplicate_number']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
    	$this->validate($request,[
    		'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'socialType' => ['string','max:255'],
            'deviceToken' => ['string'],
            'phoneNo' => ['string','unique:users'],
            'socialId' => ['string'],
    	]);

    	User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'socialType' => $request['socialType'],
            'deviceToken' => $request['deviceToken'],
            'phoneNo' => $request['phoneNo'],
            'socialId' => $request['socialId'],
            'password' => Hash::make($request['password']),
        ]);
    	
    	$credentials = request(['email', 'password']);
    	$token = auth()->attempt($credentials);

        $message = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'phoneNo' => $request['phoneNo'],
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60
            'expires_in' => auth('api')->factory()->getTTL() * 60
        );
    	return response()->json([
            'status' => true,
            'message' => $message,
        ]);
    }
    public function login(Request $request)
    {
        if($request->email)
            $credentials = request(['email', 'password']);
        else if($request->phoneNo)
            $credentials = request(['phoneNo', 'password']);
        else
            return response()->json(['status' => false, 'message' => 'unauthorized'], 401);

        if (! $token = auth()->guard('api')->attempt($credentials)) {
            return response()->json(['status' => false, 'message' => 'unauthorized'], 401);
        }
        return $this->respondWithTokenUser($token);
        
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json([
            'status' => true,
            'message' => auth()->guard('api')->user()
        ]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->guard('api')->logout();

        return response()->json(['status' => true,'message' => 'logged_out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        $message = array(
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60
            'expires_in' => auth('api')->factory()->getTTL() * 60,

        );
        return response()->json([
            'status' => true,
            'message' => $message
        ]);
    }

    protected function respondWithTokenUser($token)
    {
        $message = array(
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth()->guard('api')->user()

        );
        return response()->json([
            'status' => true,
            'message' => $message
        ]);
    }

    public function check_duplicate_number(Request $request)
    {
        $this->validate($request,[
            'phoneNo' => 'string',
        ]);

        $user = User::where('phoneNo',$request->phoneNo)->first();
        if($user)
            $message = 'phoneNo_exist';
        else
            $message = 'phoneNo_not_exist';

        return response()->json([
            'status' => true,
            'message' => $message
        ]);
    }
}
