<?php
$robots = [
    [
            'isim' => 'YUBO',
            'turu' => 'AMR',
            'agirlik' => '80 kg',
            'guc' => '15V akü',
            'kamera turu' => 'Basit Kamera',
            'kare hizi' => '60 FPS',
            'robot hizi' => 'Maksimum 50cm/s',
    ],
    [
            'isim' => 'YUTO',
            'turu' => 'AGR',
            'agirlik' => '70 kg',
            'guc' => '17V akü',
            'kamera turu' => 'Basit Kamera',
            'kare hizi' => '50 FPS',
            'robot hizi' => 'Maksimum 60cm/s',
    ]
];


?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Tanıtımı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            background-color: green;
        }

        .sol{

            border: 1px solid black;
            border-radius: 5px;
            padding: 15px;
            width: 45%;
            background-color: gray;
        }
        
        .sag{
  
            border: 1px solid black;
            border-radius: 5px;
            padding: 15px;
            width: 45%;
            background-color: gray;
        }
        .img{
            border: 3px solid black;
            border-radius: 10px;
            width: 300px;
            height: 200px;
        }
        .img2{
            border: 3px solid black;
            border-radius: 10px;
            width: 300px;
            height: 200px;
        }
        .aciklama{
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="sol">
        <h2><?= htmlspecialchars($robots[0]['isim']); ?></h2>
        <img class="img" src="https://www.larsrobot.com/Files/lars-home.jpg" alt="dsdasdsadsaadasdsa">
        <div class=" aciklama">
            <p><h3>TÜRÜ:</h3><?= htmlspecialchars($robots[0]['turu']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Ağırlık:</h3><?= htmlspecialchars($robots[0]['agirlik']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Gücü:</h3><?= htmlspecialchars($robots[0]['guc']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Kamera Türü:</h3><?= htmlspecialchars($robots[0]['kamera turu']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Kare Hızı:</h3><?= htmlspecialchars($robots[0]['kare hizi']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Robot Hızı:</h3><?= htmlspecialchars($robots[0]['robot hizi']); ?></p>
        </div>
    </div>
    <div class="sag">
    <h2><?= htmlspecialchars($robots[1]['isim']); ?></h2>
    <img class="img2" src="https://dp9eps5gd5xd0.cloudfront.net/image-handler/ts/20220610051730/ri/1000/src/images/Article_Images/ImageForArticle_523_165485265023954.jpg" alt="dsadasdsa">
    <div class=" aciklama">
            <p><h3>TÜRÜ:</h3><?= htmlspecialchars($robots[1]['turu']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Ağırlık:</h3><?= htmlspecialchars($robots[1]['agirlik']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Gücü:</h3><?= htmlspecialchars($robots[1]['guc']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Kamera Türü:</h3><?= htmlspecialchars($robots[1]['kamera turu']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Kare Hızı:</h3><?= htmlspecialchars($robots[1]['kare hizi']); ?></p>
        </div>
        <div class=" aciklama">
            <p><h3>Robot Hızı:</h3><?= htmlspecialchars($robots[1]['robot hizi']); ?></p>
        </div>
    </div>
</body>
</html>