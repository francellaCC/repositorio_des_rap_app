<?php
    class Gasto{
       private $descripcion;
        private  $monto;
        
        public function __construct($descripcion,$monto){
                $this->descripcion = $descripcion;
                $this->monto = $monto;
        }

        public function setMonto($monto){
            $this->monto = $monto;
        }
        public function getMonto(){
            return $this->monto;
        }

        public function setDescription($descripcion){
            $this->descripcion = $descripcion;
        }
        public function getDescription(){
            return $this->descripcion;
        }
    }

    class RegistroGastos{
        private $listGastos;

        public function __construct(){
            $this->listGastos = array();
        }

        public function agregarGastos($description, $monton){
            $gasto = new Gasto($description, $monton);
            $this->listGastos[] =$gasto;
        }

        public function ObtenerGasto(){
            return $this->listGastos;
        }

        public function ObtenerTotalGastos(){
            $total=0;
            foreach($this->listGastos as $gasto){
                $total += $gasto->getMonto();
            }

            return $total;
        }

        
    }

    $registroGasto = new RegistroGastos();
    $registroGasto->agregarGastos('Lenovo flex 5', 350000);
    $registroGasto->agregarGastos('Lampara de mesa', 10000);
    $registroGasto = $registroGasto->ObtenerGasto();
    echo 'Total : ' .$registroGasto->ObtenerTotalGastos() . '<br>';
    foreach($registroGasto as $gasto){
        echo $gasto->getDescription() . 'Monto : ' .$gasto->getMonto();
    }
