<?php include('includes/header.php'); ?>
<div class="contact-content">
    <h2>Contact Us</h2>
    <form action="scripts/processorder.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea>

        <input type="submit" value="Submit">
    </form>
</div>
<?php include('includes/footer.php'); ?>
