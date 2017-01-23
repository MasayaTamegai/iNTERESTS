<?php include "includes/db.php" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Balance</title>
        

    <!--NAVBAR-->
    <?php include "includes/navbar.php"; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <p>I keep my <a href="body.php">body</a> strong.</p>
            <p>I keep my <a href="mind.php">mind</a> sharp.</p>
            <p>My <a href="soul.php" target="_blank">soul</a> at ease.</p>

           <!-- Blog Entries -->
            <div class="col-md-8">
               
                <?php 
                
                $query = "SELECT * FROM posts";
                $select_all_posts_query = mysqli_query($connection, $query);
                
                while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];   
                
                ?>
                
                <h1 class="page_header">
                   Page Heading
                    <small>Secondary Text</small>
                </h1>
                
                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <hr>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                
                <?php } ?>
                
                
                
            </div> <!-- End of Blog Entries -->
        
        </div> <!-- End of Row -->
    
    </div> <!-- End of Page Content -->

</body>

<?php include "includes/footer.php"; ?>

</html>