<?php

$connectionUrl = getenv("postgres://default:d21ojFXVbAah@ep-rough-union-44345254-pooler.us-east-1.postgres.vercel-storage.com:5432/verceldb");
$username = getenv("default");
$password = getenv("d21ojFXVbAah");

try {
   

    // Extract host, port, and dbname from the parsed URL
    $host = "ep-rough-union-44345254-pooler.us-east-1.postgres.vercel-storage.com";
    $port = "5432";
    $dbname = "verceldb";

    // Build the DSN for PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

    // Establish the PDO connection
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
    ?>