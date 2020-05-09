<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "6bde10a78cce92542b9ae7916dae5b7e";
$scopes = "read_orders,write_products";
$redirect_uri = "https://localhost/shopifyapp/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://naked-press.myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();