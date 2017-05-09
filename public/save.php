<?php
echo "<form id='contact' method=POST action='save.php'>
<p><label for='nom'>Nom :</label><input type='text' id=nom name='nom' value= ".$_POST['nom']." /></p>
<p><label for='email'>Email :</label><input type='text' id='email' name='email' value=".$_POST['email']." /></p>

<p><label for='message'> Message :</label><textarea id='message' name='message' cols='50' rows='8' value=".$_POST['message']." ></textarea></p>
<input type='submit' name='envoi' value='valider'/>
</form>";