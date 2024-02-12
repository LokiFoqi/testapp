<?php
namespace App;

use App\DataBase;

class PhoneBook{
    public function __construct(){

    }

    public function index(): void
    {
        include '../view/main.php';
    }

}
?>