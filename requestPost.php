<?php

$text = $_POST['action'];

$response = file_get_contents('https://hook.newpath.integromat.cloud/zpjom8grr3rfgk3xbc6us68xtc6neoa5', false, stream_context_create([
    'http' => [
        'method' => 'POST',
        'header'  => "Content-type: application/x-www-form-urlencoded",
        'content' => http_build_query([
            'atcion' => $text
        ])
    ]
]));

$needle = 'say":"';

if (strripos($response, $needle)>0)
	{
	$speachText1 = stristr($response, $needle, false);
	$speachText1 = substr($response, 8);
	$speachText1 = stristr($speachText1, '"', true);
	}
	else { $speachText1 = ' '; }
	
echo $speachText1;
?>

