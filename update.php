<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
                            <h3 class="card-title mb-0">Update Post</h3>
                            <a href="list.php" class="btn btn-outline-secondary btn-sm">Back to List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" required>
                            </div>
                            <div class="mb-3">
                                <label for="viewer" class="form-label">Viewer</label>
                                <input type="number" class="form-control" id="viewer" min="0" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" accept="image/*">
                                <div class="form-text">Leave empty to keep the current image.</div>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" rows="6" required></textarea>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-dark">Update Post</button>
                                <a href="list.php" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'components/footer.php' ?>
    <script src="js/bootstrap.js"></script>
</body>

</html>