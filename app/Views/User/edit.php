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
            <img src="<?= base_url('uploads/' . $user['avatar']) ?>" width="60" class="mt-2 rounded-circle">
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
</form>