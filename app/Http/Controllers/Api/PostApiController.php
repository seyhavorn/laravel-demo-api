<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use LaravelIdea\Helper\App\Models\_IH_Post_C;

class PostApiController extends Controller
{
    /**
     * Get List Posts
     * @OA\Get (
     *     path="/api/v1/posts",
     *     tags={"Posts"},
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="title",
     *                         type="string",
     *                         example="example title"
     *                     ),
     *                      @OA\Property(
     *                      property="slug",
     *                      type="string",
     *                      example="slug1",
     *                      ),
     *                      @OA\Property(
     *                      property="like",
     *                      type="int",
     *                      example="12",
     *                      ),
     *                     @OA\Property(
     *                         property="content",
     *                         type="string",
     *                         example="example content"
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="string",
     *                         example="2021-12-11T09:25:53.000000Z"
     *                     ),
     *                     @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2021-12-11T09:25:53.000000Z"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index(Post $posts)
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */

    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */

    /**
     * @OA\Post(
     *      path="/api/v1/posts",
     *      operationId="storePosts",
     *      tags={"Posts"},
     *      summary="Store new posts",
     *      description="Returns posts data",
     *      @OA\RequestBody(
     *          required=true,
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required',
            'slug'    => 'required',
            'like'    => 'required',
            'content' => 'required',
        ]);
        $post = Post::create($request->all());
        return $post;
//        return back()->with('message', 'Post has been created');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return _IH_Post_C|Post|Post[]
     */
    public function show($id)
    {
        return Post::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Post $post) {}

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     * @return _IH_Post_C|Post|Post[]
     */
    public function update(Request $request, $id)
    {
        $request->validate(['title'   => 'required|string',
                            'slug'    => 'required|string',
                            'like'    => 'required',
                            'content' => 'nullable',

        ]);
        $post = Post::find($id);
        $post->update($request->all());

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return array
     */
    public function destroy($id)
    {
        $success = Post::destroy($id);

        return [
            'success' => $success,
            'status'  => 'Post has been delete',
        ];
    }
}
