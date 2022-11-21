<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * Create Posts
     * @OA\Post (
     *     path="/api/register",
     *     tags={"Auth"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(property="name", type="string"),
     *                      @OA\Property(property="email", type="string"),
     *                      @OA\Property(property="password",type="string"),
     *                      @OA\Property(property="password_confirmation",type="string")
     *                 ),
     *                 example={
     *                     "name":"jok Min",
     *                     "email": "jok@gmail.com",
     *                     "password": "11112222",
     *                     "password_confirmation":"11112222"
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *               @OA\Property(property="id", type="number",example="1"),
     *               @OA\Property(property="name", type="string", example="jok Min"),
     *               @OA\Property(property="email", type="string", example="jok@gmail.com",),
     *               @OA\Property(property="password", type="int", example="11112222", ),
     *               @OA\Property(property="password_confirmation", type="string", example="11112222"),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *          ),
     *      ),
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      ),
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *    ),
     *  )
     */

    public function register(Request $request)
    {
        $field = $request->validate([
            'name'     => 'required|string',
            'email'    => 'required|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::create([
            'name'     => $field['name'],
            'email'    => $field['email'],
            'password' => bcrypt($field['password']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'  => $user,
            'token' => $token,
        ];

        return response($response, 201);
    }

    /**
     * @OA\Post(
     ** path="/api/login",
     *   tags={"Auth"},
     *   summary="Login",
     *   operationId="login",
     *
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#app/Http/Requests")
     *      ),
     *
     *   @OA\Parameter(
     *      name="email",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="password",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *          type="string"
     *      )
     *   ),
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     **/

    public function login(Request $request)
    {
        $field = $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);

        //check email:
        $user = User::where('email', $field['email'])->first();

        //check password:
        if (!$user || !Hash::check($field['password'], $user->password)) {
            return response([
                'message' => 'bad creds',
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'  => $user,
            'token' => $token,
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged Out'
        ];
    }
}
