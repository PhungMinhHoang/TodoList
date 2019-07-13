<!DOCTYPE html>
<html>
<head>
    <title>Todos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">{{ $todo->name }}</h1>
        <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>

            <div class="card-body">
                {{ $todo->description }}
            </div>
        </div>
    </div>
</body>
</html>