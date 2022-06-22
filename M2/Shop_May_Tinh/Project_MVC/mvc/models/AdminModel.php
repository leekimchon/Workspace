<?php
class AdminModel extends DB{
    function show_index(){
        $sql = "SELECT *
        FROM `catalog_child`
        JOIN catalog ON catalog_child.ID_PARENT = catalog.id";
        $stmt = $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
    
    function show_catalog(){
        $sql = "SELECT name FROM `catalog`";
        $stmt = $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function show_product($catalog_child_ID){
        $sql = "SELECT * FROM product WHERE catalog_id = $catalog_child_ID";
        $stmt = $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function show_add_product($catalog_child_ID){
        $sql = "SELECT NAME FROM catalog_child WHERE ID = $catalog_child_ID";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetch();
        return $result[0];
    }

    function add_product($catalog_child_ID, $Name, $Price, $Discount, $Image_link, $Image_list, $Created, $View){
        $sql = "INSERT INTO product VALUES ('', $catalog_child_ID, '$Name', $Price, $Discount, '$Image_link', '$Image_list', $Created, $View)";
        $this->conn->exec($sql);
    }

    function delete_product($product_id){
        $sql = "DELETE FROM product WHERE id = $product_id";
        $this->conn->exec($sql);
    }

    function edit_product($product_id, $Name, $Price, $Discount, $Image_link, $Image_list, $Created, $View){
        $sql = "UPDATE product 
        SET
        name = '$Name', 
        price = $Price, 
        discount = $Discount, 
        image_link = '$Image_link', 
        image_list = '$Image_list', 
        created = $Created, 
        view = $View 
        WHERE id = $product_id";
        $this->conn->exec($sql);
    }

    function add_catalog_child($NAME, $ID_PARENT){
        $sql = "INSERT INTO catalog_child VALUES ('', '$NAME', $ID_PARENT)";
        $this->conn->exec($sql);
    }

    function delete_catalog_child($catalog_child_ID){
        $sql = "DELETE FROM product WHERE catalog_id = $catalog_child_ID";
        $this->conn->exec($sql);
        $sql = "DELETE FROM catalog_child WHERE ID = $catalog_child_ID";
        $this->conn->exec($sql);
    }
}
?>