<?php
    function linkRouter(){

        $uri = $_SERVER['REQUEST_URI'];
        if (isset($_GET) && !empty($_GET)) {
            $index = strpos($uri, '?', 0);
            $uri = substr($uri, 0, $index);
        }
        $page = $uri =="/" ? "home" : trim($uri, '/');

        if ($page == "home") {
            $links ="./public";
        }else{
            $links ="../../../public";
        }
        return $links;
    }
?>