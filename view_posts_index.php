
<?php
    include("header.php");
    include("database.php");
?>

<?php
    $category = '';
    if (isset($_GET['category'])) {
        $category = $_GET['category'];
    }

    if ($category) {
        $query = "SELECT * FROM posts WHERE category = ? ORDER BY created_at DESC";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $category);
    } else {
        $query = "SELECT * FROM posts ORDER BY created_at DESC";
        $stmt = $conn->prepare($query);
    }
    $stmt->execute();
    $result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Your Posts | Insight Globe</title>
        <meta name="description" content="View all your posts">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/header_style.css">
        <link rel="stylesheet" href="CSS/view_posts_style.css">
    </head>
    <body>
        <div class="container my-5">
            <h1 class="mb-4">Your Posts</h1>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="post">
                        <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                        <p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
                        <p>Category: <?php echo htmlspecialchars($row['category']); ?></p>
                        <a href="view_post_index.php?id=<?php echo $row['id']; ?>">Read More</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>You haven't posted anything yet.</p>
            <?php endif; ?>
        </div>

        
        <?php
            include("footer_index.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

<?php
    $stmt->close();
    $conn->close();
?>
