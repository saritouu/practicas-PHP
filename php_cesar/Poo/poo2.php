<?php  
    class Persona{
        private $nombre;
        private $telefono;

        public function __construct($nom, $tel){
            $this->nombre = $nom;
            $this->telefono = $tel;
        }

        public function obtener_datos(){
            return "-Nombre: ".$this->nombre." <br>-Telefono: ".$this->telefono;
        }
    }
    class Alumno extends Persona{
        private $grado;
        private $turno;

        public function __construct($nom, $tel, $grado, $turno){
            parent::__construct($nom, $tel);
            $this->grado = $grado;
            $this->turno = $turno;
        }

        public function obtener_datos(){
            return parent::obtener_datos()." <br>-Grado: ".$this->grado." <br>-Turno: ". $this->turno;
        }
    }

?>
<h3>ALUMNO</h3>
<?php
    $alum1 = new Alumno("Camila.","0961123466.","Tercero - Nivel Medio.", "Tarde.");
?>


<?php
    echo $alum1->obtener_datos();
?>