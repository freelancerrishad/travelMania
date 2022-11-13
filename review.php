<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review</title>
</head>

<body>
  <?php include 'header.php'; ?>

  <p class="text-center mt-14 text-5xl font-bold">Our Reviews</p>

  <!-- coomment -->

  <div class="body1 ml-14 mt-14">
    <div class="wrapper1">
     
      <div class="prev-comments">
        <?php

        $sql = "SELECT * FROM comm";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {

        ?>
            
            <div class="flex flex-wrap mt-5">
            <div class="single-item border border-blue-400 px-5 py-2">
              <h4><span class="text-blue-500 font-bold text-2xl">Name:</span> <?php echo $row['name']; ?></h4>
              <a href="mailto:<?php echo $row['email']; ?>"><span class="text-blue-500 font-bold text-2xl">Email:</span>: <?php echo $row['email']; ?></a>
              <p><span class="text-blue-500 font-bold text-2xl">Comment:</span>: <?php echo $row['comment']; ?></p>
            </div>
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