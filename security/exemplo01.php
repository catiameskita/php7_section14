<?php
//Command Injection
//se formos usar funcções de sistema, como o systmem and exec tentar não usar dados dinâmicos
//se tal acontecer, tentar proteger com o escapeshellcmd

if($_SERVER["REQUEST_METHOD"] === 'POST'){

    //usar o escapeshelllarg
    $cmd = escapeshellarg($_POST["cmd"]);

    echo "<pre>";

    $c = system($cmd, $r);

    echo "</pre>";

}

?>

<form method="POST">

    <label for="name">Name</label>
    <input type="text" id="name" name="name"/><br/>
    <button type="submit">Submit</button>

</form>

