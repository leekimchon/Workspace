<?php
class Admin extends Controller{
    public $result;
    public $catalog_name = [];
    public $arr_catalog = [];
    public $arr_catalog_child = [];
    public $arr_catalog_ID = [];
    public $arr_catalog_parent = [];
    public $arr_catalog_child_ID = [];
    
    function __construct(){
        $this->result = $this->model("AdminModel")->show_index();
        $this->catalog_name = $this->model("AdminModel")->show_catalog();
        foreach($this->result as $key => $value){
            array_push($this->arr_catalog, $value->name);
            array_push($this->arr_catalog_child, $value->NAME);
            array_push($this->arr_catalog_ID, $value->ID_PARENT);
            array_push($this->arr_catalog_child_ID, $value->ID);
        }

        $this->arr_catalog = array_unique($this->arr_catalog);
        foreach($this->arr_catalog as $key => $value){
            array_push($this->arr_catalog_parent, $value);
        }
    }

    function Home(){
        $this->view("Admin", $this->result, $this->arr_catalog_parent, $this->arr_catalog_ID, $this->arr_catalog_child, $this->arr_catalog_child_ID);
    }

    function catalog($catalog_child_ID){
        $product = $this->model("AdminModel")->show_product($catalog_child_ID);
        $name_catalog_child = $this->model("AdminModel")->show_add_product($catalog_child_ID);
        // echo 'product';
        // print_r($product);
        // echo 'arr_catalog_parent';
        // print_r($this->arr_catalog_parent);
        // echo 'arr_catalog_child_ID';
        // print_r($this->arr_catalog_ID);
        // echo 'arr_catalog_child';
        // print_r($this->arr_catalog_child);
        // echo 'arr_catalog_child_ID';
        // print_r($this->arr_catalog_child_ID);
        $this->view("Product", $product, $this->arr_catalog_parent, $this->arr_catalog_ID, $this->arr_catalog_child, $this->arr_catalog_child_ID, $catalog_child_ID, $name_catalog_child);
    }

    function add_product($catalog_child_ID){
        $product = $this->model("AdminModel")->show_add_product($catalog_child_ID);
        if(isset($_REQUEST["add"])){
            $Name = $_REQUEST["add_Name"];
            $Price = $_REQUEST["add_Price"];
            $Discount = $_REQUEST["add_Discount"];
            $Image_link = $_REQUEST["add_Image_Link"];
            $Image_list = $_REQUEST["add_Image_list"];
            $Created = $_REQUEST["add_Created"];
            $View = $_REQUEST["add_View"];

            $this->model("AdminModel")->add_product($catalog_child_ID, $Name, $Price, $Discount, $Image_link, $Image_list, $Created, $View);
            header("location: index.php?url=admin/catalog/$catalog_child_ID");
        }
        $this->view("AddProduct", $product, $this->arr_catalog_parent, $this->arr_catalog_ID, $this->arr_catalog_child, $this->arr_catalog_child_ID);
    }

    function delete_product($catalog_child_ID, $product_id){
        $this->model("AdminModel")->delete_product($product_id);
        header("location: index.php?url=admin/catalog/$catalog_child_ID");
    }

    function edit_product($catalog_child_ID, $product_id){
        $product = $this->model("AdminModel")->show_product($catalog_child_ID);
        if(isset($_REQUEST["edit"])){
            $Name = $_REQUEST["add_Name"];
            $Price = $_REQUEST["add_Price"];
            $Discount = $_REQUEST["add_Discount"];
            $Image_link = $_REQUEST["add_Image_Link"];
            $Image_list = $_REQUEST["add_Image_list"];
            $Created = $_REQUEST["add_Created"];
            $View = $_REQUEST["add_View"];

            $this->model("AdminModel")->edit_product($product_id, $Name, $Price, $Discount, $Image_link, $Image_list, $Created, $View);
            header("location: index.php?url=admin/catalog/$catalog_child_ID");
        }
        $this->view("EditProduct", $product, $this->arr_catalog_parent, $this->arr_catalog_ID, $this->arr_catalog_child, $this->arr_catalog_child_ID);
    }

    function add_catalog(){
        if(isset($_REQUEST["add_catalog"])){
            $Name = $_REQUEST["add_Name_Catalog"];
            $this->model("AdminModel")->add_catalog($Name);
        }
        $this->view("AddCatalog", $this->result, $this->arr_catalog_parent, $this->arr_catalog_ID, $this->arr_catalog_child, $this->arr_catalog_child_ID);
    }

    function add_catalog_child($catalog_ID_PARENT){
        if(isset($_REQUEST["add_catalog_child"])){
            $Name = $_REQUEST["add_Name_Catalog_child"];
            $this->model("AdminModel")->add_catalog_child($Name, $catalog_ID_PARENT);
            header("location: index.php?url=admin/add_catalog_child/$catalog_ID_PARENT");
        }
        $this->view("AddCatalogChild", $this->result, $this->arr_catalog_parent, $this->arr_catalog_ID, $this->arr_catalog_child, $this->arr_catalog_child_ID, $catalog_ID_PARENT);
    }
    
    function delete_catalog_child($catalog_child_ID){
        $this->model("AdminModel")->delete_catalog_child($catalog_child_ID);
        header("location: index.php?url=admin/home");
    }
}
?>