<?php

require_once '../config/baglanti.php';
require_once '../template/header.php';
?>
<h2>Giris Yap</h2>

<?php

if (isset($_COOKIE['giris']))
{
    $json = json_decode($_COOKIE['giris'],true);
    sessionManager::sessionOlustur($json);
    helper::Yonlendir(SITE_URL);
}
    if ($_POST)
    {
        $hatirla = @intval($_POST['hatirla']);
        $email = strip_tags($_POST['email']);
        $sifre = strip_tags($_POST['sifre']);
        if ($email!="" and $sifre !="")
        {
            $sifre = md5($sifre);
            $sorgu = $baglanti->db->prepare("select * from kullanici where email = :email and sifre = :sifre");
            $sorgu->bindParam(":email",$email,PDO::PARAM_STR);
            $sorgu->bindParam(":sifre",$sifre,PDO::PARAM_STR);
            $sorgu->execute();
            $sayi = $sorgu->rowCount();
            if ($sayi==0)
            {
                echo  "Bu bilgilere gore kullanici yok";
            }
            else
            {
                if ($hatirla == 1)
                {
                    $cookieArray = array("email"=> $email,"sifre"=>$sifre);
                    $cookieArray = json_encode($cookieArray);
                    setcookie("giris",$cookieArray,time() +36000,'/');
                }
                sessionManager::sessionOlustur(array("email"=>$email,"sifre"=>$sifre));
                helper::Yonlendir(SITE_URL);
            }
        }
        else
        {
            echo "Lutfen tum alanllari doldurun";
        }
    }
?>

<form action="" method="POST">

    <div class="form">
        <span>Email</span>
        <input type="email" name="email">
    </div>
    <div class="form">
        <span>Şifre</span>
        <input type="password" name="sifre">
    </div>

    <div class="form">
        <span>Beni Hatirla</span>
        <input type="checkbox" name="hatirla" value="1">
    </div>

    <div class="form">
        <button>Giris Yap</button>
    </div>
</form>