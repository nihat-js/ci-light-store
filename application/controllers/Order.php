<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // $this->load->model("Product_model");
    // $this->load->model("Cart_model");
    $this->load->model("Order_model");

  }

  public function order_all()
  {
    $user_id = 1; // root
    $result = $this->Order_model->orderAll($user_id);
    echo $result;
  }
  public function customer(){
    echo 'aaaaa';
  }



}
