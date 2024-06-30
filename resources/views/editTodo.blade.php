<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #ffffff;">

    <div class="container">
        <div class="card p-4 mt-5">
            <form method="post">
                @csrf
                <div class="row">
                    <div class="col-2 ms-5 col-sm-2">
                        <label>Title:</label>
                        <br>
                        <br>
                        <label>Description:</label>
                    </div>
                    <div class="col-8 col-sm-5">
                        <input type="text" id="addTxt" name="title" class="form-control" value="{{$todo->title}}">
                        <input type="text" id="addTxt" name="description" class="form-control" value="{{$todo->description}}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-success" id="addBtn">Düzenle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>