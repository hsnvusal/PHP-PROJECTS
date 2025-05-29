<?php
$id = intval($_GET['id']);

$c = $db->db->prepare('select * from users where id = ?');
$c->execute(array($id));
$count = $c->rowCount();

if ($count==0)
{
    $returnArray['message'] = 'Boyle bir kullanici yok';
    return;
}

$w = $db->db->prepare('select * from users where id = ?');
$w->execute(array($id));
$result = $w->fetch(PDO::FETCH_ASSOC);
$returnArray['data'] = $result;
$returnArray['status'] = true;

