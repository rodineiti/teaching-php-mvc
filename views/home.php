<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP MVC</title>
</head>
<body>
<div class="container my-5">
    <div class="p-5 bg-body-tertiary rounded-3">
        <h1 class="text-body-emphasis">PHP MVC</h1>
        <div class="container">
            <a class="btn btn-primary" href="/users/create" role="button">Criar Novo</a>
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
                        <a class="btn btn-primary" href="/users/edit/1" role="button">Editar</a>
                        <a onclick="return confirm('Confirm delete user?');" href="/users/destroy/1"
                           class="btn btn-danger">Del</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a class="btn btn-primary" href="/users/edit/5463456" role="button">Editar</a>
                        <a onclick="return confirm('Confirm delete user?');" href="/users/destroy/2"
                           class="btn btn-danger">Del</a>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>