<div class="row"><!-- 1 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <!-- <h1 class="page-header">Dashboard</h1> -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-primary"><!-- panel panel-primary Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-newspaper-o fa-5x"></i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge"> <?php echo $count_blog; ?> </div>

                        <div>Blogs</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_blogs">

            <div class="panel-footer"><!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-primary Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-list-alt fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge">
                            <?php echo $count_b_categories ?>
                        </div>

                        <div>Blogs Categories</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_categories">

                <div class="panel-footer"><!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-yellow Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-green"><!-- panel panel-green Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-comments fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge"> </div>

                        <div>Comments</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->



            <div class="panel-footer"><!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-green Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-red"><!-- panel panel-red Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-user fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge">
                            <?php echo $count_user; ?>
                        </div>
                        <div>Users</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->


            <a href="index.php?view_users">
                <div class="panel-footer"><!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-red Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->

<div class="row"><!-- 3 row Starts -->

    <div class="col-lg-12"><!-- col-lg-8 Starts -->

        <div class="panel panel-primary"><!-- panel panel-primary Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title"><!-- panel-title Starts -->

                    <i class="fa fa-newspaper-o fa-fw"></i> New Blogs

                </h3><!-- panel-title Ends -->

            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->

                <div class="table-responsive"><!-- table-responsive Starts -->

                    <table class="table table-bordered table-hover table-striped">
                        <!-- table table-bordered table-hover table-striped Starts -->

                        <thead><!-- thead Starts -->

                            <tr>
                                <th>#</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Tag</th>
                                <th>Date</th>
                            </tr>

                        </thead><!-- thead Ends -->

                        <tbody><!-- tbody Starts -->
                        
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

                                </tr>

                            <?php } ?>

                        </tbody><!-- tbody Ends -->


                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->

                <div class="text-right"><!-- text-right Starts -->

                </div><!-- text-right Ends -->


            </div><!-- panel-body Ends -->

        </div><!-- panel panel-primary Ends -->

    </div><!-- col-lg-8 Ends -->

    <div class="col-md-4"><!-- col-md-4 Starts -->

        <div class="panel"><!-- panel Starts -->



        </div><!-- panel Ends -->

    </div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->