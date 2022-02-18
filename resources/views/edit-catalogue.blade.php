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
                <a class="nav-link " aria-current="page" href="add-books">Add Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="edit-catalogue">Edit Catalogue</a>
              </li>
            </ul>
          </div>
          </div>
    </nav>
    <section class="container-fluid" id="view-catalouge">
        <p class="h1 m-2">Edit Book Information:</p>
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Page #</th>
            <th scope="col">Release year</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
          <tr>
            <td class="align-middle">{{$book->id}}</td>
            <td class="align-middle">{{$book->title}}</td>
            <td class="align-middle">{{$book->author}}</td>
            <td class="align-middle">{{$book->page}}</td>
            <td class="align-middle">{{$book->release}}</td>
            <td class="d-flex"><a class="btn btn-primary" href="{{route('updateBook', $book->id)}}" role="button">Update</a> &nbsp
              <form class="ml-3"action="{{route('deleteBook', $book->id)}}" method="POST">
                @csrf
                @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
              </form></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>

</body>
</html>