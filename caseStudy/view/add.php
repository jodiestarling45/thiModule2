<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <h1>add new product</h1>
        <p>Please fill in this form to created.</p>
        <hr>

        <label for="email"><b>name :</b></label>
        <input type="text" placeholder="Enter name" name="name" required>

        <label for="psw"><b>type</b></label>
        <input type="text" placeholder="Enter type" name="type" required>

        <label for="psw-repeat"><b>price</b></label>
        <input type="text" placeholder="Repeat Price" name="price" required>
        <label for="psw-repeat"><b>number</b></label>
        <input type="text" placeholder="Repeat number" name="number" required>
        <label for="psw-repeat"><b>content</b></label>
        <input type="text" placeholder="Repeat content" name="content" required>

        <hr>


        <button type="submit" name="upload" class="registerbtn">enter</button>
    </div>

    <div class="container signin">
        <p></p>
    </div>
</form>

</body>
</html>