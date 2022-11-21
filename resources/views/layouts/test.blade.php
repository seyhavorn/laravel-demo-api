/**
//     * @OA\Post (
//     *     path="/api/v1/posts",
//     *     tags={"Posts"},
//     *  @OA\Parameter(
//     *      name="title",
//     *      in="query",
//     *      required=true,
//     *      @OA\Schema(
//     *           type="string"
//     *      )
//     *   ),
//     *  @OA\Parameter(
//     *      name="slug",
//     *      in="query",
//     *      required=true,
//     *      @OA\Schema(
//     *           type="string"
//     *      )
//     *   ),
//     *  @OA\Parameter(
//     *      name="like",
//     *      in="query",
//     *      @OA\Schema(
//     *           type="integer"
//     *      )
//     *   ),
//     *  @OA\Parameter(
//     *      name="content",
//     *      in="query",
//     *      required=true,
//     *      @OA\Schema(
//     *           type="string"
//     *      )
//     *   ),
//     *      @OA\Response(
//     *          response=200,
//     *          description="success",
//     *          @OA\JsonContent(
//     *               @OA\Property(property="id", type="number",example="1"),
//     *               @OA\Property(property="title", type="string", example="example title"),
//     *               @OA\Property(property="slug", type="string", example="slug1",),
//     *               @OA\Property(property="like", type="int", example="12", ),
//     *               @OA\Property(property="content", type="string", example="example content"),
//     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
//     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
//     *          ),
//     *      ),
//     *      @OA\Response(
//     *          response=400,
//     *          description="invalid",
//     *          @OA\JsonContent(
//     *              @OA\Property(property="msg", type="string", example="fail"),
//     *          )
//     *      )
//     * )
//     */
