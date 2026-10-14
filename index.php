<?php include "components/connection.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?php include 'components/header.php' ?>
    <main class="container my-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Our Posts</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Card Start -->
                    <div class="mb-3 col-12 col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h4 class="card-title mb-0">This is post title</h4>
                            </div>
                            <div class="card-body">
                                <img src="images/placeholder.svg" alt="Post image" class="card-img-top mb-3">
                                <p class="card-text">Author by This is post author</p>
                                <p class="card-text">Viewer - <span class="badge bg-success">100</span></p>
                                <p class="card-text mb-0">This is post content</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p class="text-muted mb-0">2026-10-13</p>
                                <a href="details.php" class="btn btn-dark btn-sm">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h4 class="card-title mb-0">This is post title</h4>
                            </div>
                            <div class="card-body">
                                <img src="images/placeholder.svg" alt="Post image" class="card-img-top mb-3">
                                <p class="card-text">Author by This is post author</p>
                                <p class="card-text">Viewer - <span class="badge bg-success">85</span></p>
                                <p class="card-text mb-0">This is post content</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p class="text-muted mb-0">2026-10-12</p>
                                <a href="details.php" class="btn btn-dark btn-sm">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h4 class="card-title mb-0">This is post title</h4>
                            </div>
                            <div class="card-body">
                                <img src="images/placeholder.svg" alt="Post image" class="card-img-top mb-3">
                                <p class="card-text">Author by This is post author</p>
                                <p class="card-text">Viewer - <span class="badge bg-success">42</span></p>
                                <p class="card-text mb-0">This is post content</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p class="text-muted mb-0">2026-10-11</p>
                                <a href="details.php" class="btn btn-dark btn-sm">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h4 class="card-title mb-0">This is post title</h4>
                            </div>
                            <div class="card-body">
                                <img src="images/placeholder.svg" alt="Post image" class="card-img-top mb-3">
                                <p class="card-text">Author by This is post author</p>
                                <p class="card-text">Viewer - <span class="badge bg-success">210</span></p>
                                <p class="card-text mb-0">This is post content</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p class="text-muted mb-0">2026-10-10</p>
                                <a href="details.php" class="btn btn-dark btn-sm">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h4 class="card-title mb-0">This is post title</h4>
                            </div>
                            <div class="card-body">
                                <img src="images/placeholder.svg" alt="Post image" class="card-img-top mb-3">
                                <p class="card-text">Author by This is post author</p>
                                <p class="card-text">Viewer - <span class="badge bg-success">67</span></p>
                                <p class="card-text mb-0">This is post content</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p class="text-muted mb-0">2026-10-09</p>
                                <a href="details.php" class="btn btn-dark btn-sm">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h4 class="card-title mb-0">This is post title</h4>
                            </div>
                            <div class="card-body">
                                <img src="images/placeholder.svg" alt="Post image" class="card-img-top mb-3">
                                <p class="card-text">Author by This is post author</p>
                                <p class="card-text">Viewer - <span class="badge bg-success">33</span></p>
                                <p class="card-text mb-0">This is post content</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p class="text-muted mb-0">2026-10-08</p>
                                <a href="details.php" class="btn btn-dark btn-sm">Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card End -->
                </div>
            </div>
        </div>
    </main>
    <?php include 'components/footer.php' ?>
    <script src="js/bootstrap.js"></script>
</body>

</html>