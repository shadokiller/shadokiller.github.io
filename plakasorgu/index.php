<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Plaka Sorgu - ShadoKiller</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="https://shadokiller.repl.co/pepsiuretici/style.css">
    <style>
        .btn {
            padding: 12px 24px;
            font-size: 18px;
            background-color: #7471fe;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 20px;
            width: 100px;
            height: 46px;
        }

        .btn:hover {
            background-color: #CCCBFF;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .aarda {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .form {
            text-align: center;
        }

        .form label {
            display: block;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .form .btn {
            margin-top: 10px;
            width: 150px;
            height: 46px;
        }

        .disclaimer {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
        }

        .designer {
            font-size: 14px;
            text-align: center;
            margin-top: 30px;
            font-style: italic;
        }

        .designer a {
            color: #7471fe;
            text-decoration: none;
        }

        .designer a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            font-size: 36px;
            text-align: center;
            margin-top: 200px;
        }

    </style>
</head>
<body>
<div class="container">
    <?php
    function plaka_sorgula($plaka)
    {
        $sql_file = '75k_plaka.sql';
        $sql_content = file_get_contents($sql_file);
        $plaka_sorgu = "/INSERT INTO `75k_plaka` VALUES \(\d+, '$plaka', '([^']*)'/";
        preg_match($plaka_sorgu, $sql_content, $matches);
        if (isset($matches[1])) {
            $ad = $matches[1];
            return array(
                "plaka" => $plaka,
                "adsoyad" => $ad
            );
        }
        return null;
    }

    $result = null;
    if (isset($_GET['plaka'])) {
        $plaka = $_GET['plaka'];
        $result = plaka_sorgula($plaka);
    }
    ?>
    <script>
        function temizleForm() {
            document.getElementById("myForm").reset();
            window.location.href = "https://shadokiller.repl.co/plakasorgu";
        }

        function buyukHarfeCevir() {
            var plakaInput = document.getElementById("plaka");
            plakaInput.value = plakaInput.value.toUpperCase();
        }
    </script>


    <div class="form">
        <h1>Plaka Sorgu</h1>
        <form action="plakasorgu" method="get" id="myForm">
            <label for="plaka">Plaka Giriniz:</label>
            <input type="text" placeholder="Örn: 01AA001" id="plaka" name="plaka" oninput="buyukHarfeCevir()" maxlength="10">
            <button type="submit" class="btn">Sorgula</button>
            <button type="button" class="btn" onclick="temizleForm()">Temizle</button>
        </form>
    </div>

    <?php
    if ($result) {
        echo '<br><br><br><br><br><br>';
        echo '<table>';
        echo '<tr><th><center>Plaka</center></th><th><center>Ad Soyad</center></th></tr>';
        echo '<tr><td><center>' . $result['plaka'] . '</center></td><td><center>' . $result['adsoyad'] . '</center></td></tr>';
        echo '</table>';
    } elseif (isset($_GET['plaka'])) {
        echo '<p class="error-message">Bu plaka bulunamadı.</p>';
    }
    ?>

    <p class="disclaimer">Yapılan sorguların sonucu asla log tutulmaz! Şu anda toplam yaklaşık olarak 75.000 plaka kaydı bulunmaktadır. Bu yüzden tüm sorgular sonuçlanmayabilir!</p>

</div>
 <h2> Telegram kanalımızda daha fazlası mevcut!                           ✓ <a href="https://t.me/shadoarsivim">t.me/shadoarsivim</a></h2>
</body>
</html>
