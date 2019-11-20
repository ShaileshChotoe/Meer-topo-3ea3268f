<?php

$arrayName = array();

echo "Hoevel landen wil je toevoegen? " . "\n";

$ammountLanden = readline();

if (!is_numeric($ammountLanden))
{
  echo $ammountLanden . ' is geen getal';
  exit();
}

for ($i=0; $i < $ammountLanden; $i++)
{
  $array = array('Land' => '', 'Hoofdstad'=> '');
  echo "Wat is de eerste land? \n";
  $array['Land'] = readline();
  echo "Wat is de hoofdstad? \n";
  $array['Hoofdstad'] = readline();
  array_push($arrayName, $array);
}

// for ($i=0; $i < $ammountLanden; $i++)
// {
//   echo 'De hoofdstad van ' . $arrayName[$i]['Land'] . ' is ' . $arrayName[$i]['Hoofdstad'] . "\n";
// }

foreach ($arrayName as $key => $val)
{
  echo "De hoofdstad van " . $val['Land'] . ' is ' . $val['Hoofdstad'] . "\n";
}


 ?>
