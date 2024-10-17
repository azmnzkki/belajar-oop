<?php

class Product
{
    public $nameProduct;
    public $priceProduct;

    function setProduct($name, $price)
    {
        $this->nameProduct = $name;
        $this->priceProduct = $price;
    }

    function getProduct()
    {
        return "name :  " . $this->nameProduct . " price: " . $this->priceProduct;
    }
}

$motor = new Product();
$mobil = new Product();

$motor->setProduct("Ninja SS", 45000000);
$mobil->setProduct("Inova Reborn", 150000000);

echo $motor->getProduct();
echo "</br>";
echo $mobil->getProduct();


class Laptop
{
    public $namaLaptop;
    public $merk;
    public $vga;
    public $ram;
    public $ssd;

    function setLaptop($namaLaptop, $merk, $vga, $ram, $ssd)
    {
        $this->namaLaptop = $namaLaptop;
        $this->merk = $merk;
        $this->vga = $vga;
        $this->ram = $ram;
        $this->ssd = $ssd;
    }

    function getLaptop()
    {
        return "nama laptop : " . $this->namaLaptop . " merk : " . $this->merk . " vga : " . $this->vga . " Ram : " . $this->ram . " ssd : " . $this->ssd;
    }
}

$namaLaptop = new Laptop();
$merk = new Laptop();
$vga = new Laptop();
$ram = new Laptop();
$ssd = new Laptop();

$namaLaptop->setLaptop("Asus Rog", "Asus", "AMD ryzen", "1tb", 512);

echo "</br>";

echo $namaLaptop->getLaptop();


class Motor
{
    public $namaMotor;
    public $merk;
    public $cc;
    public $type;


    function setMotor($namaMotor, $merk, $cc, $type)
    {
        $this->namaMotor = $namaMotor;
        $this->merk = $merk;
        $this->cc = $cc;
        $this->type = $type;
    }

    function getMotor()
    {
        return "Nama Motor : " . $this->namaMotor . "</br>" . " Merk : " . $this->merk . "</br>" . " CC : " . $this->cc . "Cc" . "</br>" . " Type : " . $this->type;
    }
}


$namaMotor = new Motor();
$merk = new Motor();
$cc = new Motor();
$type = new Motor();

$namaMotor->setMotor("Ninja SS", "Kawasaki", 250, "Racing");
$merk->setMotor("Cb Icikiwir", "Honda", 1000, "Trondol");

echo "</br>";
echo "</br>";

echo $namaMotor->getMotor();
echo "</br>";
echo "</br>";
echo $merk->getMotor();
