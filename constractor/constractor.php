<?php


class Motor
{
    public $nama;
    public $merk;
    public $type;
    public $cc;

    public function __construct($nama, $merk, $type, $cc)
    {
        $this->nama = $nama;
        $this->merk = $merk;
        $this->type = $type;
        $this->cc = $cc;
    }



    public function move()
    {
        return "Nama Motor : " . $this->nama . "</br>"  . " Merk Motor : " . $this->merk . "</br>" . " Type Motor : " . $this->type . "</br>" . "Cc Motor : " . $this->cc . "Cc";
    }
}



$motor1 = new Motor("Ninja SS", "Kawasaki", "Racing", 250);
// $motor1->nama = "Ninja SS";
// $motor1->merk = "Kawasaki";
// $motor1->type = "Racing";
// $motor1->cc = 250;


$motor2 = new Motor("Zx25r", "Kawasaki", "Racing", 250);
// $motor2->nama = "Zx 25R";
// $motor2->merk = "kawasaki";
// $motor2->type = "Racing";
// $motor2->cc = 250;

$motor3 = new Motor("CRF", "Honda", "Harian", 150);
// $motor3->nama = "GL Max";
// $motor3->merk = "Honda";
// $motor3->type = "Herek";
// $motor3->cc = 100;

echo "<h1>Motor Idaman Mu</h1>";
echo $motor1->move();
echo "</br>";
echo "</br>";
echo $motor2->move();
echo "</br>";
echo "</br>";
echo $motor3->move();
