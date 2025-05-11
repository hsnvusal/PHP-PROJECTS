<?php

require_once '../config/baglanti.php';
require_once '../template/header.php';
?>
<h2>Kayıt  Ol</h2>

<?php

if ($_POST) {
    $isim = strip_tags($_POST['isim']);
    $soyisim = strip_tags($_POST['soyisim']);
    $email = strip_tags($_POST['email']);
    $sifre = strip_tags($_POST['sifre']);
    $cinsiyet = intval($_POST['cinsiyet']);

    if ($isim != "" && $soyisim != "" && $email != "" && $sifre != "") {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $tarih = date("Y-m-d");
            $control = $baglanti->db->prepare("select * from kullanici where email = :email");
            $control->bindParam(":email",$email,PDO::PARAM_STR);
            $sayi = $control->rowCount();
            if ($sayi == 0)
            {
                $sorgu = $baglanti->db->prepare("insert into kullanici(isim,soyisim,email,sifre,cinsiyet,kayit_tarihi) values (?,?,?,?,?,?)");
                $ekle = $sorgu->execute(array($isim,$soyisim,$email,md5($sifre),$cinsiyet,$tarih));
                if ($ekle)
                {
                    $dizi = ["email"=>$email,"sifre"=>md5($sifre)];
                    sessionManager::sessionOlustur($dizi);
                    helper::Yonlendir("http://localhost/newProject/");
                }
                else {
                    echo  'Uzgunum aramiza hos geldin';
                }
            }
            else {
                echo 'Bu kullanici artik var';
            }
        } else {
            echo 'Email Formati dogru deyil';
        }
    } else {
        echo 'Lutfen tum alanlari giriniz';
    }

}
?>
<form action="" method="POST">
    <div class="form">
        <span>Isim</span>
        <input type="text" name="isim">
    </div>
    <div class="form">
        <span>Soyisim</span>
        <input type="text" name="soyisim">
    </div>
    <div class="form">
        <span>Email</span>
        <input type="email" name="email">
    </div>
    <div class="form">
        <span>Şifre</span>
        <input type="password" name="sifre">
    </div>
    <div class="form">
        <span>Cinsiyyet</span>
        <select type="text" name="cinsiyyet">
            <option value="0">Bay</option>
            <option value="1">Bayan</option>
        </select>
    </div>
    <div class="form">
        <button>Kayit Ol</button>
    </div>
</form>

<?php
require_once  '../template/footer.php';
?>

