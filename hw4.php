<?php
include_once 'function.php'; 
$count = new CountWords();
echo "The number of words in text is  ". $count -> countWords()."\n<br />";
echo $count -> printToTable()."\n<br />";