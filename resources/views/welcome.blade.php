<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark position-absolute top-0 start-0 vw-100">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="#" id="navbar-logo">
              E-Library
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="view-catalogue">View Catalogue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="add-books">Add Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="edit-catalogue">Edit Catalogue</a>
              </li>
            </ul>
          </div>
          </div>
    </nav>
    <section class="container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100" id="homescreen">
        <h1 class="display-1">Welcome to E-Library</h1> 
        <div>
        <a class="btn btn-primary" href="view-catalogue" role="button">View Catalouge</a>
        <a class="btn btn-primary" href="add-books" role="button">Add a book</a>
        </div>
    </section>

</body>
</html>