<?php


class Core{ 
  static private $conf;

	static function init(){


            $conf=Config::getIns();

            Config::set('coche','cordoba');

            echo "<strong>Un dato introducido anteriormente</strong><br/>";

            if(Config::set('coche','cordoba') == true){
                  echo "Se ha almacenado correctamente!!<br/>";
            }else{
                  echo "Ya existe el registro. <br/>";

            }


            echo "<b>Recuperar un dato del array, inexistente de dentro</b><br/>";

            if(Config::get("coche") != null){

                  echo Config::get("coche");
            }else{

                  echo "Registro indexistente";
            }




	}
}