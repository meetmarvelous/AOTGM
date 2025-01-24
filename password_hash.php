<!DOCTYPE html>
<html>
<head>
    <title>Password Hash Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        .input-box, .output-box {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }
        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: #45a049;
        }
        .output-box {
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Password Hash Generator</h2>
    <form method="post">
        <input type="text" name="input_data" class="input-box" placeholder="Enter data to hash" required>
        <button type="submit" class="button">Generate Hash</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_data = $_POST['input_data'];
        // Using password_hash() to generate a secure hash
        $hashed_data = password_hash($input_data, PASSWORD_DEFAULT);
        echo '<input type="text" id="hash_output" class="output-box" value="' . htmlspecialchars($hashed_data) . '" readonly onclick="copyToClipboard()">';
    }
    ?>

    <script>
        function copyToClipboard() {
            var copyText = document.getElementById("hash_output");
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            document.execCommand("copy");
            alert("Copied the hash: " + copyText.value);
        }
    </script>
</div>

</body>
</html>
