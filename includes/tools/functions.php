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
                case '/contact':
                    ob_start();
                    include __REALPATH__ . '/includes/contact.php';
                    $content = ob_get_clean();
                    break;
                case '/articles':
                    ob_start();
                    include __REALPATH__ . '/includes/articles.php';
                    $content = ob_get_clean();
                    break;
                case '/cgu':
                    ob_start();
                    include __REALPATH__ . '/includes/cgu.php';
                    $content = ob_get_clean();
                    break;
                case '/legal':
                    ob_start();
                    include __REALPATH__ . '/includes/legal.php';
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
        $id = str_replace('-', ' ', $segments[2]);
        $article = getArticle($id);
        ob_start();
        include __REALPATH__ . '/includes/common/article.php';
        return ob_get_clean();
    }
}

if (!function_exists('connexion')) {

    function connexion()
    {
        $host = 'localhost';                //myHostAdress
        $dbuser = 'root';           //myUserName
        $dbpw = '';                //myPassword
        $dbname = 'fred';     //myDatabase

        $pdoReqArg1 = "mysql:host=". $host .";dbname=". $dbname .";";
        $pdoReqArg2 = $dbuser;
        $pdoReqArg3 = $dbpw;

        try {

            $db = new \PDO($pdoReqArg1, $pdoReqArg2, $pdoReqArg3);
            $db->setAttribute(\PDO::ATTR_CASE, \PDO::CASE_LOWER);
            $db->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
            $db->exec("SET NAMES 'utf8'");

            return $db;

        } catch(\PDOException $e) {

            $errorMessage = $e->getMessage();
        }
    }
}

if(!function_exists('getArticles'))
{
    function getArticles()
    {
        $db  = connexion();
        $query = "SELECT * FROM articles";

        $request = $db->prepare($query);
        $request->execute();

        $articles = $request->fetchAll(\PDO::FETCH_ASSOC);
        return $articles;
    }
}

if(!function_exists('getArticle'))
{
    function getArticle($id)
    {
        $db  = connexion();
        $query = "SELECT * FROM articles WHERE id = ".$id." LIMIT 1";

        $request = $db->prepare($query);
        $request->execute();

        $article = $request->fetchAll(\PDO::FETCH_ASSOC);
        return $article[0];
    }
}