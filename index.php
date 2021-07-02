<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ("htdocs/index"); // solamente inluimos el script de la clase
$rectangulo = new CRectangulo(); // instanciar la clase 
print_r($rectangulo->get_formulario()); //$rectangulo->get_formulario();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST[guardar])){
    echo "el area del cuadrado es igual a ". $rectangulo->area($_POST['largo'], $_POST['ancho']);
}