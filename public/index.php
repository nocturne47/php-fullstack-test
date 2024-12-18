<?php
require_once 'functions.php';  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle form submission (e.g., create new client)
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    // Call the create function
    $clientId = createClient($name, $slug, '0', '1', 'CP01', 'logo-url', 'address', '123456789', 'city');
    echo "Client created with ID: " . $clientId;
}
?>