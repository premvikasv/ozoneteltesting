<h1>hi</h1>
<?php include 'response.php' ?>
<?php
$r = new Response();
$r = new Response("start");
$cd=new CollectDtmf();
$cd->addPlayText("Please enter your pin number");

$r->addCollectDtmf($cd);

$r->sendSms("This is an sms message",9632820200);
?>