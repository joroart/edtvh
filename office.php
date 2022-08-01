<!DOCTYPE html>

<?php
//$speachText1 = !empty($_POST['speachText1']) ? $_POST['speachText1'] : 'hello, welcome';

$response = file_get_contents('https://hook.newpath.integromat.cloud/zpjom8grr3rfgk3xbc6us68xtc6neoa5', false, stream_context_create([
    'http' => [
        'method' => 'POST',
        'header'  => "Content-type: application/x-www-form-urlencoded",
        'content' => http_build_query([
            'atcion' => 'newuser'
        ])
    ]
]));

$needle = 'say":"';
$speachText1 = stristr($response, $needle, false);
$speachText1 = substr($response, 8);
$speachText1 = stristr($speachText1, '"', true);

?>

<html lang="en">
<head>
  <title>office</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <!-- Search Engines -->
  <meta name="description" content="office female animation WebGL and HTML5 technologies.">
  <meta name="author" content="JR">
  
  <script src="v3d.js"></script>
  <script src="office_female1.js?newversion"></script> 

  <link rel="stylesheet" type="text/css" href="office_female1.css">
</head>

<body>

  
   <script>
  var speachText = "<?php echo $speachText1 ?>";
  console.log("speachText="+speachText);
   </script>
   
   <div id="loadingScreen" style="position: fixed; transform: translate(-50%, -50%); left: 50%; top: 50%">
		<p style="text-align: center;  vertical-align: middle; font-size: 2em">un instant, ça va être génial</p>
   </div>
  
  
  <div id="v3d-container">
	<div id="userInputField" style="display: none; bottom: 3%; position: fixed; left: 50%; transform: translate(-50%, -50%);">
    <input id="inputField" type="text" size="40" >
	<button id="userButton" onclick="userClickButton()">Ok</button>
	</div>
  </div>
</body>

 <script src="TTLaudio.js"></script>

</html>
