<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
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


  public function insert_action()
  {
    if ($this->input->method(true) !== "POST") {
      return false;
    }
    $user_id = 1;
    $product_id = $this->input->post("productId");
    $payload = $this->input->post("payload") ?? 1;
    $this->Cart_model->insert($user_id, $product_id, $payload);
  }



  public function update_action()
  {
    if ($this->input->method(true) !== "POST") {
      return false;
    }
    $user_id = 1;
    $cart_id = $this->input->post("cartId");
    $payload = $this->input->post("payload");
    $this->Cart_model->update(1, $cart_id, $payload);

  }


}
