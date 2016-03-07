<?php

include_once('../includes/CamsDatabase.php');

$db = ConnectionFactory::getFactory()->getConnection();
$query = $db->prepare("SELECT Wrq,Descr FROM ".ConnectionFactory::FiscDB().".dbo.fmdfwrq");

$query->execute();

$result=$query->fetchAll(PDO::FETCH_ASSOC);

$Wrqs = json_encode($result);

echo $Wrqs;