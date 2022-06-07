<?php
class Connection{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "pbwl_uts_intan";
    public $conn;
    public function __construct()
    {
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
    }
function tampildata()
  {
    $data = mysqli_query($this->conn, "select * from tb_category");
    while ($row = mysqli_fetch_array($data))
    {
      $hasil[] = $row;
    }
    return $hasil;
  }
function tambahdata($cat_name)
  {
    mysqli_query($this->conn, "insert into tb_category values('','$cat_name')");
  }
function get_by_id($cat_id)
  {
    $query = mysqli_query($this->conn,"select * from tb_category where cat_id='$cat_id'");
    return $query->fetch_array();
  }
function editdata($cat_name,$cat_id)
  {
    $query = mysqli_query($this->conn,"update tb_category set c_name='$cat_name' where cat_id='$cat_id'");
  }
function deletedata($cat_id)
  {
  $query = mysqli_query($this->conn,"delete from tb_category where cat_id='$cat_id'");
  }
function tampilproduk(){
  $data = mysqli_query($this->conn, "select * from tb_barang");
  while ($row = mysqli_fetch_array($data)){
  $hasil[] = $row;
  }
  return $hasil;
  }
}
?>