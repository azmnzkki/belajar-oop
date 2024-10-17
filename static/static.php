<?php

class book
{
    public static $name;
    public static $count = 1;

    public static function get_name()
    {
        return "nama buku " . self::$name . "telah di beli sebanyak " . self::$count++ . "kali";
    }

    public static function set_name($name)
    {
        self::$name = $name;
    }
}

class book2
{
    public $name;
    public $count = 1;

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return "nama buku " . $this->name . " telah di beli sebanyak " . $this->count++  . "kali";
    }
}


book::$name = "teruslah bodoh jangan pintar ";
echo book::get_name();
echo "<br>";
book::$name = "Tentang Kamu ";
echo book::get_name();
echo "<br>";
book::$name = "Rindu ";
echo book::get_name();
echo "<br>";
book::$name = "Hello ";
echo book::get_name();
echo "<br>";
book::$name = "Rembulan ";
echo book::get_name();

echo "<hr>";


$bumi = new book2();
$bumi->set_name("bumi");
echo $bumi->get_name();
echo "<br>";
$bulan = new book2();
$bulan->set_name("bulan");
echo $bulan->get_name();
echo "<br>";
$matahari = new book2();
$matahari->set_name("matahari");
echo $matahari->get_name();
echo "<br>";
$bintang = new book2();
$bintang->set_name("bintang");
echo $bintang->get_name();
echo "<br>";
$komet = new book2();
$komet->set_name("komet");
echo $komet->get_name();
echo "<br>";
$KometMinor = new book2();
$KometMinor->set_name("KometMinor");
echo $KometMinor->get_name();
echo "<br>";
$selena = new book2();
$selena->set_name("selena");
echo $selena->get_name();
echo "<br>";
$nebula = new book2();
$nebula->set_name("nebula");
echo $nebula->get_name();
echo "<br>";
$lumpu = new book2();
$lumpu->set_name("lumpu");
echo $lumpu->get_name();
echo "<br>";
$siPutih = new book2();
$siPutih->set_name("siPutih");
echo $siPutih->get_name();
echo "<br>";
$bbiGill = new book2();
$bbiGill->set_name("bbiGill");
echo $bbiGill->get_name();
echo "<br>";
$sagaraS = new book2();
$sagaraS->set_name("sagaraS");
echo $sagaraS->get_name();
echo "<br>";
$matahariMinor = new book2();
$matahariMinor->set_name("matahariMinor");
echo $matahariMinor->get_name();
echo "<br>";
$ILY = new book2();
$ILY->set_name("ILY");
echo $ILY->get_name();
