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
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a class="btn btn-primary" href="<?= url('users.edit', ['id' => 1]) ?>" role="button">Editar</a>
                        <a onclick="return confirm('Confirm delete user?');"
                           href="<?= url('users.destroy', ['id' => 2]) ?>"
                           class="btn btn-danger">Del</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a class="btn btn-primary" href="<?= url('users.edit', ['id' => 2]) ?>" role="button">Editar</a>
                        <a onclick="return confirm('Confirm delete user?');"
                           href="<?= url('users.destroy', ['id' => 2]) ?>"
                           class="btn btn-danger">Del</a>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>