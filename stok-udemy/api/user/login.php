<?php

if ($_POST)
{
    $email = mHelper::postVariable('email');
    $password = mHelper::postVariable('password');

    if ($email == "" and $password =='')
    {
        $returnArray['message'] = 'Lutfen Tum alanlari giriniz';
        return;
    }

    $c = $db->db->prepare("select * from users where email = ? ");
    $c->execute(array($email));
    $count = $c->rowCount();
    if ($count == 0)
    {
        $returnArray['message'] = 'Bu email kayitli deyil';
        return;
    }

    $w = $db->db->prepare("select * from users where email = ? ");
    $w->execute(array($email));
    $result = $c->fetch(PDO::FETCH_ASSOC);
    if ($result['password'] != md5($password))
    {
        $returnArray['message'] = 'Sifreniz Hatali';
        return;
    }
    $returnArray['status'] = true;
    $returnArray['userId'] = $result['id'];
    $returnArray['message']  = 'Basarili bir sekilde giris yaptiiniz';

}