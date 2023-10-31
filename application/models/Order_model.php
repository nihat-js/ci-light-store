<?php
class Order_model extends CI_Model
{

    //   private $table_name = "avh_products"; 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUserOrders($user_id){
        return $this->db
        ->select("*")
        ->where('user_id',$user_id)
        ->get("avh_orders")->result();
    }

    public function orderAll($user_id)
    {
        //     INSERT INTO avh_orders (product_id, user_id, total_price )
// SELECT c.product_id,user_id, c.quantity*(p.price)
// FROM avh_cart  c
// LEFT JOIN avh_products p ON  c.product_id = p.product_id
// WHERE user_id  = 1

        $user_id = 1;
        $query = $this->db
            ->select("c.product_id, user_id, (c.quantity*p.price) as total_price ")
            ->join("avh_products as p", "c.product_id = p.product_id")
            ->where("c.user_id", $user_id)
            ->get('avh_cart c');


        $data = $query->result_array();

        echo json_encode($data);

        $this->db->insert_batch('avh_orders', $data);
        $this->db
            ->select("")
            ->where("user_id", $user_id)
            ->delete('avh_cart');
    }

    //   public function getAll()
//   {
//     $query = $this->db
//     ->select("product_id, title, price, quantity, avh_brands.name as brand_name,  avh_product_categories.name as category_name ")
//     ->join("avh_product_categories","avh_products.category_id = avh_product_categories.category_id","left" )
//     ->join("avh_brands","avh_products.brand_id = avh_brands.brand_id","left" )
//     ->get($this->table_name);
//     return $query->result();
//   }

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
