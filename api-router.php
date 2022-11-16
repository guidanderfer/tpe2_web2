<?php
require_once 'libs/Router.php';
require_once 'controllers/apiproductscontroller.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('products', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/:ID', 'GET', 'apiproductscontroller', 'getproduct');
$router->addRoute('products/orderby/:order', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/column/:column', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/filter/:filter', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/page/:page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/page/:page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/filter/:filter', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/filter', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/column/:column/page/:page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/column/:column/page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/column/:column/filter/:filter', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/column/:column/filter', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/filter/:filter/page/:page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/filter/:filter/page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/filter/:filter/page/:page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/filter/:filter/page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/column/:column/filter/:filter/page/:page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/column/:column/filter/:filter/page', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/orderby/:order/column', 'GET', 'apiproductscontroller', 'getproducts');
$router->addRoute('products/:ID', 'DELETE', 'apiproductscontroller', 'deleteproduct');
$router->addRoute('products', 'POST', 'apiproductscontroller', 'insertproduct');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


