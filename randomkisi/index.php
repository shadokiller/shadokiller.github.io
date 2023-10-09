<?php
$url = "https://rp.burakgarci.net/api.php";
$content = file_get_contents($url);
$json = json_decode($content, true);

$isim = $json["isim"];
$soyisim = $json["soyisim"];
$profil_resmi = $json["profil_resmi"];
$cinsiyet = $json["cinsiyet"];
$yas = $json["yas"];
$dogum_tarihi = $json["dogum_tarihi"];
$sehir = $json["sehir"];
$telefon_numarasi = $json["telefon_numarasi"];
$adres = $json["adres"];
$kullanici_adi = $json["kullanici_adi"];
$eposta = $json["eposta"];
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kişi Oluşturucu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script type="text/javascript">
        document.write(unescape('%3C%64%69%76%20%69%64%3D%22%70%6F%70%75%70%31%22%20%63%6C%61%73%73%3D%22%6F%76%65%72%6C%61%79%22%3E%0A%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%70%6F%70%75%70%20%77%72%61%70%70%65%72%22%3E%0A%09%09%3C%68%32%3E%42%69%6C%67%69%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%3C%61%20%63%6C%61%73%73%3D%22%63%6C%6F%73%65%22%20%68%72%65%66%3D%22%23%22%3E%3C%64%69%76%20%63%6C%61%73%73%3D%22%69%63%6F%6E%20%64%6F%74%73%22%3E%3C%69%20%63%6C%61%73%73%3D%22%66%61%2D%73%6F%6C%69%64%20%66%61%2D%78%6D%61%72%6B%20%72%61%69%6E%62%6F%77%22%3E%3C%2F%69%3E%3C%2F%64%69%76%3E%3C%2F%61%3E%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6E%74%65%6E%74%22%3E%0A%09%09%09%42%75%20%53%63%72%69%70%74%20%3C%73%70%61%6E%20%63%6C%61%73%73%3D%22%72%61%69%6E%62%6F%77%22%3E%49%4C%47%41%5A%3C%2F%73%70%61%6E%3E%20%54%61%72%61%66%31%6E%64%61%6E%20%4B%6F%64%6C%61%6E%6D%31%73%74%69%72%20%44%65%73%74%65%6B%20%4F%6C%6D%61%6B%20%49%73%74%65%72%73%65%6E%69%7A%20%4E%75%64%65%20%41%74%61%62%69%6C%69%72%73%69%6E%69%7A%2E%0A%09%09%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%73%6F%63%69%61%6C%2D%69%63%6F%6E%73%22%3E%0A%20%20%20%20%20%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%74%2E%6D%65%2F%69%6C%67%61%7A%6F%73%22%20%74%61%72%67%65%74%3D%22%5F%62%6C%61%6E%6B%22%20%63%6C%61%73%73%3D%22%66%62%22%3E%3C%69%20%63%6C%61%73%73%3D%22%66%61%2D%73%6F%6C%69%64%20%66%61%2D%70%61%70%65%72%2D%70%6C%61%6E%65%22%3E%3C%2F%69%3E%3C%2F%61%3E%0A%20%20%20%20%20%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%74%77%69%74%74%65%72%2E%63%6F%6D%2F%69%6C%67%61%7A%6F%73%22%20%74%61%72%67%65%74%3D%22%5F%62%6C%61%6E%6B%22%20%63%6C%61%73%73%3D%22%74%77%69%74%74%65%72%22%3E%3C%69%20%63%6C%61%73%73%3D%22%66%61%62%20%66%61%2D%74%77%69%74%74%65%72%22%3E%3C%2F%69%3E%3C%2F%61%3E%0A%20%20%20%20%20%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%69%6E%73%74%61%67%72%61%6D%2E%63%6F%6D%2F%69%6C%67%61%7A%6F%73%22%20%74%61%72%67%65%74%3D%22%5F%62%6C%61%6E%6B%22%20%63%6C%61%73%73%3D%22%69%6E%73%74%61%22%3E%3C%69%20%63%6C%61%73%73%3D%22%66%61%62%20%66%61%2D%69%6E%73%74%61%67%72%61%6D%22%3E%3C%2F%69%3E%3C%2F%61%3E%0A%20%20%20%20%20%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%79%6F%75%74%75%62%65%2E%63%6F%6D%2F%63%68%61%6E%6E%65%6C%2F%55%43%65%76%68%6A%48%4E%35%36%6B%73%58%73%59%32%59%76%47%33%46%69%43%67%22%20%74%61%72%67%65%74%3D%22%5F%62%6C%61%6E%6B%22%20%63%6C%61%73%73%3D%22%79%74%22%3E%3C%69%20%63%6C%61%73%73%3D%22%66%61%62%20%66%61%2D%79%6F%75%74%75%62%65%22%3E%3C%2F%69%3E%3C%2F%61%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%3E%43%6F%70%79%72%69%67%68%74%20%26%63%6F%70%79%3B%20%49%4C%47%41%5A%4F%53%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%09%3C%2F%64%69%76%3E%0A%3C%2F%64%69%76%3E'));
    </script>
    <div class="wrapper">
        <div class="img-area">
            <div class="inner-area">
                <?= "<img src=\"{$profil_resmi}\">" ?>
            </div>
        </div>
      <a href="https://shadokiller.repl.co">
        <div class="icon arrow"><i class="fas fa-arrow-left"></i></div>
        <a href="#popup1">
            <div class="icon dots "> <i class="fas fa-ellipsis-v rainbow"></i> </div>
        </a>
        <?= "<div class=\"name\">{$isim} {$soyisim}</div>" ?>
        <div class="about">
            <div id="tc"></div>
        </div> <br>
        <div class="about">
            <?= "Cinsiyet : {$cinsiyet}" ?> <br>
            <?= "Yaş : {$yas}" ?> <br>
            <?= "Doğum Tarihi : {$dogum_tarihi}" ?> <br>
            <?= "Şehir : {$sehir}" ?> <br>
            <?= "Tel No : {$telefon_numarasi}" ?> <br>
            <?= "Adres : {$adres}" ?> <br>
            <?= "Kullanıcı Adı : {$kullanici_adi}" ?> <br>
            <?= "Mail : {$eposta}" ?> <br>
        </div>
        <div class="social-icons">
            <a href="erkek.php" class="erkek"><i class="fa-solid fa-mars"></i></a>
            <a href="index.php" class="karisik"><i class="fa-solid fa-mars-and-venus"></i></a>
            <a href="kadin.php" class="kadin"><i class="fa-solid fa-venus"></i></a>
            <a href="#" onclick="window.location.reload(true);" class="yenile"><i class="fa-solid fa-arrows-rotate"></i></a>
        </div>
    </div>
    <script type="text/javascript">
        var tcno = "" + Math.floor(900000001 * Math.random() + 1e8),
            list = tcno.split("").map(function(t) {
                return parseInt(t, 10)
            }),
            tek = list[0] + list[2] + list[4] + list[6] + list[8],
            cift = list[1] + list[3] + list[5] + list[7],
            tc10 = (7 * tek - cift) % 10;
        TC = "TC : "
        document.getElementById("tc").textContent = TC + tcno + ("" + tc10) + ("" + (cift + tek + tc10) % 10)
    </script>
  <link rel="stylesheet" type="text/css" href="https://shadokiller.repl.co/randomkisi/style.css">
</body>
</html>