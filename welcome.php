<html>
<body>

<?php 
if(isset($_POST["youtube"])){


    $temp = $_POST["youtube"];
    $after = str_replace(' ', '+', $temp);
  
   header("Location: https://www.youtube.com/results?search_query=+$after");

}

if(isset($_POST["insta"])){


    $temp = $_POST["insta"];
    $after = str_replace(' ', '+', $temp);
  
   header("Location: https://www.instagram.com/$temp");

}

if(isset($_POST["wiki"])){


    $temp = $_POST["wiki"];
    $after = str_replace(' ', '+', $temp);
  
   header("Location: https://en.wikipedia.org/wiki/Special:Search?go=Go&search=$after");

}

if(isset($_POST["spotify"])){


    $temp = $_POST["spotify"];
    $after = str_replace(' ', '%20', $temp);
  
   header("Location: https://open.spotify.com/search/$after");

}





?>

</body>
</html>