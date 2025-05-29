<?php
if ($_POST){
    $name = mHelper::postVariable('name');
    $surname = mHelper::postVariable('surname');
    $email = mHelper::postVariable('email');
    $password = mHelper::postVariable('password');
    $gender = mHelper::postIntegetVariable('gender');

    if ($name!="" and $surname!='' and $email!="" and $password!='')
    {
        if (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $returnArray['message'] = 'email Formati HATALI';
            return;
        }
        $c = $db->db->prepare('select * from users where email = ?');
        $c->execute(array($email));
        $count =  $c->rowCount();
        if ($count!=0)
        {
            $returnArray['message'] = 'Bu email kullanimda';
            return;
        }
        $password = md5($password);
        $date = date('Y-m-d');
        $eklemeSorgu = $db->db->prepare('insert into users(name,surname,email,password ,gender,date) values(?,?,?,?,?,?)');
        $result = $eklemeSorgu->execute(array($name,$surname,$email,$password,$gender,$date));
        if ($result)
        {
            $returnArray['status'] = true;
            $returnArray['message'] = 'Kullanici Basari ile eklendi';
        }
        else{
            $returnArray['message'] = 'Kullanici eklenemedidi';
        }
    }
    else {
        $returnArray['status'] = false;
        $returnArray['message'] = 'Lutfen tum alanlari doldurunuz';
    }
}
