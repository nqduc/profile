<?php
   if( $_POST["location"] )
{
$location = $_POST["location"];
header( "Location:$location" );

exit();
}

?>
<html>
<body>

<p>thấy vui thì chơi thôi:</p>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<select name="location">

<option value="https://www.facebook.com">
facebook.com
</option>

<option value="http://www.google.com">
Google.com
</option>

</select>
<input type="submit" />
</form>

<p>thích cái nào em ơi:</p>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<select name="location">.

<option value="https://www.youtube.com">
youtube.com
</option>

<option value="https://www.w3schools.com/php/php_oop_destructor.asp">
w3schools.com
</option>

</select>
<input type="submit" />
</form

</body>
