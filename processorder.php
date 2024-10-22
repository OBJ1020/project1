<?php include('includes/header.php'); ?>
<div class="signup-content">
    <h2>Sign Up for a Course</h2>
    <form action="scripts/processorder.php" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required>

        <label for="course">Select Course:</label>
        <select name="course" required>
            <option value="Guitar">Guitar</option>
            <option value="Piano">Piano</option>
            <option value="Drums">Drums</option>
            <option value="Vocal Training">Vocal Training</option>
        </select>

        <input type="submit" value="Sign Up">
    </form>
</div>
<?php include('includes/footer.php'); ?>
