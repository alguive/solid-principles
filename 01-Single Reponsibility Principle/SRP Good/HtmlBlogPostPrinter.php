<?php

class HtmlBlogPostPrinter implements PrintBlogPostInterface
{
    public function print(BlogPost $post)
    {
        return `My HTML code`;
    }
}