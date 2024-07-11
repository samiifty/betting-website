<?php include 'includes/header.php'; ?>

<section id="account" class="section">
    <h2>Account</h2>
    <?php if (isset($_SESSION['loggedin'])): ?>
        <div class="profile-management">
            <h3>Profile Management</h3>
            <form action="update_profile.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $_SESSION['username']; ?>">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                <button type="submit">Update Profile</button>
            </form>
        </div>
        <div class="transaction-history">
            <h3>Transaction History</h3>
            <ul>
                <li>Bet 1 - Win - $50</li>
                <li>Bet 2 - Loss - $20</li>
                <li>Deposit - $100</li>
            </ul>
        </div>
        <div class="deposit-withdraw">
            <h3>Deposit/Withdraw</h3>
            <button>Deposit Funds</button>
            <button>Withdraw Funds</button>
        </div>
        <div class="responsible-gambling">
            <h3>Responsible Gambling Tools</h3>
            <button>Set Betting Limits</button>
            <button>Self-Exclude</button>
            <button>Access Support</button>
        </div>
    <?php else: ?>
        <p>Please <a href="login.php">login</a> to view your account.</p>
    <?php endif; ?>
</section>

<?php include 'includes/footer.php'; ?>
