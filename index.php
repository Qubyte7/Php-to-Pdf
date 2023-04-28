<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container" at-5>
        <form action="makePdf.php" class="offset-md-3 col-md-6" method="POST">
            <h1>Create your Own PDF</h1>
        <div class="row mb-2">
            <div class="col-md-6">
        <input type="text" name="fname" placeholder="first name" class="form-control" required>
        </div>
        <div class="col-md-6">
        <input type="text" name="lname" placeholder="Last name" class="form-control" required>
        </div>
        </div>
        <div class="mb-2">
        <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>
        <div class="mb-2">
        <input type="tel" name="phone" placeholder="Phone number"class="form-control" required>
        </div>
        <div class="mb-2">
        <textarea name="message" cols="30" rows="5" class="form-control" required></textarea>
        </div>
        <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Create PDF">
     
        </form>
    </div>
</body>
</html>