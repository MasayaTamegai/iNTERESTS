<?php include "includes/db.php" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Balance</title>
        

    <!--HEADER & NAVBAR-->
    <?php include "includes/navbar.php"; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            
            <!-- Blog Entries -->
            <div class="col-md-8">
               
                <?php 
                
                $query = "SELECT * FROM posts WHERE post_status = 'published' ";
                $select_all_posts_query = mysqli_query($connection, $query);
                
                while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'],0,100);
                    $post_status = $row['post_status'];
                    
                    if($post_status == 'published') {
                
                ?>
                
                <h1 class="page_header">
                   Page Heading
                    <small>Secondary Text</small>
                </h1>
                
                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <img width="200" class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <hr>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                
                <hr>
                
                <?php } } ?>
                
                
                
            </div> <!-- End of Blog Entries -->
        
        
    
<?php include "includes/sidebar.php"; ?>

<hr>

<?php include "includes/footer.php"; ?>