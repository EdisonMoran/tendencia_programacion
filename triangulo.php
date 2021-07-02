<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CRectangulo{
    private $largo; // atributos
    private $ancho;
    function CRectangulo(){
        // es la funcion del constructor 
        $this->largo = 0; // atributos
        $this->ancho = 0;
        
    }
    public function get_formulario(){ // metodos POST - GET - PUT - DELETE
        $html = '
                <form name= "transporte" action="" method="POST"> 
                    <table aling = "center" border = "1">
                        <tr>
                            <td colspan="2">RECTANGULO</td>
                        </tr>
                        <tr>
                            <td>Largo</td>
                            <td><input type="text" name="largo" size=4></td>
                        </tr>
                        <tr>
                            <td>Ancho</td>
                            <td><input type="text" name="ancho" size=4></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="guardar" value="Resolver"></center></td>
                        </tr>
                    </table>
                </form>';
        return $html;
    }
    public function area($largo,$ancho){ // metodos area
        $area = $largo * $ancho;
        return $area;
    }
    public function perimetro($largo,$ancho){ // método perimetro 
        $perimetro = ($largo*2)+($ancho*2);
        return $perimetro;
    }
    
    
}
