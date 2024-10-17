<?php

class Transportation
{
    public $name;
    public $brand;
    public $jumlah_pintu;
    public $sizeJok;
    public $ketinggian;

    public function __construct($name, $brand, $jumlah_pintu, $sizeJok, $ketinggian)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->jumlah_pintu = $jumlah_pintu;
        $this->sizeJok = $sizeJok;
        $this->ketinggian = $ketinggian;
    }

    public function run()
    {
        $str = "Transportasi dengan nama " . $this->name . " Merk " . $this->brand . " Telah berjalan ";
        if ($this->sizeJok != "") {
            $str .= " dengan jok " . $this->sizeJok;
        }

        if ($this->jumlah_pintu != 0) {
            $str .= " dan memiliki " . $this->jumlah_pintu . " pintu";
        }

        return $str;
    }
}

class Car extends Transportation
{
    public function run()
    {
        $str = "Mobil dengan nama " . $this->name . " Merk " . $this->brand . " telah berjalan dan memiliki " . $this->jumlah_pintu . " pintu";

        return $str;
    }
}

class Motor extends Transportation
{
    public function run()
    {
        $str = "Motor dengan nama " . $this->name . " Merk " . $this->brand . " telah berjalan dengan memiliki size jok " . $this->sizeJok;

        return $str;
    }
}

class Plane extends Transportation
{
    public function run()
    {
        $str = "Pesawat dengan seri " . $this->name . " Merk " . $this->brand . " telah terbang dengan ketinggian " . $this->ketinggian . " kaki";

        return $str;
    }
}


$motor = new Motor("Ninja", "Kawasaki", 0, "30cm2", 0);
$mobil = new Car("Innova", "Toyota", 4, "", 0);
$pesawat = new Plane("Boeing 37", "Boeing", 0, "", 1000);

echo $motor->run();
echo "</br>";
echo $mobil->run();
echo "</br>";
echo $pesawat->run();
