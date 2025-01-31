<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = urlencode(trim($_POST['name']));
  $email = urlencode(trim($_POST['email']));
  $subject = urlencode(trim($_POST['subject']));
  $phone = urlencode(trim($_POST['phone']));
  $message = urlencode(trim($_POST['message']));

  $whatsapp_number = "2348154755551";
  $whatsapp_message = "Hello, my name is $name. You can reach me at $email.%0A%0A" .
    "Subject: $subject%0A%0A$message";

  $whatsapp_url = "https://api.whatsapp.com/send?phone=$whatsapp_number&text=$whatsapp_message";

  header("Location: $whatsapp_url");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact via WhatsApp</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 50px;
    }

    form {
      max-width: 400px;
      margin: auto;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 10px;
    }

    input,
    textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      margin-top: 15px;
      padding: 10px;
      background-color: #25D366;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #1da851;
    }
  </style>
</head>

<body>
  <h2>Contact Us via WhatsApp</h2>
  <form method="post">
    <label for="name">Your Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="subject">Subject:</label>
    <input type="text" name="subject" id="subject" required>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="4" required></textarea>

    <button type="submit" name="submit">Send via WhatsApp</button>
  </form>
</body>

</html>