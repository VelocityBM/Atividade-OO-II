<?php
class Vinho
{
    private $nome;
    private $tipo;
    private $preco;
    private $safra;
//set + get
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setSafra($safra)
    {
        $this->safra = $safra;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getSafra()
    {
        return $this->safra;
    }

    public function mostrarVinho()
    {
        return "Nome: " . $this->getNome() . "<br>" .
            "Tipo: " . $this->getTipo() . "<br>" .
            "Preço: " . $this->getPreco() . "<br>" .
            "Safra: " . $this->getSafra() . "<br>";
    }

    public function verificarPreco($preco)
    {
        return $preco < 25;
    }
}
