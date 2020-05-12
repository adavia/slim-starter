<?php 

try {
    $dotenv = Dotenv\Dotenv::createImmutable(base_path());
    $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}
