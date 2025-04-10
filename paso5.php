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

    public function cajaMasGrande(): Caja {
        return new Caja(
            $this->ancho * 1.25,
            $this->alto * 1.25,
            $this->largo * 1.25
        );
    }

    public function cajaMasPequena(): Caja {
        return new Caja(
            $this->ancho * 0.75,
            $this->alto * 0.75,
            $this->largo * 0.75
        );
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

// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
// Aplicación:
$miCaja = new Caja(4, 2, 6);
$cajaGrande = $miCaja->cajaMasGrande();
$cajaPequena = $miCaja->cajaMasPequena();

echo "Dimensiones de la caja original: " . $miCaja->getAncho() . " x " . 
$miCaja->getAlto() . " x " . $miCaja->getLargo() . "<br>";
echo "Dimensiones de la caja más grande: " . $cajaGrande->getAncho() . " x " . 
$cajaGrande->getAlto() . " x " . $cajaGrande->getLargo() . "<br>";
echo "Dimensiones de la caja más pequeña: " . $cajaPequena->getAncho() . " x " . 
$cajaPequena->getAlto() . " x " . $cajaPequena->getLargo() . "<br>";
?>