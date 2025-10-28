<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Library System</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/authors">Authors</a>
                <a class="nav-link" href="/books">Books</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Library Management System</h1>
            <p class="lead">Welcome to the Library Management System</p>
            <hr class="my-4">
            <p>Manage authors and books efficiently with this simple CRUD application.</p>
            <div class="mt-4">
                <a class="btn btn-primary btn-lg me-3" href="/authors" role="button">
                    Manage Authors
                </a>
                <a class="btn btn-success btn-lg" href="/books" role="button">
                    Manage Books
                </a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Authors Section</h5>
                        <p class="card-text">Create, view, edit, and delete authors. Each author can have multiple books.</p>
                        <a href="/authors" class="btn btn-outline-primary">Go to Authors</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Books Section</h5>
                        <p class="card-text">Manage books in the library. Each book is associated with an author.</p>
                        <a href="/books" class="btn btn-outline-success">Go to Books</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>