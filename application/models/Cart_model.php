<?php
class Cart_model extends CI_Model
{

  public $date;
  public $user_id;
  public $product_id;
  public $quantity;

  private $table_name = "avh_products";

  public function getAll()
  {
    $query = $this->db->get($this->table_name,);
    return $query->result();
  }

  public function getUserCart(){

  }

  public function  updateQuantity($number=+1){

  }
  public function removeProductFromCart(){
    
  }

  public function insert($arr)
  {

    // $this->title    = $_POST['title']; // please read the below note
    // $this->content  = $_POST['content'];
    // $this->date     = time();

    // $this->db->insert('entries', $this);
  }

  public function update_entry()
  {
    // $this->title    = $_POST['title'];
    // $this->content  = $_POST['content'];
    // $this->date     = time();

    // $this->db->update('entries', $this, array('id' => $_POST['id']));
  }
}
