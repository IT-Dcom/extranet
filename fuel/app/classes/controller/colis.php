<?php
use \Model\NewColis;

class Controller_Colis extends Controller_Base
{
  protected $TITLE = 'Colis';

  protected $USERS = array();

  /**
  * The basic welcome message
  *
  * @access  public
  * @return  Response
  */
  public function action_create()
  {
    $this->template->subtitle = 'Nouveau Colis';
    $this->template->content = View::forge('colis/new');
  }

  public function post_create()
  {
    $description = $_POST['colis'];
    $date_arrivee = $_POST['date'];
    $weight = $_POST['weight'];
    $insurance = 0; //$_POST['assurance'];   génère une erreur
    $name_client = $_POST['client'];
    $adresse_client = $_POST['adress'];
    $adresse_destinataire = $_POST['adresstarget'];
    $nom_destinataire = $_POST['target'];
    $point_relay = $_POST['destination'];
    $verification = 0;
    //$verification = newColis.create($description, $date_arrivee, $weight, $insurance, $name_client, $adresse_client, $nom_destinataire, $adresse_destinataire, $point_relay);
    // a mettre lorsqu'on aura la base de donnée
    $this->template->subtitle = 'Nouveau Colis';
    //if ($verification == "TRUE")
      //$this->template->content = View::forge('colis/colisok');
    //else
    $erreur['erreur'] = "";
    $this->template->content = View::forge('colis/new', $erreur);
    //$date = $_POST['date'];
    //$colis = $_POST['colis'];
    //NewColis->insert($colis, 0, 0); // a reconfigurer par rapport aux tables product
  }

  public function action_index()
  {
    $this->USERS[] = array('id' => 1, 'name' => 'M. Kouri', 'descr' => 'Chargeur',
                     'town' => 'Paris', 'status' => 'Arrivé');
    $this->USERS[] = array('id' => 2, 'name' => 'M. Kristo', 'descr' => 'Fleur',
                     'town' => 'Ilé', 'status' => 'En livraison');
    $this->USERS[] = array('id' => 3, 'name' => 'M. Beezu', 'descr' => 'Miroir',
                     'town' => 'Nancy', 'status' => 'Livré chez le voisin');
    $this->template->subtitle = 'Suivi des colis';
    $this->template->content  = View::forge('colis/index');
    $this->template->content->users  = $this->USERS;
  }
}
