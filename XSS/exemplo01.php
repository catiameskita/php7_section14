
<form method="POST">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>



</form>


<?php

//caso insira texto que possa ser considerado como tag ele utiliza-o como tal

if(isset($_POST['busca'])){

    //com esta função strip_tags não permite as tags, no entanto podemos permitir exceptções.

    //Echo strip_tags($_POST['busca'], "<strong><a>");

    //As tags são escritas no ecrã
    Echo htmlentities($_POST['busca']);

}





?>