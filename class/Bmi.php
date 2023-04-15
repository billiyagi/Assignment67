<?php

class Bmi
{
    protected $weight, $height, $bmi;

    public function __construct($weight, $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    public function getBmiResult()
    {
        $bmi = $this->weight / (($this->height / 100) * ($this->height / 100));
        $this->bmi = number_format($bmi);
        return number_format($bmi);
    }

    public function getBmiStatus()
    {
        // Kurus
        if ($this->bmi <= 18.5) {
            return ['Berat Kurang', 'Kurus'];

            // Normal
        } elseif ($this->bmi >= 18.5 && $this->bmi <= 24.9) {
            return ['Berat Normal', 'Ideal'];

            // Gemuk
        } elseif ($this->bmi >= 25.0 && $this->bmi <= 29.9) {
            return ['Berat Kegemukan', 'Gemuk'];
            // Obesitas
        } else {
            return ['Berat Obesitas', 'Obesitas'];
        }
    }
}
