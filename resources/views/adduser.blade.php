<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width"=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title>Add user list</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
         <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <h1>Add New User</h1>
                <form action="{{route('addUser')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="username">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="useremail">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" name="userage">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="usercity">
                    </div>

                    <button type="submit" class="btn btn-primary">submit</button>
            </div>
         </div>
    </body>
</html>