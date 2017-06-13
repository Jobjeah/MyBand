<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
$templateParser->assign('myTitle',$title);
$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');

// menu
$templateParser->display('menu.tpl');

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        $templateParser->display('home.tpl');
        break;
    case 'news':
        require_once 'model/getarticles.php';
        require_once 'model/getsidebar.php';
        $templateParser->assign('result_list',$result_list);
        $templateParser->assign('result_list2',$result_list2);
        $templateParser->display('news.tpl');

        break;
    case 'about':
        $templateParser->display('about.tpl');
        break;
    case 'terms':
        //contact
        $templateParser->display('terms.tpl');
        break;
    case 'contact':
        //contact
        $templateParser->display('contact.tpl');
        break;
}

// footer
$templateParser->display('footer.tpl');

?>
