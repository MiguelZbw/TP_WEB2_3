{include file="header.tpl"}
<h1 class="list-group-item">Categorias</h1>
<ul>
    {foreach from=$categorias item=$categoria}
        <li class="list-group-item">deporte:{$categoria->deporte}</li>
        <li class="list-group-item">genero:{$categoria->genero}</li>
        <li class="list-group-item"></li>
        <button><a href="verCategoria/{$categoria->id}">visualizacion</a></button>
    {/foreach}
</ul>
<div class="mb-3">

<form action="filtrarCategoria/{$categoria->id}" method="post">
        <label class="form-label">Categoria</label>
        <select name="categoria">
            {foreach from=$categorias item=$categoria}
                <option value="{$categoria->id}">
                {$categoria->deporte|cat: " "|cat:$categoria->genero}
                </option>
            {/foreach}
        </select>
        <option value="asc">asc</option>
        <option value="desc">desc</option>
    <button type="text" class="btn-filtrar">Submit</button>
</form>

{include file="footer.tpl"}