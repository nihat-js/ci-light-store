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




}