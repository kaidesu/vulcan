<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginFormRequest;
use App\Http\Requests\Auth\RegisterFormRequest;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    /**
     * @var JWTAuth
     */
    protected $auth;

    /**
     * Create a new AuthController instance.
     *
     * @param JWTAuth $auth
     */
    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle a login request for the application.
     *
     * @param LoginFormRequest $request
     *
     * @return Response
     */
    public function login(LoginFormRequest $request)
    {
        try {
            if (!$token = $this->auth->attempt($request->only('email', 'password'))) {
                return response()->json([
                    'errors' => [
                        'message' => 'Could not sign you in with those details.',
                    ],
                ], 401);
            }
        } catch (JWTException $e) {
            return response()->json([
                'errors' => [
                    'message' => 'Failed to authenticate you with those details.',
                ],
            ], $e->getStatusCode());
        }

        return response()->json([
            'data' => $request->user(),
            'meta' => [
                'token' => $token,
            ],
        ], 200);
    }

    /**
     * Handle a logout request for the application.
     *
     * @param LogoutFormRequest $request
     *
     * @return Response
     */
    public function logout()
    {
        $this->auth->invalidate($this->auth->getToken());

        return response(null, 200);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param RegisterFormRequest $request
     *
     * @return Response
     */
    public function register(RegisterFormRequest $request)
    {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $this->auth->attempt($request->only('email', 'password'));

        return response()->json([
            'data' => $user,
            'meta' => [
                'token' => $token,
            ],
        ], 200);
    }

    public function user(Request $request)
    {
        return response()->json([
            'data' => $request->user(),
        ]);
    }
}
