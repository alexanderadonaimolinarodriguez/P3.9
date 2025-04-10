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

    /**
     * Funcion para calcular el area de la cara frontal de la caja
     * @return float
     */
    private function areaFrontal(): float {
        return $this->ancho * $this->alto;
    }

    /**
     * Funcion para calcular el area de la parte superior de la caja
     * @return float
     */
    private function areaSuperior(): float {
        return $this->ancho * $this->largo;
    }

// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO

    /**
     * Funcion para calcular el area del lateral de la caja
     * @return float
     */
    private function areaLateral(): float {
        return $this->alto * $this->largo;
    }

    /**
     * Funcion para calcular el area total de la caja utilizando métodos privados
     * @return float
     */
    public function areaTotal(): float {
        return 2 * ($this->areaFrontal() + $this->areaSuperior() + $this->areaLateral());
    }
}

// Aplicación:
$miCaja = new Caja(5, 3, 2);
echo "Área total de la caja: " . $miCaja->areaTotal() . "<br>";
?>