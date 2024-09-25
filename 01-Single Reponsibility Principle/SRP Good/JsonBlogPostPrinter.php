<?php

class JsonBlogPostPrinter implements PrintBlogPostInterface
{
    public function print(BlogPost $post)
    {
        return json_encode($post->getData();
    }
}