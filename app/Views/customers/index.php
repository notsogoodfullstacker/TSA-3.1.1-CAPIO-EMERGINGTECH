<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>User Accounts</h2>
            <a href="/users/new" class="btn btn-primary">Add New User</a>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $u): ?>
                    <tr>
                        <td>
                            <?php if (!empty($u['avatar'])): ?>
                                <img src="<?= base_url('uploads/' . $u['avatar']) ?>" width="40" height="40" class="rounded-circle object-fit-cover">
                            <?php else: ?>
                                <img src="<?= base_url('uploads/default-avatar.png') ?>" width="40" height="40" class="rounded-circle object-fit-cover">
                            <?php endif; ?>
                        </td>
                        <td><?= esc($u['username']) ?></td>
                        <td><?= esc($u['full_name']) ?></td>
                        <td>
                            <a href="/users/edit/<?= $u['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">No users found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>