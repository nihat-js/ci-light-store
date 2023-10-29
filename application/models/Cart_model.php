<?php
class Cart_model extends CI_Model
{

  // public $date;
  // public $user_id;
  // public $product_id;
  // public $quantity;

  private $table_cart = "avh_cart";
  private $table_products = "avh_products";

  public function getUserCart($user_id)
  {
    $this->db->select(["cart_id","title ","avh_cart.quantity as cart_quantity","price"," ","user_id", ])
    ->where("user_id", $user_id)
    ->join("avh_products","avh_cart.product_id = avh_products.product_id ","left");

    $query = $this->db->get($this->table_cart);
    return $query->result();
  }

  

  // public function  updateQuantity($user_id,$cart_id,$number=+1){

  //   $this->db->select("*")->wher("")
  // }
}
