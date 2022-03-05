<?php
$n1 = 5;
$n2 = 5;

$client = new SoapClient('http://www.dneonline.com/calculator.asmx?WSDL');

echo $n1.' + '.$n2.' = '.$client->Add([
    'intA' => $n1,
    'intB' => $n2,
])->AddResult;

?>