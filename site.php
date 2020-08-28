<?php 
    use \Hcode\Model\User;
    use \Hcode\Model\Category;
    use \Hcode\Model\Product;

    $app->get('/', function() {
        $products = Product::listAll();
    
        $page = new Hcode\Page();
    
        $page->setTpl("index", [
            "products"=>Product::checkList($products)
        ]);
    
    });
?>