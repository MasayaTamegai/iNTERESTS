<div class="col-md-4">
    <div class="well">

        <?php 

        $query = "SELECT * FROM categories";
        $select_categories_sidebar = mysqli_query($connection, $query);

        ?>

        <h4>Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">

                    <?php 

                    while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                        $cat_title = $row['cat_title'];

                        echo "<li><a href = '#'>{$cat_title}</a></li>";

                    }

                    ?>

                </ul>
            </div>
        </div>

    </div>
</div>
</div> <!-- End of Row -->