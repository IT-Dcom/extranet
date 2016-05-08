<?php

namespace Model;

class searchclient extends \Model {

    public static function search($email)
    {
  //    $client = DB::query('SELECT * FROM users WHERE email = $email');
      $client = ["id" => 1, "nom" =>"brouti", "email" => $email, "adresse" => "2ceze9"];
      return ($client);
    }
}
