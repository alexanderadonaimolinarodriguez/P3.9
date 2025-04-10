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
     * Funcion para calcular el volumen de la caja
     * @return float
     */
    public function volumen(): float {
        return $this->ancho * $this->alto * $this->largo;
    }

    // Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
    /**
     * Funcion para calcular el area total de la caja
     * @return float
     */
    public function areaTotal(): float {
        return 2 * (
            $this->ancho * $this->alto + 
            $this->ancho * $this->largo + 
            $this->alto * $this->largo);
    }
}

// Aplicación:
$miCaja = new Caja(5, 3, 2);
echo "Volumen de la caja: " . $miCaja->volumen() . "<br>";
echo "Área total de la caja: " . $miCaja->areaTotal() . "<br>";
?>