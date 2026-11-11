```php
<?php
require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/functions.php";

$pageTitle = $pageTitle ?? "My Portfolio";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($pageTitle) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/portfolio/assets/css/style.css?v=10">
</head>

<body>

<nav class="navbar navbar-expand-lg spatial-navbar fixed-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/portfolio/index.php">
            Burhan<span class="accent">.</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="/portfolio/index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/portfolio/skills.php">Skills & Education</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/portfolio/project.php">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/portfolio/contact.php">Contact</a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<main>
```