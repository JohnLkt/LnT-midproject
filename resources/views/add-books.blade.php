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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark vw-100">
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
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="view-catalogue">View Catalogue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="add-books">Add Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="edit-catalogue">Edit Catalogue</a>
              </li>
            </ul>
          </div>
          </div>
    </nav>
    <section class="container-fluid" id="view-catalouge">
        <p class="h1 m-2">Add a Book:</p>
        <form action="{{route('createBook')}}" method="POST">
          @csrf
        <div class="mb-3">
          <label for="booktitle" class="form-label">Book Title:</label>
          <input type="text" class="form-control" id="booktitle" name="booktitle" aria-describedby="title-help" required>
          <div id="title-help" class="form-text">Book title must be 5-20 characters long.</div>
        </div>
        <div class="mb-3">
          <label for="bookauthor" class="form-label">Book Author:</label>
          <input type="text" class="form-control" id="bookauthor" name="bookauthor" aria-describedby="author-help" required>
          <div id="author-help" class="form-text">Book author must be 5-20 characters long.</div>
        </div>
        <div class="mb-3">
          <label for="bookpage" class="form-label">Number of Pages:</label>
          <input type="number" class="form-control" id="bookpage" name="bookpage" min="0" required>
        </div>
        <div class="mb-3">
          <label for="bookrelease" class="form-label">Year of Release:</label>
          <input type="number" class="form-control" id="bookrelease" name="bookrelease" min="0" aria-describedby="release-help" required>
          <div id="release-help" class="form-text">Release year must be between 2000 and 2021.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </section>

</body>
</html>