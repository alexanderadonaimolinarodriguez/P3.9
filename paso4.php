<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
class Caja {
    private float $ancho;
    private float $alto;
    private float $largo;

    /**
     * @param float $ancho
     * @param float $alto
     * @param float $largo
     */
    public function __construct(float $ancho, float $alto, float $largo) {
        $this->ancho = $ancho;
        $this->alto = $alto;
        $this->largo = $largo;
    }

    /**
     * Método estático para crear una nueva Caja con las mismas dimensiones que otra Caja.
     * @param Caja $otraCaja
     * @return Caja
     */
    public static function copiarCaja(Caja $otraCaja): Caja {
        return new Caja(
            $otraCaja->getAncho(),
            $otraCaja->getAlto(),
            $otraCaja->getLargo()
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
$cajaOriginal = new Caja(10, 5, 3);
$cajaCopia = Caja::copiarCaja($cajaOriginal);

echo "Dimensiones de la caja original: " . $cajaOriginal->getAncho() . " x " . 
$cajaOriginal->getAlto() . " x " . $cajaOriginal->getLargo() . "<br>";
echo "Dimensiones de la caja copia: " . $cajaCopia->getAncho() . " x " . 
$cajaCopia->getAlto() . " x " . $cajaCopia->getLargo() . "<br>";
?>