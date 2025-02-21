<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$data = json_decode($result, true);

curl_close($ch);

var_dump($data);
?>

<head>
    <title>La proxima pelicula de m Marvel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="La proxima pelicula de Marvel">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>


<main>

<pre style="font-size: 8px; overflow:scroll; height: 100px;">

<?php var_dump($data); ?>
</pre>

<section>
<img
    src="<?= echo $data["poster_url"];

    <h2>La proxima pelicula de Marvel</h2>
    />
</section>

</main>