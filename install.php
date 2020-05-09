<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "6c9e39c907e9d1d9ba853d1ee44a6970";
$scopes = "read_orders,write_products";
$redirect_uri = "https://localhost/shopifyapp/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://np2019.myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();