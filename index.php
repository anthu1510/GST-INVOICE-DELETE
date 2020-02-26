<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remove</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4 mt-5">
            <div class="card">
                <div class="card-header">Delete Form</div>
                <div class="card-body">
                    <form action="delete.php" method="post">
                        <div class="form-group">
                            <label for="">Enter Invoice No</label>
                            <input type="text" name="inv_no" class="form-control" placeholder="Invoice number">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
