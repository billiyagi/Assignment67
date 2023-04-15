<?php

class PersegiPanjang
{
    protected $lebar, $panjang;

    public function __construct($lebar, $panjang)
    {
        $this->lebar = $lebar;
        $this->panjang = $panjang;
    }

    public function getLuasPersegiPanjang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function getKelilingPersegiPanjang()
    {
        $keliling = 2 * ($this->panjang * $this->lebar);
        return $keliling;
    }
}
