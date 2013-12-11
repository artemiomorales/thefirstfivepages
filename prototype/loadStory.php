<?php

  $storyTitle;

  $con=mysqli_connect("localhost","root","","thefirstfivepages");

  // Check connection
  if (mysqli_connect_errno($con))
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  $randomId = $_POST['randomId'];

  $result = mysqli_query($con,"SELECT * FROM stories WHERE id = $randomId ");

  while($row = mysqli_fetch_array($result))
    {
        $storyTitle = $row['title'];
        $storyAuthor = $row['author'];
        $storySlug = $row['slug'];
    }

  echo $storyTitle . '~' . $storyAuthor . '~' . $storySlug;

?>