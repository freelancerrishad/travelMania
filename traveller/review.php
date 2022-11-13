<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>
    <?php include 'header.php' ; ?>

    <p class="text-center mt-14 text-5xl font-bold">Review Us</p>

    <!-- coomment -->

    <div class="body1 ml-14 mt-14">
        <div class="wrapper1">
          <form action="comm.php?username=<?php echo $_GET['username'] ?>" method="POST" class="form">
            <div class="row">
              <div class="input-group">
                <label for="name" class="mr-14">Name</label>
                <input type="text" class="ml-10" name="name" id="name" placeholder="Enter your Name" required>
              </div>
              <div class="input-group mt-5">
                <label for="email" class="mr-14">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email" required>
              </div>
            </div>
            <div class="input-group textarea mt-5 flex items-center">
              <label for="comment" class="mr-6">Comment</label>
              <textarea id="comment" name="comment" placeholder="Enter your Comment" cols="70" required></textarea>
            </div>
            <div class="input-group mt-10">
              <button name="submit" class="btn border border-red-500 rounded hover:bg-red-500 hover:text-white px-5 py-2">Post Comment</button>
            </div>
          </form>
          <div class="prev-comments">
            <?php

            $sql = "SELECT * FROM comm";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {

            ?>
                <br>
                <div class="single-item">
                  <h4><?php echo $row['name']; ?></h4>
                  <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                  <p><?php echo $row['comment']; ?></p><br>
                </div>
            <?php

              }
            }

            ?>
          </div>
        </div>
      </div>
</body>
</html>