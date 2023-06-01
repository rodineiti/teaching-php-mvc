<?php $v->layout(dirname(__DIR__, 1) . "/layouts/_base") ?>

<div class="container my-5">
    <div class="p-5 bg-body-tertiary rounded-3">
        <h1 class="text-body-emphasis">PHP MVC - Edit User Id: <?=$user->id?></h1>
        <div class="container">
            <form method="post" action="<?= url('users.update', ['id' => $user->id]) ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=$user->name?>" placeholder="Name" required />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=$user->email?>" placeholder="Email" required />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?=$user->password?>" placeholder="Password" />
                </div>
                <div class="mb-3">
                    <select class="form-select" name="is_admin" aria-label="Role" required>
                        <option value="">Select role</option>
                        <option value="0" <?=$user->is_admin == '0' ? 'selected' : '';?>>User</option>
                        <option value="1" <?=$user->is_admin == '1' ? 'selected' : '';?>>Admin</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>