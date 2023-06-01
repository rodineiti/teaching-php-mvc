<?php $v->layout(dirname(__DIR__, 1) . "/layouts/_base") ?>

<div class="container my-5">
    <div class="p-5 bg-body-tertiary rounded-3">
        <h1 class="text-body-emphasis">PHP MVC</h1>
        <div class="container">
            <a class="btn btn-primary" href="<?= url('users.create') ?>" role="button">Create New User</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $item): ?>
                    <tr>
                        <th scope="row"><?=$item->id?></th>
                        <td><?=$item->name?></td>
                        <td><?=$item->email?></td>
                        <td><?=$item->is_admin == '0' ? 'User' : 'Admin';?></td>
                        <td>
                            <a class="btn btn-primary" href="<?= url('users.edit', ['id' => $item->id]) ?>" role="button">Editar</a>
                            <a onclick="return confirm('Confirm delete user?');"
                               href="<?= url('users.destroy', ['id' => $item->id]) ?>"
                               class="btn btn-danger">Del</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>