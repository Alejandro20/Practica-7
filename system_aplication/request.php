<?php
    class Request{
        
        static private $question=array();
        static private $cont;
        static private $accion;
        static private $tquestion;
        static private $parameter=array();
        static private $parameters;
        static function retrieve(){	
            self::$question =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$question;    
        }
        static function getCount(){	//cuenta los elementos del Array
            $tquestion = count(self::$question);
            if($tquestion == 2){
                echo "Controlador";
            }else{
               self::$cont = self::$question[1];
               return self::$cont; 
            } 
        }

        static function getParams(){	//agarra los parametos.
            $tquestion = count(self::$question);
            $cont3=0;
            if($tquestion >= 5){
                if($tquestion % 2 == 0){
    	            for($cont2=2;$cont2 < $tquestion;$cont2++){ 
    	            	self::$parameter[$cont3]= self::$question[$cont2];
           				$cont3++;  
    	            }
                    return self::$parameter;
            	}else{
            		echo "Parametros erroneos";
            	}
            }else{
                echo "Parameteros correctos";
            }
        }

          static function getAction(){  //Guarda la acción en una variable.
            $tquestion = count(self::$question);
            if($tquestion >= 4){
                self::$accion = self::$question[3];
                return self::$accion; 
            }else{
                echo "Accion";
            }  
        }
    }
?>