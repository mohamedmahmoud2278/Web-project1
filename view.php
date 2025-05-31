<?php
$image = $_GET['image'] ?? null;
?>

<img src="images/<?php echo htmlspecialchars($image); ?>" alt="Product Image" style="width:100%; max-width:600px;">
