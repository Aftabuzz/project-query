<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width"=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title>All users </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
          <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <h1>All Users</h1>
                <table class="table table-bodered table-striped">
                    
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                    </tr>
                    @foreach ($data as $id => $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->city}}</td> 
                        <td><a href="{{route('view.user', $user->id)}}"class="btn btn-primary btn-sm">View</a></td>                       
                    </tr>
                    @endforeach
                </table>
            </div>
          </div>
    </body>
</html>





   

