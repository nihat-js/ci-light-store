<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Product_model");
    $this->load->model("Cart_model");

  }

  public function index()
  {
    $user_id = 1; // root
    $data = [];
    $data['products'] = $this->Product_model->getAll();
    $data['cart'] = $this->Cart_model->getUserCart($user_id);
    $this->load->view('home',$data);
    
  }

  public function test(){
    
  }

  public function add_to_cart_action(){
    $product_id = $this->input->post("productId");
    $this->Cart_model->addToCart(1,$product_id);
  }

}
