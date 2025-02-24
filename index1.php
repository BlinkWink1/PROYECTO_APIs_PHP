<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La próxima película de Marvel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary"> <div class="container mt-5">
        <div class="row justify-content-center"> <div class="col-md-8"> <div class="row align-items-center"> <div class="col-md-4 text-center"> <img src="<?= $data["poster_url"]; ?>" class="img-fluid rounded" alt="Poster de <?= $data["title"]; ?>">
                    </div>
                    <div class="col-md-8">
                        <h3 class="text-center text-md-start"><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
                        <p class="text-center text-md-start">Fecha de estreno: <?= $data["release_date"]; ?></p>
                        <p class="text-center text-md-start">La siguiente es: <?= $data["following_production"]["title"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>