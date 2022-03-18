<?php

$name = 'robiul islam';

$code = password_hash($name, PASSWORD_DEFAULT);

echo substr($code, 10, 10);



?>