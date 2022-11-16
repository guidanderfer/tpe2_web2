DOCUMENTACION

METODO GET:

    .Obtener todos los productos: 
        URI: http://localhost/web2/tpe2_web2/api/products

    .Obtener un producto en especifico: 
        URI: http://localhost/web2/tpe2_web2/api/products/ID
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/62

    .Obtener todos los productos ordenados desc o asc(por defecto lo ordena por equipos): 
        URI: http://localhost/web2/tpe2_web2/api/products/orderby/desc o asc
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/orderby/desc

    .Obtener todos los productos con un nombre de equipo en especifico:
        URI: http://localhost/web2/tpe2_web2/api/products/filter/nombre del equipo
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/filter/boca

    .Obtener todos los productos paginados:
        URI: http://localhost/web2/tpe2_web2/api/products/page/numero de pagina
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/page/1

    .Obtener todos los productos ordenados desc o asc por una columna en especifico: 
        URI: http://localhost/web2/tpe2_web2/api/products/orderby/desc o asc/column/columna de la db
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/orderby/desc/column/precio

    .Obtener todos los productos con un nombre de equipo en especifico ordenados desc o asc(lo ordena por precio): 
        URI: http://localhost/web2/tpe2_web2/api/products/orderby/desc o asc/filter/nombre del equipo
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/orderby/desc/filter/boca

    .Obtener todos los productos ordenados desc o asc(por defecto lo ordena por equipos) paginados:
        URI: http://localhost/web2/tpe2_web2/api/products/orderby/desc o asc/page/numero de pagina
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/orderby/desc/page/1

    .Obtener todos los productos con un nombre especifico ordenados desc o asc por una columna: 
        URI: http://localhost/web2/tpe2_web2/api/products/orderby/desc o asc/column/columna de la db/filter/nombre del equipo
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/orderby/desc/column/precio/filter/boca

    .Obtener todos los productos ordenados desc o asc por una columna especifica paginados: 
        URI: http://localhost/web2/tpe2_web2/api/products/orderby/desc o asc/column/columna de la db/page/numero de pagina
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/orderby/desc/column/precio/page/1

    .Obtener todos los productos con un nombre especifico ordenados desc o asc(lo ordena por precio) paginados
        URI: http://localhost/web2/tpe2_web2/api/products/orderby/desc o asc/filter/nombre de equipo/page/numero de pagina
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/orderby/desc/filter/boca/page/1

    .Obtener todos los productos con un nombre en especifico paginados:
        URI: http://localhost/web2/tpe2_web2/api/products/filter/nombre de equipo/page/numero de pagina
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/filter/boca/page/1

    .Obtener todos los productos con un nombre de equipo especifio ordenado desc o asc por una columna en especifico paginados
        URI: http://localhost/web2/tpe2_web2/api/products/orderby/desc o asc/column/columna de la db/filter/nombre de equipo/page/numero de pagina
        Ejemplo: http://localhost/web2/tpe2_web2/api/products/orderby/desc/column/precio/filter/boca/page/1

METODO DELETE:

    .Eliminar un producto en especifico:
       URI: http://localhost/web2/tpe2_web2/ api/products/ID
       Ejemplo: http://localhost/web2/tpe2_web2/api/products/62

METODO POST:

    .Agregar un producto
        URI: http://localhost/web2/tpe2_web2/api/products

        Ejemplo de contenido que se agregara 
        {
            "equipo": "boca",
            "talle": "L",
            "precio": "11700",
            "version": "Comercial",
            "id_marca_fk": "20"
        }