<?php
require_once 'models/products_model.php';
require_once 'views/apiview.php';

class apiproductscontroller{
    private $model;
    private $view;
    
    function __construct() {
        $this->model = new modelproduct();
        $this->view = new apiview();
    }

    function getproducts($params = null) { 
        if (!empty($params[':order']) && empty($params[':column']) && empty($params[':filter']) && empty($params[':page']) ) {
            $order = $params[':order'];
            if ($order == 'DESC' || $order == 'desc') {
                $products = $this->model->get_productsdesc();
                return $this->view->response($products, 200);
                        
            } elseif ($order == 'ASC' || $order == 'asc') {
                $products = $this->model->get_productsasc();
                return $this->view->response($products, 200);  
            } else {
                return $this->view->response("Ruta incorrecta", 400);
            }
        } 

        if (!empty($params[':order']) && !empty($params[':column']) && empty($params[':filter']) && empty($params[':page'])) {
            $order = $params[':order'];
            $column = $params[':column'];
            if ($order == 'DESC' || $order == 'desc') {
                try {
                    $products = $this->model->get_productsdesc_column($column);
                    return $this->view->response($products, 200);
                } catch (\Throwable $th) {
                    return $this->view->response("Ruta incorrecta", 400);
                }
            } elseif ($order == 'ASC' || $order == 'asc') {
                try {
                    $products = $this->model->get_productsasc_column($column);
                    return $this->view->response($products, 200);
                } catch (\Throwable $th) {
                    return $this->view->response("Ruta incorrecta", 400);
                }     
            }  else {
                return $this->view->response("Ruta incorrecta", 400);
            }
        } 
        if (!empty($params[':order']) && !empty($params[':column']) && !empty($params[':filter']) && empty($params[':page'])) {
            $order = $params[':order'];
            $column = $params[':column'];
            $filter = $params[':filter'];
            if ($order == 'DESC' || $order == 'desc') {
                try {
                    $products = $this->model->get_productsfilterdescforcolumn($column,$filter);
                    if ($products) {
                        return $this->view->response($products, 200);
                    } else {
                        return $this->view->response("No hay ningun equipo con este nombre", 404);
                    }
                } catch (\Throwable $th) {
                    return $this->view->response("Ruta incorrecta", 400);
                }
            } elseif ($order == 'ASC' || $order == 'asc') {
                try {
                    $products = $this->model->get_productsfilterascforcolumn($column, $filter);
                    if ($products) {
                        return $this->view->response($products, 200);
                    } else {
                        return $this->view->response("No hay ningun equipo con este nombre", 404);
                    }
                } catch (\Throwable $th) {
                    return $this->view->response("Ruta incorrecta", 400);
                }
            } else {
                return $this->view->response("Ruta incorrecta", 400);
            }
        }
        if (!empty($params[':order']) && !empty($params[':column']) && !empty($params[':filter']) && !empty($params[':page'])){
            $order = $params[':order'];
            $column = $params[':column'];
            $filter = $params[':filter'];
            $page = $params[':page'];
            $quantity = 3;
            $offset = ($page - 1)* $quantity;
            if ($order == 'DESC' || $order == 'desc') {
                try {
                    $products = $this->model->get_productsorderdesc_column_type_page($filter, $column, $offset);
                    if ($products) {
                        return $this->view->response($products, 200);
                    } else {
                        return $this->view->response("No hay ningun equipo con este nombre", 404);
                    }
                } catch (\Throwable $th) {
                    return $this->view->response("Ruta incorrecta", 400);
                }
            } elseif ($order == 'ASC' || $order == 'asc') {
                try {
                    $products = $this->model->get_productsorderasc_column_type_page($filter, $column, $offset);
                    if ($products) {
                        return $this->view->response($products, 200);
                    } else {
                        return $this->view->response("No hay ningun equipo con este nombre", 404);
                    }
                } catch (\Throwable $th) {
                    return $this->view->response("Ruta incorrecta", 400);
                }
            } else {
                return $this->view->response("Ruta incorrecta", 400);
            }
        }

        if (empty($params[':order']) && empty($params[':column']) && !empty($params[':filter']) && empty($params[':page'])) {
            $filter = $params[':filter'];
            $products = $this->model->get_productsfilter($filter);
            if ($products) {
                return $this->view->response($products, 200);
            } else {
                return $this->view->response("No hay ningun equipo con este nombre", 404);
            }

        }
        if (!empty($params[':order']) && empty($params[':column']) && !empty($params[':filter']) && empty($params[':page'])) {
            $order = $params[':order'];
            $filter = $params[':filter'];
            if ($order == 'DESC' || $order == 'desc') {             
                $products = $this->model->get_productsfilterdesc($filter);
                if ($products) {
                    return $this->view->response($products, 200);
                } else {
                    return $this->view->response("No hay ningun equipo con este nombre", 404);
                }
                
            } elseif ($order == 'ASC' || $order == 'asc') {
                $products = $this->model->get_productsfilterasc($filter);
                if ($products) {
                    return $this->view->response($products, 200);
                } else {
                    return $this->view->response("No hay ningun equipo con este nombre", 404);
                }
                
            } else {
                return $this->view->response("Ruta incorrecta", 400);
            }
        }

        if (!empty($params[':order']) && empty($params[':column']) && !empty($params[':filter']) && !empty($params[':page'])) {
            $order = $params[':order'];
            $filter = $params[':filter'];
            $page = $params[':page'];
            $quantity = 3;
            $offset = ($page - 1)* $quantity;
            if ($order == 'DESC' || $order == 'desc') {
                $products = $this->model->get_productsdesc_filter_page($filter, $offset);
                if ($products) {
                    return $this->view->response($products, 200);
                } else {
                    return $this->view->response("No hay ningun equipo con este nombre", 404);
                }
                
            } elseif ($order == 'ASC' || $order == 'asc') {
                $products = $this->model->get_productsasc_filter_page($filter, $offset);
                if ($products) {
                    return $this->view->response($products, 200);
                } else {
                    return $this->view->response("No hay ningun equipo con este nombre", 404);
                }
                
            } else {
                return $this->view->response("Ruta incorrecta", 400);
            }
        }

        if (empty($params[':order']) && empty($params[':column']) && !empty($params[':filter']) && !empty($params[':page'])) {
            $filter = $params[':filter'];
            $page = $params[':page'];
            $quantity = 3;
            $offset = ($page - 1)* $quantity;
            $products = $this->model->get_products_filter_page($filter, $offset);
            if ($products) {
                return $this->view->response($products, 200);
            } else {
                return $this->view->response("No hay ningun equipo con este nombre", 404);
            }

        }
        if (empty($params[':order']) && empty($params[':column']) && empty($params[':filter']) && !empty($params[':page'])) {
            $page = $params[':page'];
            $quantity = 3;
            $offset = ($page - 1)* $quantity;
            $products = $this->model->get_productspage($offset);
            return $this->view->response($products, 200);
        }
        if (!empty($params[':order']) && empty($params[':column']) && empty($params[':filter']) && !empty($params[':page'])) {
            $order = $params[':order'];
            $page = $params[':page'];
            $quantity = 3;
            $offset = ($page - 1)* $quantity;
            if ($order == 'DESC' || $order == 'desc') {
                $products = $this->model->get_productspagedesc($offset);
                return $this->view->response($products, 200);
            } elseif ($order == 'ASC' || $order == 'asc') {
                $products = $this->model->get_productspageasc($offset);
                return $this->view->response($products, 200);
            } else {
                return $this->view->response("Ruta incorrecta", 400);
            }
        }
        if (!empty($params[':order']) && !empty($params[':column']) && empty($params[':filter']) && !empty($params[':page'])) {
            $order = $params[':order'];
            $column = $params[':column'];
            $page = $params[':page'];
            $quantity = 3;
            $offset = ($page - 1)* $quantity;
            if ($order == 'DESC' || $order == 'desc') {
                try {
                    $products = $this->model->get_productsdesc_column_page($column, $offset);
                    return $this->view->response($products, 200);
                } catch (\Throwable $th) {
                    return $this->view->response("Ruta incorrecta", 400);
                }
            } elseif ($order == 'ASC' || $order == 'asc') {
                try {
                    $products = $this->model->get_productsasc_column_page($column, $offset);                    
                    return $this->view->response($products, 200);                   
                } catch (\Throwable $th) {
                    return $this->view->response("Ruta incorrecta", 400);
                }
            } else {
                return $this->view->response("Ruta incorrecta", 400);
            }
        }

        if (empty($params[':order']) && empty($params[':column']) && empty($params[':filter']) && empty($params[':page'])) {           
            try {
                $products = $this->model->get_products();
                return $this->view->response($products, 200);
            } catch (\Throwable $th) {
                return $this->view->response("Ruta incorrecta", 400);
            }
            
        }
    }

    function getproduct($params = null) {
        $idproduct = $params[':ID'];
        $product = $this->model->get_product($idproduct);
        if ($product) {
            return $this->view->response($product, 200);
        } else {
            return $this->view->response("El producto con el id=$idproduct no existe", 404);
        } 
    }

    function deleteproduct($params = null) {
        $idproduct = $params[':ID'];
        $product = $this->model->get_product($idproduct);
        if ($product) {
            $this->model->delete_product($idproduct);
            return $this->view->response("El producto con id=$idproduct fue borrada", 200);
        } else {
            return $this->view->response("El producto con el id=$idproduct no existe", 404);
        }
    }

    function insertproduct($params = null) {
        $body = $this->getbody();
        try {
        $this->model->insert_product($body->equipo, $body->talle, $body->precio, $body->version, $body->id_marca_fk);
        $this->view->response("El producto se inserto con exito", 201);
        } catch (Exception $e) {
            $this->view->response("Solicitud invalida", 400);
        }  
    }

    private function getbody() {
        $bodystring = file_get_contents("php://input");
        return json_decode($bodystring);
    }
}   
