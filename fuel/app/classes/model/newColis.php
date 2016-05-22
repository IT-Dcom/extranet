<?php

namespace Model;

static class NewColis extends \Model {


    private function testDate( $value )
    {
      return preg_match( ''^\d{1,2}/\d{1,2}/\d{4}$'' , $value ) )
    }

    private function checkDescription($description)
    {
      if (strlen($description) > 15)
      {
        //erreur: nom de colis trop long
        return (FALSE)
      }
      return (TRUE);
    }

    private function checkDate($date_arrivee)
    {
      if (!testDate($date_arrivee))
        return (FALSE);
      return (TRUE);
    }

    private function checkWeight($weight)
    {
      if (!is_numeric($weight))
      {
        //erreur: que des chiffres
        return (FALSE);
      }
      return (TRUE);
    }

    private function checkName($name_client)
    {
      // if (!exist_name_BDD) { return(FALSE)}
      return (TRUE);
    }


    private function checkAdresseClient($adresse_client)
      {
        // if () { return(FALSE)}
        return (TRUE);
      }

    private function checkNomDesinataire($nom_destinataire)
      {
          if (!is_string($nom_destinataire))
            return (FALSE);
          return (TRUE);
      }

    private function checkAdresseDesinataire($adresse_destinataire)
      {
        if (!(preg_match("'(.*) (.*) ([0-9]{5})' $" , $adresse_destinaire))
          return (FALSE);
        return (TRUE);
      }

    private function checkPointRelay($point_relay)
      {
          // if (exists_PR_BDD) { return(FALSE)}
          return (TRUE);
      }

    private function check_arguments($description, $date_arrivee, $weight, $insurance, $name_client, $adresse_client, $nom_destinataire, $adresse_destinataire, $point_relay)
    {
      if (!checkDescription($description)
        return("FAIL_DESCRIPTION");
      if (!checkDate($date_arrivee))
        return("FAIL_DATE");
      if (!checkWeight($weight))
        return("FAIL_WEIGHT");
      if (!checkName($name_client))
        return("FAIL_NAME");
      if (!checkAdresseClient($adresse_client))
        return ("FAIL_ADRESSECLIENT");
      if (!checkNomDestinataire($nom_destinataire))
        return ("FAIL_NOMDESTINATAIRE");
      if (!checkAdresseDestinataire($adresse_destinataire))
        return ("FAIL_ADRESSEDESTINATAIRE");
      if (!checkPointRelay($point_relay))
        return ("FAIL_POINTRELAY");
      return ("TRUE");
    }

    public static function create($description, $date_arrivee, $weight, $insurance, $name_client, $adresse_client, $nom_destinataire, $adresse_destinataire, $point_relay)
    {
      // insertion
      $uid = rand(0, 999);
      $verif = (check_arguments($description, $date_arrivee, $weight, $insurance, $name_client, $adresse_client, $nom_destinataire, $adresse_destinataire, $point_relay));
      if ($verif != "TRUE")
        return ($verif);
      $query = DB::query('INSERT INTO PRODUCT(DESCRIPTION, DATE_ARRIVEE, WEIGHT, INSURANCE, NAME_CLIENT, ADRESSE_CLIENT, NOM_DESTINATAIRE, ADRESSE_DESTINATAIRE, POINT_RELAY)
       VALUES(:description, :date_arrivee, :weight, :insurance, :name_client, :adresse_client, :nom_destinataire, :adresse_destinataire, :point_relay)');
       $query->execute(["description"=> $description, "date_arrivee"=>$date_arrivee, "weight"=>$weight, "insurance"=>$insurance, "name_client"=>$name_client,
       "adresse_client"=>$adresse_client, "nom_destinataire"=>$nom_destinataire, "adresse_destinataire"=>$adresse_destinataire, "point_relay"=>$point_relay]);
       return ($verif);
    }
}
