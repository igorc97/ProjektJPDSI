{extends file="main.tpl"}
{block name = content}

<p id="idk">
<form action="{$conf->action_root}calcCompute" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
		<label for="id_x">Kwota: </label>
		<input id="id_x" type="text" name="x" value="{$form->x}" />
		<label for="id_y">Na ile lat?:  </label>
		<input id="id_y" type="text" name="y" value="{$form->y}" />
        <label for="id_z">Oprocentowanie: </label>
        <input id="id_z" type="text" name="z" value="{$form->z}" />
	</fieldset>
    <input type="submit" id="przycisk" value="Oblicz" class="pure-button pure-button-primary"/>
</form>
</p>

<pre><code id="kod">
Tu zostanie wyświetlony wynik :)
    {if isset($res->result)}
    {$res->result}
    {/if}

    {* wyświeltenie listy błędów, jeśli istnieją *}
    {if $msgs->isError()}
    Wystąpiły błędy:
    {$err}
    {/if}

    {* wyświeltenie listy informacji, jeśli istnieją *}
    {if $msgs->isInfo()}
    Informacje:
    {$inf}
    {/if}

    {if isset($res->result)}
    Wynik:
    {$res->result}
    {/if}
<!--TODO: Poprawić to! -->
</code></pre>
{*	TODO: <span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>*}
{/block}

