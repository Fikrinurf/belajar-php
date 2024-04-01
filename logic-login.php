<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    header("Location: listing-product.php");
    exit;
} else {
    header("Location: index.php?error=1");
    exit;
}
