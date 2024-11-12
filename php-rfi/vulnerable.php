<?php
if (isset($_GET['file'])) {
    include($_GET['file']);
} else {
    echo "Welcome to the vulnerable app!";
}
?>
