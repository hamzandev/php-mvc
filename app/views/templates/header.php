<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>css/bootstrap.css">
    <title><?= $data['judulHalaman'] ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= BASEURL ?>">HamzanDev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link navMenu" href="<?= BASEURL ?>">Home</a>
                    <a class="nav-link navMenu" href="<?= BASEURL ?>gallery">Gallery</a>
                    <a class="nav-link navMenu" href="<?= BASEURL ?>contact">Contact</a>
                    <a class="nav-link navMenu" href="<?= BASEURL ?>mahasiswa">Mahasiswa</a>
                    <a class="nav-link navMenu" href="<?= BASEURL ?>about">About</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Container Root -->
    <div class="container py-4">