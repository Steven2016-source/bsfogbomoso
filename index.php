<?php
$page_title = "Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>BAPTIST STUDENT FELLOWSHIP OGBOMOSO CCCONFERENCE</h1>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Welcome to Our Website</h2>
            <img src="/Users/mac/Desktop/bsf-removebg-preview copy.png" alt="BSF Logo" style="max-width: 100%; height: auto;">
            <p>This is the homepage of our simple PHP website.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> BSFOGBOMOSO | CONFERENCE</p>
    </footer>
</body>
</html>
