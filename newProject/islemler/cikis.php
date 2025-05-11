<?php

require_once '../config/baglanti.php';
if ($sessionManager->kontrol())
{
    print_r($_COOKIE);
    sessionManager::sessionSil();
    setcookie("giris",$cookieArray,time() - 36000);
    helper::Yonlendir("/giris.php");
}
else
{
    helper::Yonlendir("giris.php");
}

?>