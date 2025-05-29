<?php

if ($_POST) {
    $id = mHelper::postIntegetVariable("id");
    $name = mHelper::postVariable('name');
    $surname = mHelper::postVariable('surname');
    $email = mHelper::postVariable('email');
    $password = mHelper::postVariable('password');
    $gender = mHelper::postIntegetVariable('gender');

    if ($name != "" and $surname != '' and $email != "" and $password != '') {
        $returnArray['message'] = 'Lutfen Tum alanlari doldurunuz';
        return;
    }

    $c = $db->db->prepare('select * from users where id = ?');
    $c->execute(array($id));
    $count = $c->rowCount();
    if ($count == 0) {
        $returnArray['message'] = 'Boyle bir Kullanici yok';
    }

    $cEmail = $db->db->prepare('select * from users where id = ? and email = ?');
    $cEmail->execute(array($id, $email));
    $countEmail = $cEmail->rowCount();
    if ($countEmail != 0) {
        $returnArray['message'] = 'Bu email Kullanimda';
    }
    $w = $db->db->prepare('select * from users where id = ?');
    $w->execute(array($id, $email));
    $result = $w->fetch(PDO::FETCH_ASSOC);
    if ($password == "")
    {
        $password = $result['password'];
    }
    else
    {
        $password = md5($result['password']);
    }

    $update = $db->db->prepare("update users set name = ? ,surname = ?,email = ?,password = ?, gender = ? where id = ? ");
    $updateResult = $update->execute(array($name,$surname,$email,$password,$gender,$id));

    if ($updateResult)
    {
        $returnArray['status'] = true;
        $returnArray['message'] = "Basari ile update oldu";
    }
    else
    {
        $returnArray['message'] = "Basari ile update olmadi";
    }



}