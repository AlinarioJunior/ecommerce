<form>

<input type="text" name="nome">
<input type="text" name="sobrenome">
<input type="number" name="idade">
<input type="submit" name="OK">

</form>

<?php
if (isset($_GET)){

    foreach ($_GET as $key => $value) {
        
        echo "Nome do campo: ". $key . "<br>";
        echo "Valor do campo: ". $value . "<br>";
        echo "<hr>";

    }


}

?>