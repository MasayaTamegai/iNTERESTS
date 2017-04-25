<?php include "admin-includes/admin-header.php"; ?>

    <div id="wrapper">

<!-- Navigation -->
<?php include "admin-includes/admin-nav.php"; ?>        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        
                        <?php
                        
                        if(isset($_GET['source'])) {
                            $source = $_GET['source'];
                        } else {
                            $source = '';
                        }
                        
                    switch($source) {
                        case 'add_post';
                        include "admin-includes/add-post.php";
                        break;
                        
                        case 'edit_post';
                        include "admin-includes/edit-posts.php";
                        break;
                        
                        case '200';
                        echo "nice 200";
                        break;
                        
                    default:
                        
                        include "admin-includes/view-all-posts.php";
                        
                        break;
                        }


                        ?>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "admin-includes/admin-footer.php"; ?>