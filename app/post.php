<?php
    require('config/config.php');
    require('config/db.php');

    // get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // create query
    $query = "SELECT * FROM posts WHERE id=$id";

    // Get results
    $result = mysqli_query($conn, $query);

    // Fetch assoc data
    $posts = mysqli_fetch_assoc($result);

    // Free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);
?>
<?php include('inc/header.php'); ?>
    <div class="container">
        <div class="well">
            <h3><?php echo $posts['title']; ?></h3>
            <small>Created on <?php echo $posts['create_at']; ?></small>
            by <?php echo $posts['author']; ?>
            <p><?php echo $posts['body'];?> </p>
            <a href="<?php echo ROOT_URL;?>">Back</a>
        </div>
    </div>
</body>
</html>