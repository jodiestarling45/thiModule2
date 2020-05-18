<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <h2 style="color: #4CAF50; text-align: center;font-family: 'Berlin Sans FB'"> product </h2>

    <nav class="w3-bar w3-black">
        <a href="index.php?page=" class="w3-button w3-bar-item">Home</a>
        <a href="#band" class="w3-button w3-bar-item">random</a>
        <a href="#tour" class="w3-button w3-bar-item">Tour</a>
        <a href="#contact" class="w3-button w3-bar-item">Contact</a>
        <div class="search-container">
            <form action="index.php">
                <input type="hidden" name="page" value="search">
                <input type="text" placeholder="Search.." name="key">
                <button type="submit">Submit</button>
            </form>
        </div>
    </nav>
    <p><a href="index.php?page=add"><button type="button" class="btn btn-dark"><i class="fa fa-home"></i>add new</button></a></p>
    <section class="w3-container w3-center w3-content" style="max-width:600px">
        <h2 class="w3-wide">TABLE</h2>
        <p class="w3-opacity"><i>product</i></p>
    </section>
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
                    <p><a href="index.php?page=update&id=<?php echo $product['id']?>"><button type="button" class="btn btn-dark"><i class="fa fa-folder"></i>update</button></a></p>
                    <p><a href="index.php?page=delete&id=<?php echo $product['id']?>"><button type="button" class="btn btn-dark"><i class="fa fa-trash"></i>delete</button></a></p>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
    <a href="#"><i class="fa fa-facebook-official"></i></a>
    <a href="#"><i class="fa fa-pinterest-p"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-flickr"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <p class="w3-medium">
        Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
    </p>
</footer>

</body>
</html>
