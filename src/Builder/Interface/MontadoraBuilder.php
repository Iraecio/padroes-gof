<?php

namespace iraecio\Builder;

interface MontadoraBuilder {
    public function montar(string $tipo, string $modelo): void;
    public function getVeiculo(): Veiculo;
}