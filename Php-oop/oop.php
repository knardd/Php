<?php 
class Person { //membuat class
   const APLIKASI = "Programer Zaman Now";

   var string $name;
   var string $addres;
//    var ?string $addres = null; //boleh kosong 
   var string $country;
   //     function __construct(string $name, ?string $addres) //Harus isi agar tidak error
   // {
   //    $this->name = $name;
   //    $this->addres = $addres;
   // }
//    var string $country = "Indonesia"; //default ketika string tidak diisi
function info() {
   echo "APLIKASI : " . self::APLIKASI; //Mengakses const melalui function menggunakan self
}
function sayHello(?string $name) { //?string return boleh null dan string
    if (is_null($name)) { //is_null mengecek apakah sebuah variabel bernilai null
        echo "Hi my name is {$this->name}";
    } else {
       echo "Hi $name My name is {$this->name}";
    }
}
function __destruct() //Menghapus __construct yang memiliki object name
{
   echo "Person was delete $this->name";
}
}
echo Person::APLIKASI; //mengakses const
$person0 = new Person();
$person0->info();

$person = new Person("Eko", "jakarta"); //membuat object dari class menggunakan new
$person->name = "Eko";
$person->addres = "Surakarta";
$person->country = "Indonesia";
$person->sayHello("Budi");

// var_dump($person);

$person1 = new Person(); //membuat object dari class menggunakan new
$person1->name = "Joko";
$person1->sayHello(null);


echo "Name : $person->name". "<br>";
echo "addres  : $person->addres". "<br>";
echo "country : $person->country". "<br>";

// $person2 = new Person();
// $person2->name = "Agus";
// $person2->addres = "semarang";
// $person2->country = "Indonesia";
// var_dump($person2);

?>
