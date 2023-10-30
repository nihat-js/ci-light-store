<?php
class Product_model extends CI_Model
{

  public $title;
  public $content;
  public $date;

  private $table_name = "avh_products"; 

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getAll()
  {
    $query = $this->db
    ->select("product_id, title, price, quantity, avh_brands.name as brand_name,  avh_product_categories.name as category_name ")
    ->join("avh_product_categories","avh_products.category_id = avh_product_categories.category_id","left" )
    ->join("avh_brands","avh_products.brand_id = avh_brands.brand_id","left" )
    ->get($this->table_name);
    return $query->result();
  }

  public function insert_entry()
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
