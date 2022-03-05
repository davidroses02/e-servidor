<?php

namespace App\Controllers;

use App\Models\Blog;


class BlogController extends BaseController
{

    public function indexAction()
    {
        $posts = Blog::all();
        var_dump($posts);
        return $this->renderHTML('Page/index.html.twig', [
            'posts' => $posts
        ]);
    }

    public function showBlogAction($request)
    {
        $uri =  explode('/', $request->getRequestTarget());
        $id = end($uri);
        
        $blog = Blog::find($id);
        $comments = Blog::find($id)->comments;
        return $this->renderHTML('Page/showBlog.html.twig', [
            'blog'=>$blog,
            'comments' => $comments
        ]);

    }
}
