<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>DEMO AJAX</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="demo d-flex">
      <div class="container">
        <div class="card px-4">
          <form action="add.php" method="post" class="form">
            <h1 class="text-center">FORM</h1>
            <div class="form-group">
              <label for="name">Name</label>
              <input  id="name" name="name" type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="lastname">Lastname</label>
              <input  id="lastname" name="lastname" type="text" class="form-control" />
            </div>
            <div class="form-group">
               <label for="email">Email</label>
              <input id="email" name="email" type="text" class="form-control" />
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
          <a href="list.php">Lista</a>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>

