<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <h1>Kontak Saya</h1>
    <?php foreach ($alamat as $a) : ?>
    <ul>
        <li> <?= $a['tipe']; ?> </li>
        <li><?= $a['alamat']; ?> </li>
        <li><?= $a['kota']; ?> </li>
    </ul>
    <?php endforeach; ?>
</body>

</html>