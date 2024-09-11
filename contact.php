<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kafika Bakery + Cafe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section id="contact-content">
        <h2>Get in Touch</h2>
        <form method="POST" action="contact.php">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>

            <input type="submit" value="Send Message">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $message = htmlspecialchars($_POST["message"]);
                echo "<p>Thank you, $name. We will get back to you soon at $email.</p>";
            }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Kafika Bakery + Cafe. All rights reserved.</p>
    </footer>
</body>
</html>