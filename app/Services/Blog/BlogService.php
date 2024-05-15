<?php

namespace App\Services\Blog;

use App\Models\Blog;

class BlogService
{
    public function getBlogs()
    {
        $blogs = Blog::all();

        return $blogs;
    }
}
