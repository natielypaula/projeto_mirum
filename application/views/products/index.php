
<a href="/products/new" class="btn btn-success">Adicionar novo</a>
<br> <br>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Preço</th>
            <th>Armazem</th>
            <th>Categoria</th>
            <th class="text-right">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) :  ?>
        <tr> 
            <td><?php echo $product->id;?></td>
            <td><?php echo $product->name;?></td>
            <td><?php echo $product->price;?></td>
            <td><?php echo $product->store;?></td>
            <td><?php echo $product->category;?></td>
            <td class="text-right">
                <a href="/products/edit/<?php echo $product->id;?>" class="btn btn-xs btn-info">Editar</a>
            </td>
        </tr>
        <?php endforeach;  ?>
    </tbody>
</table>