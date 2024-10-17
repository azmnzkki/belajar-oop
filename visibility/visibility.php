<?php

class Transportation
{
    protected $name;
    protected $brand;




    protected function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }

    protected function run()
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
    private $jumlah_pintu;

    public function __construct($name, $brand, $jumlah_pintu)
    {
        parent::__construct($name, $brand);
        $this->jumlah_pintu = $jumlah_pintu;
    }


    public function run()
    {
        $str = "Mobil dengan nama " . $this->name . " Merk " . $this->brand . " telah berjalan dan memiliki " . $this->jumlah_pintu . " pintu";

        return $str;
    }
}

class Motor extends Transportation
{
    private $sizeJok;

    public function __construct($name, $brand, $sizeJok)
    {
        parent::__construct($name, $brand);
        $this->sizeJok = $sizeJok;
    }
    public function run()
    {
        $str = "Motor dengan nama " . $this->name . " Merk " . $this->brand . " telah berjalan dengan memiliki size jok " . $this->sizeJok;

        return $str;
    }
}

class Plane extends Transportation
{
    private $ketinggian;

    public function __construct($name, $brand, $ketinggian)
    {
        parent::__construct($name, $brand);
        $this->ketinggian = $ketinggian;
    }
    public function run()
    {
        $str = "Pesawat dengan seri " . $this->name . " Merk " . $this->brand . " telah terbang dengan ketinggian " . $this->ketinggian . " kaki";

        return $str;
    }
}

class Truck extends Transportation
{
    public $JumlahMuatan;

    public function __construct($name, $brand, $JumlahMuatan)
    {
        parent::__construct($name, $brand);
        $this->JumlahMuatan = $JumlahMuatan;
    }
    public function run()
    {
        $str = "Truck dengan Nama " . $this->name . " Merk " . $this->brand . " telah Berjalan membawa muatan sebanyak " . $this->JumlahMuatan . " ton";
        return $str;
    }
}


class Train extends Transportation
{
    public $gerbong;

    public function __construct($name, $brand, $gerbong)
    {
        parent::__construct($name, $brand);
        $this->gerbong = $gerbong;
    }
    public function run()
    {
        $str = "Kereta Dengan Nama " . $this->name . " Nomor Seri" . $this->brand . " telah Berjalan membawa Gerbong sebanyak " . $this->gerbong . " Gerbong";
        return $str;
    }
}


$motor = new Motor("Ninja", "Kawasaki", "30cm2");
$motor2 = new Motor("Astrea", "Honda", "25cm2");
$mobil = new Car("Innova", "Toyota", 4,);
$pesawat = new Plane("Boeing 37", "Boeing", 1000);
$truck = new Truck("Oleng", "Fuso", 100);
$train = new Train("Kertanegara", 118, 12);

echo $motor->run();
echo "</br>";
echo $mobil->run();
echo "</br>";
echo $pesawat->run();
echo "</br>";
echo $truck->run();
echo "</br>";
echo $train->run();
echo "</br>";
echo $motor2->run();
echo "<hr>";
