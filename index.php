<?php


 $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

 $parlength = strlen($paragraph);

 $tocensor = $_GET['tocensor'];

$censored = str_ireplace($tocensor, "***", $paragraph);

 $censorlength = strlen($censored);


?>


<h1>Paragrafo non censurato</h1>
<h2><?php echo $paragraph  ?></h2>
<h1>Lunghezza non censurata</h1>
<h3><?php echo $parlength  ?></h3>

<h1>Paragrafo censurato</h1>
<h2><?php echo $censored  ?></h2>
<h1>Lunghezza censurata</h1>
<h3><?php echo $parlength  ?></h3>