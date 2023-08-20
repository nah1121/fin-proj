<?php

    $hostname = "ep-rough-union-44345254-pooler.us-east-1.postgres.vercel-storage.com";
    $username = "default";
    $password = "d21ojFXVbAah";
    $dbname = "verceldb";

    try {
        $conn = new PDO("pgsql:host=$hostname;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    ?>