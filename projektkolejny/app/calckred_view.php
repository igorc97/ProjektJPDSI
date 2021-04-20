<?php
require_once dirname(__FILE__).'/../config.php';
?>

<p id="idk">
<form action="<?php print(_APP_ROOT); ?>/index.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
		<label for="id_x">Kwota: </label>
		<input id="id_x" type="text" name="x" value="<?php out($x) ?>" />
		<label for="id_y">Na ile lat?:  </label>
		<input id="id_y" type="text" name="y" value="<?php out($y) ?>" />
        <label for="id_z">Oprocentowanie: </label>
        <input id="id_z" type="text" name="z" value="<?php out($z) ?>" />
	</fieldset>
    <input type="submit" id="przycisk" value="Oblicz" class="pure-button pure-button-primary"/>
</form>
</p>

<?php
if (isset($messages)) {
    if (count ( $messages ) > 0) {
        echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 1em; background-color: #4d94ff; width:25em;">';
        foreach ( $messages as $key => $msg ) {
            echo '<li>'.$msg.'</li>';
        }
        echo '</ol>';
    }
}
?>

<pre><code id="kod">
Tu zostanie wyświetlony wynik :)

<?php if (isset($result)) {
    echo 'Miesięczny koszt kredytu to(powiedzmy, że): '.$result;
} ?>


</code></pre>



