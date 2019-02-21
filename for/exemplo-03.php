<?php 

echo "<select>";


for ($i=date("Y"); $i >= date("Y")-100 ; $i--) { 

	echo '<opiton value="'.$i.'">'.$i.'</option>';
}

echo "</select>";

 ?>