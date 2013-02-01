<?php

include 'header.php.inc';

#Open a file handle for reading
$fh=fopen('addresses.txt','r');

?>
<h1>Mailing List</h1>
<ul>
<?php
$line = null;
while (($line=fgets($fh))){
?>

<li><?=$line?></li>
<?php
}
?>
</ul>
<?php
fclose($fh);
include 'footer.php.inc';
?>
