<!DOCTYPE html>
<html>
<head>
    <title>Email Form Test</title>
    <style>
        form label, input[type="submit"] {
            display: block;
        }
        textarea {
            width: 300px;
            height: 100px;
        }
        #error {
            background-color: red;
            border: 1px solid black;
            padding: 5px;
            color: white;
        }
    </style>
</head>
<body>
<?php require __DIR__.'/../views/'.$view.'.php'; ?>
</body>
</html>
