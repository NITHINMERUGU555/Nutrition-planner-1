<?php include 'includes/header.php'; ?>

<section class="hero">
  <h2>Contact Us</h2>
  <p>Have questions, suggestions, or feedback? We'd love to hear from you.</p>
</section>

<section class="contact-form">
  <form action="save_contact.php" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" required></textarea><br><br>

    <button type="submit">Submit</button>
  </form>
</section>

<?php include 'includes/footer.php'; ?>
