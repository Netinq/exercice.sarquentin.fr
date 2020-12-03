<?php

if (!function_exists('get_page')) {

    function get_page($uri, $segments)
    {
        if (!isset($segments[2])) {

            switch ($uri) {

                case '/':
                    ob_start();
                    include __REALPATH__ . '/includes/home.php';
                    $content = ob_get_clean();
                    break;

                case '/articles':
                    ob_start();
                    include __REALPATH__ . '/includes/articles.php';
                    $content = ob_get_clean();
                    break;
    
                default:
                    ob_start();
                    include __REALPATH__ . '/includes/404.php';
                    $content = ob_get_clean();
                    http_response_code(404);
                    break;
            }

        } else {

            if (blog_dispatcher($segments) == false) {

                ob_start();
                include __REALPATH__ . '/includes/404.php';
                $content = ob_get_clean();
                http_response_code(404);

            } else {

                switch ($segments[1]) {

                    case 'article':
                        return blog_dispatcher($segments);
                        break;
    
                    default:
                        ob_start();
                        include __REALPATH__ . '/includes/404.php';
                        $content = ob_get_clean();
                        http_response_code(404);
                        break;
                }
            }
        }

        return $content;
    }
}

if (!function_exists('blog_dispatcher')) {
    
    function blog_dispatcher($segments)
    {
        $name = str_replace('-', ' ', $segments[2]);
        $title = ucfirst($name);
        ob_start();
        include __REALPATH__ . '/includes/common/article.php';
        return ob_get_clean();
    }
}