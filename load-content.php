<?php
// Example content array (replace with database content in a real application)
$contents = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "Proin ut ligula a sapien tristique ultricies.",
    "Donec faucibus libero nec magna facilisis, at dignissim dolor interdum.",
    "Vivamus tincidunt magna nec venenatis sodales.",
    "Praesent bibendum ligula et felis ultrices, vitae hendrerit augue consectetur.",
    "Mauris vitae eros ac eros lacinia sodales.",
    "Fusce ut nisi et leo convallis lacinia.",
    "Vestibulum at risus vitae ipsum viverra vehicula.",
    "<h1>Hello</h1>",
];

// Pagination logic
$items_per_page = 4;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$start_index = ($page - 1) * $items_per_page;
$end_index = min($start_index + $items_per_page, count($contents));

if ($start_index < count($contents)) {
    for ($i = $start_index; $i < $end_index; $i++) {
        echo '<div class="content">' . htmlspecialchars($contents[$i]) . '</div>';
    }
}
