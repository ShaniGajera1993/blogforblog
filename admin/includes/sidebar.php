<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top Starts -->

    <div class="navbar-header"><!-- navbar-header Starts -->

        <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse"><!-- navbar-ex1-collapse Starts -->


            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>


        </button><!-- navbar-ex1-collapse Ends -->

        <a class="navbar-brand" href="index.php?dashboard">BlogForBlog Admin</a>


    </div><!-- navbar-header Ends -->

    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav Starts -->

        <li class="dropdown"><!-- dropdown Starts -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle Starts -->

                <i class="fa fa-user"> <?php echo $admin_firstname; ?></i>

                <b class="caret"></b>


            </a><!-- dropdown-toggle Ends -->

            <ul class="dropdown-menu"><!-- dropdown-menu Starts -->

                <li><!-- li Starts -->

                    <a href="index.php?edit_users=<?php echo $admin_id; ?>">

                        <i class="fa fa-fw fa-user"></i> Profile


                    </a>

                </li><!-- li Ends -->

                <li><!-- li Starts -->

                    <a href="#">

                        <i class="fa fa-fw fa-envelope"></i> Comments

                        <span class="badge">
                            <!-- add blog count here -->
                        </span>


                    </a>

                </li><!-- li Ends -->

                <li><!-- li Starts -->

                    <a href="#">

                        <i class="fa fa-fw fa-newspaper-o"></i> Blog

                        <span class="badge">
                            <!-- add blog count here -->
                        </span>


                    </a>

                </li><!-- li Ends -->

            
                <li><!-- li Starts -->

                    <a href="index.php?view_categories">

                        <i class="fa fa-fw fa-list-alt"></i> Blog Categories

                        <span class="badge">
                        <?php echo $count_b_categories ?>
                        </span>


                    </a>

                </li><!-- li Ends -->





                <li class="divider"></li>

                <li><!-- li Starts -->

                    <a href="index.php?logout">

                        <i class="fa fa-fw fa-power-off"> </i> Log Out

                    </a>

                </li><!-- li Ends -->

            </ul><!-- dropdown-menu Ends -->




        </li><!-- dropdown Ends -->


    </ul><!-- nav navbar-right top-nav Ends -->

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

            <li><!-- li Starts -->

                <a href="index.php?dashboard">

                    <i class="fa fa-fw fa-dashboard"></i> Dashboard

                </a>

            </li><!-- li Ends -->

            <li><!-- Products li Starts -->

                <a href="#" data-toggle="collapse" data-target="#products">

                    <i class="fa fa-fw fa-newspaper-o"></i> Blogs

                    <i class="fa fa-fw fa-caret-down"></i>


                </a>

                <ul id="products" class="collapse">

                    <li>
                        <a href="#"> Insert Blogs </a>
                    </li>

                    <li>
                        <a href="#"> View Blogs </a>
                    </li>


                </ul>

            </li><!-- Products li Ends -->

            <li><!-- li Starts -->

                <a href="#" data-toggle="collapse" data-target="#p_cat">

                    <i class="fa fa-fw fa-list-alt"></i> Blogs Categories

                    <i class="fa fa-fw fa-caret-down"></i>


                </a>

                <ul id="p_cat" class="collapse">

                    <li>
                        <a href="index.php?insert_categories"> Insert Blog Category </a>
                    </li>

                    <li>
                        <a href="index.php?view_categories"> View Blog Categories </a>
                    </li>


                </ul>

            </li><!-- li Ends -->

            <li>

                <a href="#">

                    <i class="fa fa-fw fa-comments"></i> View Comments

                </a>

            </li>

            <li><!-- li Starts -->

                <a href="#" data-toggle="collapse" data-target="#users">

                    <i class="fa fa-fw fa-user"></i> Users

                    <i class="fa fa-fw fa-caret-down"></i>


                </a>

                <ul id="users" class="collapse">

                    <li>
                        <a href="index.php?insert_user"> Insert User </a>
                    </li>

                    <li>
                        <a href="index.php?view_users"> View Users </a>
                    </li>

                    <li>
                        <a href="index.php?edit_users=<?php echo $admin_id; ?>"> Edit Profile </a>
                    </li>

                </ul>

            </li><!-- li Ends -->

            <li>
                <a href="index.php?logout">

                    <i class="fa fa-fw fa-power-off"></i> Log Out

                </a>

            </li><!-- li Ends -->

        </ul><!-- nav navbar-nav side-nav Ends -->

    </div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->