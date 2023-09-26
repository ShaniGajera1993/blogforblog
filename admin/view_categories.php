<div class="row"><!-- 1 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / View Blog Categories

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title"><!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw"> </i> View Blog Categories

                </h3><!-- panel-title Ends -->

            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->

                <div class="table-responsive"><!-- table-responsive Starts -->

                    <table class="table table-bordered table-hover table-striped">
                        <!-- table table-bordered table-hover table-striped Starts -->

                        <thead><!-- thead Starts -->

                            <tr>

                                <th>#</th>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>


                            </tr>

                        </thead><!-- thead Ends -->

                        <tbody><!-- tbody Starts -->

                            <?php

                            $i = 0;

                            $view_category = "SELECT * FROM categories";

                            $run_view_category = mysqli_query($conn, $view_category);

                            while ($row_view = mysqli_fetch_array($run_view_category)) {

                                $category_id = $row_view['id'];

                                $category_name = $row_view['category'];


                                $i++;

                                ?>

                                <tr>

                                    <td>
                                        <?php echo $i; ?>
                                    </td>

                                    <td>
                                        <?php echo $category_name; ?>
                                    </td>


                                    <td>

                                        <a href="index.php?delete_categories=<?php echo $category_id; ?>">

                                            <i class="fa fa-trash-o"></i> Delete

                                        </a>

                                    </td>

                                    <td>

                                        <a href="index.php?edit_categories=<?php echo $category_id; ?>">

                                            <i class="fa fa-pencil"></i> Edit

                                        </a>

                                    </td>


                                </tr>

                            <?php } ?>

                        </tbody><!-- tbody Ends -->

                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->