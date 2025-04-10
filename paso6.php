<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
class Caja {
    private float $ancho;
    private float $alto;
    private float $largo;

    public function __construct(float $ancho, float $alto, float $largo) {
        $this->ancho = $ancho;
        $this->alto = $alto;
        $this->largo = $largo;
    }

    public function __toString(): string {
        return "Caja [Ancho: {$this->ancho}, Alto: {$this->alto}, Largo: {$this->largo}]";
    }
}

// Aplicación:
$miCaja = new Caja(7, 4, 3);
echo $miCaja; // El método __toString() se llama automáticamente cuando el objeto 
// se usa en un contexto de cadena
?>