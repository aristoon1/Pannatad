<!doctype html>
<html lang="en">
    
<head>
    <title>To do app using PHP</title>
    <!-- Required meta tags -->
    <neta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit-no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-gg©yR@1XCbMQV3X1pma34MD+d/1fQ784/16cY/1JTQUOhcWr7x93volx12MZ11" crossorigin="anonymous">
    </head>

    <body>




    <!-- Optional JavaScript -->    
    <!-- JQuery first, then Popper.js, then Bootstrap 35 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slin.min.js" integrity="sha384-q8i/X+965Dz00rT7ab41]StQTAqVgRVzphzo5smXKp4YFRvil+Babt TE1Pi6jizo" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-0020T@CpHqdJQGhJtу5KVphtPh2wj9W01c1HTM6a3JDZrQq4F86dIHND201" cross origin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-3jSmVgyd@p3pXB1rRibZUAVIIy60rQ6VгIEFf/nJGzIxFDsf4x@xIM+807JRM" cross origin="anonymous"></script>
</body>

</html>

<h1 class="text-center py-4 my-4">Web-application To Do app (PHP)</h1>

<div class="w-50 m-auto">

    <form action="data.php" method="POST" autocomplete="off">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" placeholder=" Add On To Do" Required>
    </div><br>
    <button class="btn btn-danger">ADD-List</button>

    </form>

</div>
<br>

<hr class="bg-dark w-50 m-auto">
  <div class="lists w-50 m-auto my-4">
    <h1>Items to be saved</h1>
    <div id="lists">
      <table class="table table-info table-hover">
        <thead>
          <tr>
            <th scope="col" name="id">number</th>
            <th scope="col">your list</th>
            <th>Action</th>
          </tr>
        </thead>
       
        <tbody>
          <?php
          include 'database.php';
          $sql = "SELECT * FROM todos1";
          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $title = $row['Title'];
          ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $title  ?></td>
                <td>
                  <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Edit</a>
                  <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>
                </td>
              </tr>
          <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>