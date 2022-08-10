<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'title', 'slug', 'like', 'content',
    ];

    /**
     * @return Post[]|Collection
     */

    public function getPost(): array|Collection
    {
        return $this::all();
    }

    /**
     * @param array $attributes
     * @return Post
     */

    public function createPost(array $attributes)
    {
        $post = new self();
        $post->title = $attributes["title"];
        $post->slug = $attributes["slug"];
        $post->like = $attributes["like"];
        $post->content = $attributes["content"];
        $post->save();
        return $post;
    }

    /**
     * @param $id
     * @return Post
     */
    public function getPostBy($id)
    {
        return $this->where("id", $id)->first();
    }

    /**
     * @param int   $id
     * @param array $attributes
     * @return Post
     */
    public function updatePost(int $id, array $attributes)
    {
        $post = $this->getPostBy($id);
        if ($post == null) {
            throw new ModelNotFoundException("Post " . $id . " is not fund!");
        }

        $post->title = $attributes["title"];
        $post->slug = $attributes["slug"];
        $post->like = $attributes["like"];
        $post->content = $attributes["content"];
        $post->save();
        return $post;
    }

    /**
     * @param int $id
     * @return mixed
     */

    public function deletePost(int $id)
    {
        $post = $this->getPostBy($id);
        if ($post == null) {
            throw  new ModelNotFoundException("Post " . $id . " is not found!");
        }

        return $post->delete();

    }
}
