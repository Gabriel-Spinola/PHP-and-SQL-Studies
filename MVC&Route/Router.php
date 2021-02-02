<?php

class Router {
    /**
     * @return Route
    */
    public static function route(string $path, mixed $arg) {
        $url = @$_GET['url'];

        if ($url == $path) {
            $arg();
            die;
        }

        $path = explode('/', $path);
        $url = explode('/', @$_GET['url']);

        $ok = true;
        $couple = [];

        if (count($path) == count($url)) {
            foreach ($path as $key => $row) {
                if ($row == '?') {
                    $couple[$key] = $url[$key];
                } else if ($url[$key] != $row) {
                    $ok = false;

                    break;
                }

                if ($ok) {
                    $arg($couple);

                    die;
                }
            }
        }
    }
}