<div class="row"><!--  1 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / View Blogs

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title"><!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw"></i> View Blogs

                </h3><!-- panel-title Ends -->


            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->

                <div class="table-responsive"><!-- table-responsive Starts -->

                    <table class="table table-bordered table-hover table-striped">
                        <!-- table table-bordered table-hover table-striped Starts -->

                        <thead>

                            <tr>
                                <th>#</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Tag</th>
                                <th>Date</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php

                            $i = 0;

                            $view_blog = "SELECT * from blog";

                            $run_view_blog = mysqli_query($conn, $view_blog);

                            while ($row_blog = mysqli_fetch_array($run_view_blog)) {

                                $blog_id = $row_blog['id'];

                                $blog_author = $row_blog['author'];

                                $blog_title = $row_blog['title'];
                                
                                $blog_category = $row_blog['category'];

                                $blog_image = $row_blog['image'];

                                $blog_tag = $row_blog['tag'];

                                $blog_date = $row_blog['date'];

                                $i++;

                                ?>

                                <tr>

                                    <td>
                                        <?php echo $i; ?>
                                    </td>

                                    <td>
                                        <?php echo $blog_author; ?>
                                    </td>

                                    <td>
                                        <?php echo $blog_title; ?>
                                    </td>

                                    <td>
                                        <?php echo $blog_category; ?>
                                    </td>

                                    <td><img src="images/<?php echo $blog_image; ?>" width="60" height="60"></td>

                                    <td>
                                        <?php echo $blog_tag; ?>
                                    </td>

                                    <td>
                                        <?php echo $blog_date; ?>
                                    </td>

                                    <td>

                                        <a href="index.php?delete_blogs=<?php echo $blog_id; ?>">

                                            <i class="fa fa-trash-o"> </i> Delete

                                        </a>

                                    </td>

                                    <td>

                                        <a href="index.php?edit_blogs=<?php echo $blog_id; ?>">

                                            <i class="fa fa-pencil"> </i> Edit

                                        </a>

                                    </td>

                                </tr>

                            <?php } ?>


                        </tbody>


                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->