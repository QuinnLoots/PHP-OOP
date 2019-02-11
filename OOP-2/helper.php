<?php

class Html
{
    public function stylesheet($path)
    {
        return '<link rel =" stylesheet " href="'.$path.'">';
    }

    public function metaTag()
    {
        return' <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">';
    }

    public function imageLink($source)
    {
        return '<img src="'.$source.'">';
    }

    public function linkTag($link, $text)
    {
        return '<a href="'.$link.'">'.$text.'</a>';
    }

    public function js($jssource)
    {
        return '<script src="'.$jssource.'"></script>';
    }
}
