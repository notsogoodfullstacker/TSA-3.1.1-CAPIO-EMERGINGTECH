<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit User</h2>

    <?php if (session()->has('validation')): ?>
        <div class="alert alert-danger">
            <?= session('validation')->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/users/update/<?= $user['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="<?= old('username', $user['username']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" value="<?= old('full_name', $user['full_name']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Profile Avatar (JPG/PNG, Max 2MB)</label>
            <input type="file" name="avatar" class="form-control">
            
            <?php if (!empty($user['avatar'])): ?>
                <div class="mt-2">
                    <img src="<?= base_url('uploads/' . $user['avatar']) ?>" width="60" height="60" class="rounded-circle object-fit-cover">
                    <small class="d-block text-muted">Current Avatar</small>
                </div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
        <a href="/users" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>