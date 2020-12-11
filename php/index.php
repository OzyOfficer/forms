<?php //error_reporting(0);
    $name = $_POST["imy"];
    $email = $_POST["maill"];
    $city = $_POST["city"];
    $pidpus = "Збройні Сили України Test";
    $forma1 ="Ім'я = ".$name."<br>"."Мейл = ".$email."<br>"."Город = ".$city;
mail("darkopasha@gmail.com", "$pidpus", $forma1, "Content-type: text/html; charset=utf-8 \r\n");
echo($forma1);
