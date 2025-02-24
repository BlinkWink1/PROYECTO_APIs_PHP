<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$data = json_decode($result, true);

curl_close($ch);
?>

<head>
    <title>La próxima película de Marvel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="La próxima película de Marvel">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<body>
    <main>
        <pre style="font-size: 8px; overflow:scroll; height: 100px;">
            <?php var_dump($data); ?>
        </pre>

        <section>
            <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>" style="border-radius: 16px" />
        </section>

        <hgroup>
            <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
            <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
            <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
        </hgroup>
    </main>
    <style>
        :root {
            color-scheme: light dark;
     }
        body {
            display: flex;
            place-content: center;
        }
        section{
            display: flex;
            justify-content: center;
            text-align: center;
        }
        hgroup {
            flex-direction: column;
            display: flex;
            justify-content: center;
            text-align: center;
        }
</style>
    </body>