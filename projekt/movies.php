<?php

$xml = simplexml_load_file('movies.xml');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #0a0137;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #220281;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        section {
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the world of Harry Potter</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="HarryPotter.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="books.php">Books</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="movies.php">Movies</a>
                     </li>
                  
              </ul>
          </div>
      </div>
    </nav>
    <section id="Movies">
        <h2>Movies</h2>
        <p>There are eight Harry Potter movies, based on the seven novels by J.K. Rowling. They were produced by Warner Bros. Each based on one of the books. Last book was split into two movies. </p>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Published</th>
                <th scope="col">Director</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php foreach ($xml->movie as $movie): ?>
                            <tr>
                                <td><?php echo $movie->name; ?></td>
                                <td><?php echo $movie->relesedate; ?></td>
                                <td><?php echo $movie->director; ?></td>
                            </tr>
                        <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>