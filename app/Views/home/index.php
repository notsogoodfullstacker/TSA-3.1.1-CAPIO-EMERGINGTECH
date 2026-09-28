<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS Dashboard - TFA3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">POS System Dashboard</h1>
            <p class="text-muted">Technical Formative Assessment 3 (TFA3)</p>
        </div>

        <div class="row justify-content-center">
            <!-- Customers Card -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-primary">Customer Management</h3>
                        <p class="card-text text-muted">Manage customer accounts, add new records, and edit details with server-side validation.</p>
                        <a href="/customers" class="btn btn-outline-primary m-1">View Customers</a>
                        <a href="/customers/new" class="btn btn-primary m-1">Add New Customer</a>
                    </div>
                </div>
            </div>

            <!-- Users Card -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-success">User Accounts</h3>
                        <p class="card-text text-muted">Manage user profiles, upload and validate avatar images, and view account listings.</p>
                        <a href="/users" class="btn btn-outline-success m-1">View Users</a>
                        <a href="/users/new" class="btn btn-success m-1">Add New User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>