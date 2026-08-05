<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Empire Consultancy</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <div class="logo">Empire Consultancy</div>

    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="industries.html">Industries</a></li>
        <li><a href="case-studies.html">Case Studies</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<section class="hero">
    <h1>Contact Us</h1>
    <p>Let's discuss how we can help grow your business.</p>
</section>

<section class="services">

    <?php
    // Show success or error message after form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require_once "config/db.php";

        $name    = trim($_POST["name"]);
        $email   = trim($_POST["email"]);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        if (!empty($name) && !empty($email) && !empty($message)) {
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $subject, $message);

            if ($stmt->execute()) {
                echo '<p style="color: green; text-align: center; font-size: 1.1rem; margin-bottom: 20px;">
                        ✅ Thank you, <strong>' . htmlspecialchars($name) . '</strong>! Your message has been sent. We will get back to you soon.
                      </p>';
            } else {
                echo '<p style="color: red; text-align: center; margin-bottom: 20px;">
                        ❌ Something went wrong. Please try again.
                      </p>';
            }

            $stmt->close();
        } else {
            echo '<p style="color: orange; text-align: center; margin-bottom: 20px;">
                    ⚠️ Please fill in all required fields.
                  </p>';
        }
    }
    ?>

    <div class="service-container">

        <!-- Contact Info -->
        <div class="card">
            <h3>Get In Touch</h3>
            <p><b>Email:</b> info@empireconsultancy.com</p>
            <p><b>Phone:</b> +251 XXX XXX XXX</p>
            <p><b>Location:</b> Ethiopia</p>
            <p><b>Business Hours:</b> Mon - Fri (9:00 AM - 5:00 PM)</p>
        </div>

        <!-- Contact Form -->
        <div class="card">
            <h3>Send a Message</h3>

            <form method="POST" action="contact.php">
                <input type="text" name="name" placeholder="Your Name" required style="width:100%; padding:10px; margin:8px 0;">

                <input type="email" name="email" placeholder="Your Email" required style="width:100%; padding:10px; margin:8px 0;">

                <input type="text" name="subject" placeholder="Subject" style="width:100%; padding:10px; margin:8px 0;">

                <textarea name="message" placeholder="Your Message" rows="5" required style="width:100%; padding:10px; margin:8px 0;"></textarea>

                <button type="submit" class="btn" style="width:100%;">Send Message</button>
            </form>
        </div>

    </div>

</section>

<footer>
    <p>&copy; 2026 Empire Consultancy. All Rights Reserved.</p>
</footer>

</body>
</html>