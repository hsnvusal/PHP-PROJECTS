<?php
//try {
//    $db = new PDO("mysql:host=localhost;dbname=users","root","");
//    $db->query("SET CHARACTER SET utf8");
//
//}
//catch(PDOException $e) {
//    echo $e->getMessage();
//}
//
////$db->query("insert into user(isim,soyisim,email,sifre,kayit_tarihi) values ('vusal','hesenov','vusal@gmail.com','123456','".date("Y-m-d")."')");
//
//$query = $db->prepare("insert into user set isim = ? , soyisim = ?,email = ?,sifre = ? ,kayit_tarihi = ?");
//$insert = $query->execute(array("Vusal","Hesenov","vusalupdated@gmail.com","1234",date("Y-m-d")));

//if ($insert) {
//    $lastId  = $db->lastInsertId();
//    echo "Son eklenen userin Id-si: " . $lastId;
//}
//else {
//    echo "Veri eklenemedi";
//}

//$sorgu = $db->prepare("select * from user where id = :id");
//$deger = 4;
//$sorgu->bindParam(":id",$deger,PDO::PARAM_INT);
//$sorgu->execute();
//$result = $sorgu->fetch(PDO::FETCH_ASSOC);
//print_r($result);

//if ($_POST) {
//    $id = intval($_POST['id']);
//    if (is_numeric($id)) {
//        $sorgu = $db->query("select * from user where id='$id'")->fetch(PDO::FETCH_ASSOC);
//        if ($sorgu !== false) {
//            echo $sorgu['isim'];
//        } else {
//            echo "Veri bulunamadı.";
//        }
//    }
//    else {
//        echo "Bu bir sayi degil";
//    }
//}

//$str = '<h1>Hello</h1>';
//echo $str;

//try {
//    $db = new PDO("mysql:host=localhost;dbname=userss;charset=utf8","root","");
//}
//catch (PDOException $e) {
//    echo $e->getMessage();
//}
//
//
//switch (isset($_GET['mode']) ? $_GET['mode'] : '')
//{
//    case 'ekle':
//        if ($_POST)
//        {
//
//        $isim = strip_tags($_POST['isim']);
//        $soyisim = strip_tags($_POST['soyisim']);
//        $email = strip_tags($_POST['email']);
//        $sifre = strip_tags($_POST['sifre']);
//        if ($isim !="" and $soyisim!="" and $email!="" and $sifre!="")
//        {
//            $count = $db->query("select * from kullanici where email = '".$email."'")->rowcount();
//            if ($count == 0)
//            {
//                $ekle = $db->prepare("insert into kullanici(isim,soyisim,email,sifre) values (?,?,?,?)");
//                $start = $ekle->execute(array($isim,$soyisim,$email,md5($sifre)));
//                if ($start) {
//                    echo '{"statu":"yes","msg":"kayit oldunuz"}';
//                }
//                else {
//                    echo '{"statu":"no","msg":"ekleme islemi olmadi"}';
//                }
//            }
//            else {
//                echo '{"statu":"no","msg":"Boyle bir kullanici var"}';
//            }
//        }
//        }
//
//        else {
//            echo '{"statu":"no","msg":"Lutfen tum alanlari doldurunuz"}';
//        }
//        break;
//    case 'sil':
//        if ($_POST) {
//            $id = intval($_POST['id']);
//            if ($id!=0) {
//
//            $count = $db->query("select * from kullanici where id='".$id."'")->rowCount();
//            if ($count ==0)
//            {
//                echo '{"statu":"no","msg":"boyle bir kullanci yok"}';
//            }
//            else {
//                $sil = $db->prepare("delete from kullanici where id= :id");
//                $sil->bindParam(":id",$id,PDO::PARAM_INT);
//                $silindi = $sil->execute();
//                if ($silindi)
//                {
//                    echo '{"statu":"yes","msg":"Kullanici silindi"}';
//                }
//                else {
//                    echo '{"statu":"no","msg":"Kullanici silinemedi"}';
//                }
//
//            }
//            }
//            else {
//                echo '{"statu":"no","msg":"Kullanici idsi tanimsiz"}';
//            }
//        }
//
//
//        break;
//    case 'duzenle':
//        if ($_POST)
//        {
//            $id = intval($_POST['id']);
//            $isim = strip_tags($_POST['isim']);
//            $soyisim = strip_tags($_POST['soyisim']);
//            if ($isim!="" and $soyisim!="" and $id!=0)
//            {
//                $c = $db->query("select * from kullanici where id='".$id."'")->rowCount();
//                if ($c!=0)
//                {
//                    $sorgu  = $db->prepare("update kullanici set isim = ?,soyisim = ? where id = ?");
//                    $sorgu->execute(array($isim,$soyisim,$id));
//                    if ($sorgu)
//                    {
//                        echo '{"statu":"yes","msg":"Guncelleme basarili"}';
//                    }
//                    else {
//                        echo '{"statu":"yes","msg":"Guncelleme basarilisiz"}';
//                    }
//                }
//                else {
//                    echo '{"statu":"no","msg":"Boyle bir kullanici yok"}';
//                }
//            }
//            else {
//                echo '{"statu":"no","msg":"Bilgileri kontrol ediniz"}';
//            }
//        }
//        break;
//    case 'list':
//        $sorgu = $db->prepare("select * from kullanici");
//        $sorgu->execute();
//        $cek = $sorgu->fetchAll(PDO::FETCH_ASSOC);
//        $returnArray = [];
//        if (count($cek)!=0)
//        {
//            foreach ($cek as $key=>$value)
//            {
//                $returnArray[$key]['id'] = $value['id'];
//                $returnArray[$key]['isim'] = $value['isim'];
//                $returnArray[$key]['soyisim'] = $value['soyisim'];
//            }
//            echo json_encode($returnArray);
//        }
//        else {
//            echo json_encode($returnArray);
//        }
//        break;
//    case 'teklist':
//        if ($_POST)
//        {
//            $id = intval($_POST['id']);
//            if ($id!=0)
//            {
//                $control = $db->query("select * from kullanici where id= '".$id."'")->rowCount();
//                if ($control!=0)
//                {
//                    $sorgu = $db->prepare("select * from kullanici where id = :id");
//                    $sorgu->bindParam(":id",$id,PDO::PARAM_INT);
//                    $sorgu->execute();
//                    $cek = $sorgu->fetch(PDO::FETCH_ASSOC);
//                    $array['isim'] = $cek['isim'];
//                    $array['email'] = $cek['email'];
//                    $array['sifre'] = $cek['sifre'];
//                    $array['id'] = $cek['id'];
//                    echo json_encode($array);
//
//                }
//                else {
//                    echo '{"statu":"no","msg":"boyle kullanici yok"}';
//                }
//            }
//            else {
//                echo '{"statu":"no","msg":"id hatali"}';
//            }
//        }
//        break;
//        default :
//            break;
//}

