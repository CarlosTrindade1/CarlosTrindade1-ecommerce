<?php 
    use \Hcode\Model\User;
    use \Hcode\Model\Category;

    $app->get('/', function() {
    
        $page = new Hcode\Page();
    
        $page->setTpl("index");
    
    });
?>