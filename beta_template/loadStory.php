<?php


        $storyTitle;

        $con=mysqli_connect("localhost","root","","thefirstfivepages");

        // Check connection
        if (mysqli_connect_errno($con))
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $result = mysqli_query($con,"SELECT * FROM stories");

        while($row = mysqli_fetch_array($result))
          {
              $storyTitle = $row['title'];
              $storyAuthor = $row['author'];
              $storyId = $row['id'];
          }

        echo $storyTitle . '.' . $storyAuthor . '.' . $storyId;

?>