<div class="row"><!-- 1 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / Rejected Comments

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title"><!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw"> </i> Rejected Comments

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
                                <th>Email</th>
                                <th>Message</th>
                                <th>Date</th>

                            </tr>

                        </thead><!-- thead Ends -->

                        <tbody><!-- tbody Starts -->

                            <?php

                            $i = 0;

                            $status = "rejected";

                            $view_comment = "SELECT * FROM comments WHERE status = '$status'";

                            $run_view_comment = mysqli_query($conn, $view_comment);

                            while ($row_view = mysqli_fetch_array($run_view_comment)) {

                                $comment_id = $row_view['id'];
                                $blog_id = $row_view['blog_id'];
                                $name = $row_view['name'];
                                $email = $row_view['email'];
                                $date = $row_view['date'];
                                $msg = $row_view['comment'];

                                $i++;

                                ?>

                                <tr>

                                    <td>
                                        <?php echo $i; ?>
                                    </td>

                                    <td>
                                        <?php echo $name; ?>
                                    </td>

                                    <td>
                                        <?php echo $email; ?>
                                    </td>

                                    <td>
                                        <?php echo $msg; ?>
                                    </td>

                                    <td>
                                        <?php echo $date; ?>
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