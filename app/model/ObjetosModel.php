<?php
    
    class ObjetosModel {
        
        private $DataBase;
        //private $Table = 'objetos';


        public function __construct(){
            $connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
        }

        /* ---------------------------------METHOD----------------------------------- */      

        public function search($nombre){
	    	try {
	    		$sql = "SELECT * FROM objetos WHERE descripcion LIKE ?";
	    		$query = $this->DataBase->prepare($sql);
	    		$data = ["%".$nombre."%"];
	    		$query->execute($data);
	    		$infoObjeto = $query->fetchAll();
	    		$response = ['status' => 1, 'objetos' => $infoObjeto];
	    	} catch (Exception $e) {	
	    		$response = ['status' => 0, 'error' => $e];	
	    	}
	    	return $response;
        }
        
        /* public function ViewObject () {
            try {
                $sql = "SELECT experiencias.nombre_contratante, objetos.* FROM objetos, experiencias WHERE experiencias.id_obj_experiencia=objetos.id_objeto ";
                $query = $this->DataBase->prepare($sql);
                $query->execute();
                $data = $query->fetchAll();
                $response = ['status' => 1, 'objetos' => $data];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        } */

        public function Palabrita($data){
            try {
                $sql = "SELECT * FROM experiencias WHERE descripcion like ?";
                $query = $this->DataBase->prepare($sql);
                $dato = ["%".$data."%"];
                $query->execute($dato);
                $info = $query->fetchAll();
                $response = ['status' => 1, 'desc' => $info];
                
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];	
            }
            return $response;
        }
        

    }
?>