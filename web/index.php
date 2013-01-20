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
    </style>
</head>
<body>
<p>Enter your information in the form below to send me a message!</p>
<form method="post" action="process.php">
    <label>Name: <input type="text" name="name" /></label>
    <label>Email: <input type="text" name="email" /></label>
    <label for="contact_message">Message:</label>
    <textarea id="contact_message" name="message"></textarea>

    <input type="submit" value="Contact Me!" />
</form>
</body>
</html>
