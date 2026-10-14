<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?php include 'components/connection.php';
    $data = "SELECT * FROM  posts";
    $raw_data = $connection->query($data);

    while ($row = $raw_data->fetch_assoc()) {
        $row["int"];
        $row["title"];
        $row["author"];
        $row["viewer"];
        $row["image"];
    }
    ?>
    <?php include 'components/header.php' ?>
    <main class="container my-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">All Posts</h3>
                    <a href="create.php" class="btn btn-dark">+ Add New Post</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Views</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>This is post title</td>
                                <td>This is post author</td>
                                <td><span class="badge bg-success">100</span></td>
                                <td>2026-10-13</td>
                                <td>
                                    <a href="update.php" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>This is post title</td>
                                <td>This is post author</td>
                                <td><span class="badge bg-success">85</span></td>
                                <td>2026-10-12</td>
                                <td>
                                    <a href="update.php" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>This is post title</td>
                                <td>This is post author</td>
                                <td><span class="badge bg-success">42</span></td>
                                <td>2026-10-11</td>
                                <td>
                                    <a href="update.php" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>This is post title</td>
                                <td>This is post author</td>
                                <td><span class="badge bg-success">210</span></td>
                                <td>2026-10-10</td>
                                <td>
                                    <a href="update.php" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>This is post title</td>
                                <td>This is post author</td>
                                <td><span class="badge bg-success">67</span></td>
                                <td>2026-10-09</td>
                                <td>
                                    <a href="update.php" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <nav aria-label="Posts pagination">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <?php include 'components/footer.php' ?>
    <script src="js/bootstrap.js"></script>
</body>

</html>