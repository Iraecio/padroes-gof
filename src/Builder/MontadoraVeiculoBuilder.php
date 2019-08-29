<?php

namespace iraecio\Builder;

class MontadoraVeiculoBuilder implements MontadoraBuilder {
    
    private $veiculo;

    public function montar(string $tipo, string $modelo):void 
    {
        switch ($tipo) {
            case "F": $this->veiculo = new Ferrari($modelo);
                break;
            case "J": $this->veiculo = new Jeep($modelo);
                break;
        }
    }
    
    public function getVeiculo(): Veiculo {
        return $this->veiculo;
    }

}