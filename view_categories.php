<div class="row">
    <div class="col-sm-12">
        <h1>Products</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_cat = "select * from categories";
            $run_cat = mysqli_query($con,$get_cat);
            $count_cat = mysqli_num_rows($run_cat);
            if($count_pro==0){
                echo "<h2> No Category found </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {

                    $pro_title = $row_pro['pro_title'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $pro_title; ?></td>
                        <td><a href="index.php?edit_pro=<?php echo $pro_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?del_pro=<?php echo $pro_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>