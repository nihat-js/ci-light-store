<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zed extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Product_model");
    $this->load->model("Cart_model");

  }

  public function index()
  {
    echo 'index';    
  }
  public function add_to_cart_action(){
    $user_id = 1; // root

    $product_id = $this->input->post("productId");
    $this->Cart_model->addToCart(1,$product_id);
  }

  public function changeQuantity($payload=+1){
    $user_id = 1;
    $product_id = $this->input->post("cartId");
    $payload = $this->input->post("paylod");
    $this->Cart_model->updateQuantity(1,$product_id,$payload);

  }


}
