<h2>Novo Produto</h2>

<?php echo validation_errors(); ?>

<form action="/products/save" method="post">

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name"  class="form-control" placeholder="Nome" required/>
    </div>
    <div class="form-group">
        <label for="price">Preço</label> 
        <input type="number" name="price" class="form-control" placeholder="Preço" min="0.00" max="10000.00" step="0.01" required/>
    </div> 
    <div class="form-group">
        <label for="store_id">Armazem</label>
        <select class="form-control" id="store_id" name="store_id" required>
        <option></option>
        <?php foreach ($stores as $store) :  ?>
            <option value="<?php echo $store->id;?>"><?php echo $store->name;?></option>
        <?php endforeach;  ?>
        </select>
    </div>
    <div class="form-group">
        <label for="category_id">Categoria</label>
        <select class="form-control" id="category_id" name="category_id" required>
        <option></option>
        <?php foreach ($categories as $category) :  ?>
            <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
        <?php endforeach;  ?>
        </select>
    </div>
 
    <input type="submit" name="submit" value="Criar novo Produto" class="btn btn-primary" />

</form>