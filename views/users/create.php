<?php $v->layout(dirname(__DIR__, 1) . "/layouts/_base") ?>

<div class="container my-5">
    <div class="p-5 bg-body-tertiary rounded-3">
        <h1 class="text-body-emphasis">PHP MVC - Create User</h1>
        <div class="container">
            <form method="post" action="<?= url('users.store') ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>