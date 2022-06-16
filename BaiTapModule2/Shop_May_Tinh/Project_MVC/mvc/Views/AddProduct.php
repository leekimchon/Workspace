<?php 
include "./mvc/Layouts/Layout_admin/header.php"; 
include "./mvc/Layouts/Layout_admin/left_bar.php";
?>
<br>
<main>
    <div class="container-fluid px-4">
    <h4>Add Products From 
    <?php echo $data;?>
    </h4>
        <div class="card mb-4">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name="add_Name" class="form-control">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputPrice" class="form-label">Price</label>
                <input type="number" name="add_Price" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputDiscount" class="form-label">Discount</label>
                <input type="number" name="add_Discount" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputImage_link" class="form-label">Image Link</label>
                <input type="text" name="add_Image_Link" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputImage_list" class="form-label">Image list</label>
                <input type="text" name="add_Image_list" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputCreated" class="form-label">Created</label>
                <input type="number" name="add_Created" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputView" class="form-label">View</label>
                <input type="number" name="add_View" class="form-control">
            </div>

            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" name="add" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
</main>
<?php
include "./mvc/Layouts/Layout_admin/footer.php";
?>
