<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-danger">
      <div class="container">
        <a class="navbar-brand" href="/">KIZMINE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ms-1">
              <a class="nav-link {{ ("title" === "Home") ? 'active' : ''}}" href="/">Home</a>
            </li>
            <li class="nav-item ms-1">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item ms-1 ">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
</body>
</html>




