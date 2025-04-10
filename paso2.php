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

    public function getAncho(): float {
        return $this->ancho;
    }

    public function getAlto(): float {
        return $this->alto;
    }

    public function getLargo(): float {
        return $this->largo;
    }
}

// Aplicación:
$miCaja = new Caja(5, 3, 2);
echo "Ancho de la caja: " . $miCaja->getAncho() . "<br>";
echo "Alto de la caja: " . $miCaja->getAlto() . "<br>";
echo "Largo de la caja: " . $miCaja->getLargo() . "<br>";
?>