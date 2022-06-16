<?php 
include "./mvc/Layouts/Layout_admin/header.php"; 
include "./mvc/Layouts/Layout_admin/left_bar.php";
?>
<br>
<main>
    <div class="container-fluid px-4">
    <h4>Add Catalog Child</h4>
        <div class="card mb-4">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name Catalog Child</label>
                <input type="text" name="add_Name_Catalog_child" class="form-control">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>

            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <a href="http://localhost:3000/BaiTapModule2/Castudy/Project_MVC/index.php?url=admin/catalog/<?php echo $data_5[0]?>"><button type="submit" name="add_catalog_child" class="btn btn-primary">Add</button></a>
        </form>
        </div>
    </div>
</main>
<?php
include "./mvc/Layouts/Layout_admin/footer.php";
?>
