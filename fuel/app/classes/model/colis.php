<?php

use Orm\Model;

class Model_Colis extends \Model {
  protected static $_properties = array('id', 'name', 'descr', 'town');

  public static function get_results()
  {
    return DB::select('id', 'name', 'weight', 'description')
            ->from('products')
            ->execute();
  }

  public static function get_result($id) {
    return DB::select('id', 'name', 'weight', 'description')
            ->from('products')
            ->where('id', $id)
            ->execute()[0];
  }

  public static function create_colis($name, $desc, $weight) {
    $id = DB::insert('products')
            ->columns(array('name', 'description', 'weight'))
            ->values(array($name, $desc, $weight))
            ->execute()[0];
    return self::get_result($id);
  }
}
