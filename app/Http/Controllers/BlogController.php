<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;
use Exception;

class BlogController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $page = Page::find(6);
        $this->seoHelper->getSEO($page);

        $articles = Blog::latest()->active()->paginate(8);

        return view('pages.blog', compact('articles', 'page'));
    }

    /**
     * @throws Exception
     */
    public function show(Blog $blog)
    {
        $this->seoHelper->getSEO($blog);

        $articles = Blog::latest()->active()->where('id', '!=', $blog->id)->take(4)->get();

        return view('pages.blogDetail', compact('blog', 'articles'));
    }
}
