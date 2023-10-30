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

  
  public function addToCart($user_id,$product_id,$quantity=1){
    $data = [
      "user_id" =>$user_id,
      "product_id" => $product_id,
      "quantity" =>$quantity
    ];
    $result = $this->db->select("*")
    ->where("user_id",$user_id)
    ->where("product_id",$product_id)
    ->limit(1)
    ->get($this->table_cart)->result();

    if (count($result) > 0){
      return false;
    }
    $this->db->insert($this->table_cart,$data);
  }

  public function  updateQuantity($user_id,$cart_id,$payload){
    $result = $this->db->select("quantity")
    ->where("user_id",$user_id)
    ->where("cart_id",$cart_id)
    ->limit(1)
    ->get($this->table_cart)->row();
    if (!$result->quantity) return false ;

    if ($result->quantity + $payload <= 0){
      $this->db
      ->select("")
      ->where("user_id",$user_id)
      ->where("cart_id",$cart_id)
      ->limit(1)
      ->delete('cart_id');
      return true; // deleted
    }

    $new_quantity = $result->$quantity +  $payload;


    $this->db
    ->select("")
    ->where("user_id",$user_id)
    ->where("cart_id",$cart_id)
    ->limit(1)
    ->update($this->table_cart,['quantity'=> $new_quantity]);

  }
}
