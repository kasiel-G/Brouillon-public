<?php
function router (){
    
    $uri = $_SERVER['REQUEST_URI'];
    echo $uri;

    if (isset($_GET) && !empty($_GET)) {
        $index = strpos($uri, '?', 0);
        $uri = substr($uri, 0, $index);
    }
    $page = $uri =="/" ? "home" : trim($uri, '/');

    $page_active ="../app/views/pages/".$page.".php";
    echo $page_active;

    
    if (!file_exists($page_active)) {
        $page_active = "../app/views/pages/not-found.php";
    }
    return $page_active;
}
?>