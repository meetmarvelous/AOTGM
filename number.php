<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phone Number Formatter</title>
</head>

<body>
  <h2>Phone Number Formatter</h2>
  <form method="post">
    <label for="number">Enter Phone Number:</label>
    <input type="text" id="number" name="number" placeholder="Enter phone number" required>
    <button type="submit">Format Number</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["number"])) {
    $number = $_POST["number"];

    function formatPhoneNumber($number)
    {
      // Remove any non-digit characters except '+'
      $number = preg_replace('/[^\d\+]/', '', $number);

      // Check if the number starts with +234
      if (strpos($number, '+234') === 0) {
        return '+234 ' . substr($number, 4, 3) . ' ' . substr($number, 7, 3) . ' ' . substr($number, 10);
      }
      // Check if the number starts with 0
      elseif (strpos($number, '0') === 0) {
        return substr($number, 0, 4) . ' ' . substr($number, 4, 3) . ' ' . substr($number, 7);
      }
      // Return the number unformatted if it doesn't match expected patterns
      return $number;
    }

    $number2 = formatPhoneNumber($number);
    echo "<h3>Formatted Number:</h3>";
    echo "<p><strong>$number2</strong></p>";
    echo "<button onclick=\"copyToClipboard('$number2')\">Copy</button>";
  }
  ?>

  <script>
    function copyToClipboard(text) {
      navigator.clipboard.writeText(text).then(() => {
        alert("Number copied to clipboard: " + text);
      });
    }
  </script>
</body>

</html>