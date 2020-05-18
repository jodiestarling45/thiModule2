<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>product </h2>
    <p><a href="index.php?page=add"><button type="button" class="btn btn-dark">add new</button></a></p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>type</th>
            <th>price</th>
            <th>number</th>
            <th>date</th>
            <th>content</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($productNumber as $key => $product):?>
        <tr>
            <td><?php echo $key++ ?></td>
            <td><?php echo $product['name']?></td>
            <td><?php echo $product['type']?></td>
            <td><?php echo $product['price']?></td>
            <td><?php echo $product['number']?></td>
            <td><?php echo $product['date']?></td>
            <td><?php echo $product['content']?></td>
            <td>
                <p><a href="index.php?page=update&id=<?php echo $product['id']?>"><button type="button" class="btn btn-dark">update</button></a></p>
                <p><a href="index.php?page=delete&id=<?php echo $product['id']?>"><button type="button" class="btn btn-dark">delete</button></a></p>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

</body>
</html>
