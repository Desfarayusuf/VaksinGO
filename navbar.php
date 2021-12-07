<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between px-5 py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="/img/VaksinGO-logo.png">
        </a>
        <div class="nav-links">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="quota.php">QUOTA</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                <?php if (isset($_SESSION['user'])) : ?>
                    <li class="nav-item"><a class="nav-link btn-primary ml-3" href="logout.php">LOG OUT</a></li>
                <?php else : ?>
                    <li class="nav-item"><a class="nav-link btn-primary ml-3" href="login.php">SIGN IN</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>