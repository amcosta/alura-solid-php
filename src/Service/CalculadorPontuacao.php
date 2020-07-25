<?php

namespace Alura\Solid\Service;

use Alura\Solid\Contract\IPontuacao;

class CalculadorPontuacao
{
    public function recuperarPontuacao(IPontuacao $conteudo)
    {
        return $conteudo->pontuacao();
    }
}
