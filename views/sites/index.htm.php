<?php declare(strict_types=1);

use Asterios\Core\Logger;

Logger::forge()->info('View hit: index.html.php. See views/sites/index.htm.php for more info.');
$data = $this->data;

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['asterios-php']; ?> – Modern PHP Framework</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/asterios-app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="#">
            <img src="/assets/images/asteriosphp-logo.png" alt="<?php echo $data['asterios-php']; ?> Logo" class="logo me-2">
        </a>
    </div>
</nav>
<section class="hero">
    <div class="container">
        <h1><?php echo $data['headline']; ?></h1>
        <p class="mt-3">The <?php echo $data['asterios-php']; ?> Framework is a simple and flexible PHP 8.+ framework, inspired from the best features of other frameworks, in a modern and elegant way.</p>
        <div class="mt-4">
            <a href="#" class="btn btn-primary btn-lg">Get started</a>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <h4 class="mb-3">⚡ Fast</h4>
                    <p>Optimized core structure for maximum performance and minimal latency.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card text-center">
                    <h4 class="mb-3">🧩 Modular</h4>
                    <p>CClean architecture with clear separation of routing, views, and logic.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <h4 class="mb-3">🔒 Secure</h4>
                    <p>Modern security standards and best practices directly integrated.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 text-center">
    <div class="container">
        <h2 class="mb-3">Ready to get started?</h2>
        <p class="mb-4 text-muted">Build your next project with <?php echo $data['asterios-php']; ?>.</p>
        <a href="#" class="btn btn-primary btn-lg">Start now</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <p>© <?php echo date('Y'); ?> <?php echo $data['asterios-php']; ?>. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
