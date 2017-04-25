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
                        
                        <div class="col-xs-6">
                            
                            <?php insert_categories(); ?>
                            
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add a Category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                                </div>
                            </form>
                            
                            <?php 
                            
                            if(isset($_GET['edit'])) {
                                $cat_id = $_GET['edit'];
                                include "admin-includes/edit-categories.php";
                            }
                            ?>
                        
                        </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php findAllCategories(); ?>
                                    <?php deleteCategories(); ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "admin-includes/admin-footer.php"; ?>