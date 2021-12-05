<?php
    $productos=unserialize($_COOKIE['producto']??'');

    if(is_array($productos)==false)$productos=array();
    $siYaEstaProducto=false;
    foreach ($productos as $key => $value) {
        if($value['id']==$_REQUEST['id']){
            $productos[$key]['cantidad']=$productos[$key]['cantidad']+$_REQUEST['cantidad'];
            $siYaEstaProducto=true;
        }
    }
    if($siYaEstaProducto==false){
        $nuevo=array(
            'id'=>$_REQUEST['id'],
            'nombre'=>$_REQUEST['nombre'],
            'direccionImagen'=>$_REQUEST['direccionImagen'],
            'cantidad'=>$_REQUEST['cantidad'],
        );
        array_push($productos,$nuevo);
    }
    setcookie('producto',serialize($productos));
    echo json_encode($productos);



?>
