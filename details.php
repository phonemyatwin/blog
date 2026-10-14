<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?php include 'components/connection.php' ?>
    <?php include 'components/header.php' ?>
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">This is post title</h3>
                            <a href="index.php" class="btn btn-outline-secondary btn-sm">Back</a>
                        </div>
                    </div>
                    <img src="https://placehold.co/600x300" alt="Post image" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3">
                            <p class="card-text mb-0">Author by <strong>This is post author</strong></p>
                            <p class="card-text mb-0">Viewer - <span class="badge bg-success">100</span></p>
                            <p class="card-text text-muted mb-0">2026-10-13</p>
                        </div>
                        <hr>
                        <p class="card-text">
                            This is post content. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </p>
                        <p class="card-text mb-0">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'components/footer.php' ?>
    <script src="js/bootstrap.js"></script>
</body>

</html>