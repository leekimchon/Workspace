<?php
include "./mvc/Layouts/Layout_admin/header.php";
include "./mvc/Layouts/Layout_admin/left_bar.php";
?>
<br>
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <h5 class="name_child_catalog"><?php
                // if(isset($data[0]->catalog_id)){echo $data[0]->catalog_id;}
                 echo $data_6;
                ?></h5>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image_link</th>
                            <th>Image_list</th>
                            <th>Created</th>
                            <th>View</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image_link</th>
                            <th>Image_list</th>
                            <th>Created</th>
                            <th>View</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php for($i = 0; $i < count($data); $i++){?>
                            <tr>
                                <td><?php echo $data[$i]->name;?></td>
                                <td><?php echo $data[$i]->price;?></td>
                                <td><?php echo $data[$i]->discount;?></td>
                                <td><?php echo $data[$i]->image_link;?></td>
                                <td><?php echo $data[$i]->image_list;?></td>
                                <td><?php echo $data[$i]->created;?></td>
                                <td><?php echo $data[$i]->view;?></td>
                                <td>
                                    <a style="margin-right: 5px;" class="edit" href="index.php?url=admin/edit_product/<?php echo $data[0]->catalog_id?>/<?php echo $data[$i]->id;?>">Edit</a>
                                    <a class="delete" href="index.php?url=admin/delete_product/<?php echo $data[0]->catalog_id?>/<?php echo $data[$i]->id;?>" onclick='return confirm("Are you sure?")'>Delete</a>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                <a class="add" href="index.php?url=admin/add_product/<?php echo $data_5;?>">Add</a>
            </div>
        </div>
    </div>
</main>
<?php
include "./mvc/Layouts/Layout_admin/footer.php";
?>
