<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use LaravelIdea\Helper\App\Models\_IH_Post_C;

class PostApiController extends Controller
{
    protected Post $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get List Posts
     * @OA\Get (
     *     path="/api/v1/posts",
     *     tags={"Posts"},
     *     security={"apiAuth"={}, },
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *              @OA\Property(property="id",type="number",example="1"),
     *               @OA\Property(property="title", type="string", example="example title"),
     *               @OA\Property(property="slug", type="string", example="slug1",),
     *               @OA\Property(property="like", type="int", example="12", ),
     *               @OA\Property(property="content", type="string", example="example content"),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *         )
     *     )
     * )
     */
    public function index(Post $posts)
    {
        $posts = $this->post->getPost();
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
     * Create Posts
     * @OA\Post (
     *     path="/api/v1/posts",
     *     tags={"Posts"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(property="title", type="string"),
     *                      @OA\Property(property="slug", type="string"),
     *                      @OA\Property(property="like", type="int"),
     *                      @OA\Property(property="content",type="string")
     *                 ),
     *                 example={
     *                     "title":"",
     *                     "slug": "",
     *                     "like": "",
     *                     "content":""
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *               @OA\Property(property="id", type="number",example="1"),
     *               @OA\Property(property="title", type="string", example="example title"),
     *               @OA\Property(property="slug", type="string", example="slug1",),
     *               @OA\Property(property="like", type="int", example="12", ),
     *               @OA\Property(property="content", type="string", example="example content"),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *          ),
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="invalid",
     *          @OA\JsonContent(
     *              @OA\Property(property="msg", type="string", example="fail"),
     *          )
     *      )
     * )
     */

    public function store(CreatePostRequest $createPostRequest)
    {
        $createPostRequest->validated();

        try {
            $post = Post::create($createPostRequest->all());
            return response()->json($post);
        } catch (ModelNotFoundException $exception) {
            return response()->json(["message" => $exception->getMessage()], 404);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return _IH_Post_C|Post|Post[]
     */

    /**
     * Get Detail Posts
     * @OA\Get (
     *     path="/api/v1/posts/{id}",
     *     tags={"Posts"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *               @OA\Property(property="id", type="number",example="1"),
     *               @OA\Property(property="title", type="string", example="example title"),
     *               @OA\Property(property="slug", type="string", example="slug1",),
     *               @OA\Property(property="like", type="int", example="12", ),
     *               @OA\Property(property="content", type="string", example="example content"),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *         )
     *     )
     * )
     */

    public function show($id)
    {
        $post = $this->post->getPostBy($id);
        if ($post !== null) {
            return response()->json($post);
        }
        return response()->json(["message" => "Post " . $id . " is not found!"]);
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

    /**
     * Update Posts
     * @OA\Put (
     *     path="/api/v1/posts/{id}",
     *     tags={"Posts"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(property="title", type="string"),
     *                      @OA\Property(property="slug", type="string"),
     *                      @OA\Property(property="like", type="int"),
     *                      @OA\Property(property="content",type="string")
     *                 ),
     *                 example={
     *                     "title":" ",
     *                     "slug": " ",
     *                     "like": " ",
     *                     "content":" "
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="id", type="number",example="1"),
     *               @OA\Property(property="title", type="string", example="example title"),
     *               @OA\Property(property="slug", type="string", example="slug1",),
     *               @OA\Property(property="like", type="int", example="12", ),
     *               @OA\Property(property="content", type="string", example="example content"),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *          )
     *      )
     * )
     */
    public function update(Request $request, $id)
    {
        try {
            $post = $this->post->updatePost($id, $request->all());
            return response()->json($post);
        } catch (ModelNotFoundException $exception) {
            return response()->json(["message" => $exception->getMessage()], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return array
     */

    /**
     * Delete Posts
     * @OA\Delete (
     *     path="/api/v1/posts/{id}",
     *     tags={"Posts"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(property="msg", type="string", example="delete posts success")
     *         )
     *     )
     * )
     */

    public function destroy($id)
    {
        try {
            $post = $this->post->deletePost($id);
            return response()->json(['message' => " Post " . $id . " has benn deleted"]);
        } catch (ModelNotFoundException $exception) {
            return response()->json(["message" => $exception->getMessage()], 404);
        }
    }
}
