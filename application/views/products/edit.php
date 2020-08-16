<h2>Editando página</h2>

<?php echo validation_errors(); ?>

<form action="/products/update/<?php echo $products->id; ?>" method="post">

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" class="form-control" placeholder="Nome" value="<?php echo $products->name;?>" />
    </div>
    <div class="form-group">
        <label for="price">Preço</label>
        <input type="number" name="price" class="form-control" placeholder="Preço" min="0.00" max="10000.00" step="0.01"
            value="<?php echo $products->price;?>" />
    </div>
    <div class="form-group">
        <label for="store_id">Armazem</label>
        <select class="form-control" id="store_id" name="store_id" value="<?php echo $products->store_id;?>">
            <option value="1">Armazem 1</option>
            <option value="2">Armazem 2</option>
        </select>
    </div>
    <div class="form-group">
        <label for="category_id">Categoria</label>
        <select class="form-control" id="category_id" name="category_id" value="<?php echo $products->category_id;?>">
            <option value="1">Categoria 1</option>
            <option value="2">Categoria 2</option>
        </select>
    </div>

    <input type="submit" name="submit" value="Atualizar Produto" class="btn btn-primary" />

    <a href="/products/delete/<?php echo $products->id;?>" class="btn btn-danger">Deletar</a>


</form>

<hr>
<a href="/products" class="btn btn-success">Voltar</a>