//class FirstClass
//{
//    public $isim = "Vusal";
//    public function  FirstClassMethod()
//    {
//        echo  "I am a First class method";
//    }
//}
//
//class SecondClass extends FirstClass
//{
//    public function Give()
//    {
//        $this->FirstClassMethod();
//    }
//}
//
//
//$nesne = new SecondClass();
//echo $nesne->Give();
//
//


//class SecondClass extends IlkSinif
//{
//    public $isim;
//    public $soyisim;
//    public $yas;
//    function __construct($isim,$soyisim,$yas)
//    {
//        $this->isim = $isim;
//        $this->soyisim = $soyisim;
//        $this->yas = $yas;
//
//    }
//    public function  getir()
//    {
//        echo "Isim: ".$this->isim."Soyisim: ".$this->soyisim."Yas: ".$this->yas;
//    }
//}
//
//$secondclass = new SecondClass("Vusal","Hasanov",20);
//$secondclass->getir();
//require_once 'birinciSinif.php';
//
//class IkinciSinif extends IlkSinif
//{
////    public static $isim = "ali";
//
//    public function Getir()
//    {
//        echo parent::Siteismi;
//    }
//    public function x()
//    {
//        echo "Ben x`im";
//    }
//}
//
//$class = new IkinciSinif();
//$class->Getir();

//abstract class  Money
//{
//    abstract  public  function maas($deger);
//    public function  maasHesabla($deger)
//    {
//         return $this->maas($deger)*2;
//    }
//}
//
//class Personel extends Money {
//    public function maas ($deger)
//    {
//        return $deger;
//    }
//}
//
//class Insan extends Money {
//    public function maas ($deger)
//    {
//        return $deger;
//    }
//}
//
//$insan = new Insan();
//$personel = new Personel();
//
//echo "Bu insanin maasi : ".$insan->maasHesabla("1200");
//echo "Bu personelin maasi : ".$personel->maasHesabla("1500");
//
//namespace birinci;
//class birinci class {
//
//}


require_once  'config/baglanti.php';
if(!$sessionManager->kontrol())
{
    helper::Yonlendir("islemler/giris.php");
    die();
}
$kBilgi = $sessionManager->kullaniciBilgi();

?>
<div class="title ">Merhaba <?php echo $kBilgi['isim'];?></div>
<a href="islemler/cikis.php">Çıkış</a>



