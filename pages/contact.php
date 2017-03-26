<?php
echo "<h1>Formulaire de contact</h1>
<form id='contact' method=POST action='save.php'>
	<p><label for='nom'>Nom :</label><input type='text' id=nom name='nom' tabindex='1' /></p>
	<p><label for='email>Email :</label><input type='text' id='email' name='email' tabindex='2' /></p>

	<p><label for='message'>Message :</label><textarea id='message' name='message' tabindex='4' cols='50' rows='8'></textarea></p>

	<div style='text-align:center;><input type='submit' name='envoi' value='envoyer' /></div>
</form>";

?>