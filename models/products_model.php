<?php

class modelproduct{
    
    private function getdb(){
        $db = new PDO('mysql:host=localhost;'.'dbname=tpe_1;charset=utf8', 'root', '');
        return $db;
    }

    function get_products(){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    
    function get_productsdesc_column($column){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca ORDER BY $column desc");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsasc_column($column){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca ORDER BY $column asc");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function get_productsdesc(){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca ORDER BY equipo desc");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsasc(){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca ORDER BY equipo asc");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsfilter($filter){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function get_productsfilterdesc($filter){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca ORDER BY precio desc");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function get_productsfilterasc($filter){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca ORDER BY precio asc");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsfilterdescforcolumn($column, $filter){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca ORDER BY $column desc");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsfilterascforcolumn($column, $filter){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca ORDER BY $column asc");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productspage($offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca LIMIT 3 OFFSET $offset");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productspagedesc($offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca ORDER BY equipo desc LIMIT 3 OFFSET $offset");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productspageasc($offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca ORDER BY equipo asc LIMIT 3 OFFSET $offset");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsdesc_column_page($column, $offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca ORDER BY $column desc LIMIT 3 OFFSET $offset");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsasc_column_page($column, $offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE  producto.id_marca_fk = marca.id_marca ORDER BY $column asc LIMIT 3 OFFSET $offset");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsorderdesc_column_type_page($filter, $column, $offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca ORDER BY $column desc LIMIT 3 OFFSET $offset");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;

    }
    function get_productsorderasc_column_type_page($filter, $column, $offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca ORDER BY $column asc LIMIT 3 OFFSET $offset");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function get_productsdesc_filter_page($filter, $offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca ORDER BY precio desc LIMIT 3 OFFSET $offset");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function get_productsasc_filter_page($filter, $offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca ORDER BY precio asc LIMIT 3 OFFSET $offset");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function get_products_filter_page($filter, $offset){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE equipo = ? AND producto.id_marca_fk = marca.id_marca LIMIT 3 OFFSET $offset");
        $query->execute([$filter]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function get_product($id){
        $db = $this->getdb();
        $query = $db->prepare("SELECT id, equipo, talle, precio, version, nombre AS marca  FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca AND Id = ?");
        $query->execute([$id]);
        $product = $query->fetch(PDO::FETCH_OBJ);
        return $product;
    }
    
    function insert_product($team, $size, $price, $edition, $id_brand_fk){
        $db = $this->getdb();
        $query = $db->prepare("INSERT INTO producto (Equipo, Talle, Precio, version, Id_marca_fk) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$team, $size, $price, $edition, $id_brand_fk]);
        return $db->lastInsertId();
    }
    function delete_product($id){
        $db = $this->getdb();
        $query = $db->prepare("DELETE FROM producto where Id = ?");
        $query->execute([$id]);
    }
    
}