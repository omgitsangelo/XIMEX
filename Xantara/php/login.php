<?php
  if(isset($_POST['Login']))
  {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $select = "SELECT * FROM user";
    $result = $conn->query($select);
    $row = mysqli_fetch_array($result);

    if ($result->num_rows > 0)
  	{
      if($username == $row["USER_username"] && $password == $row["USER_password"]
      && $row["USER_admin"] == 1 && $row["USER_active"] == 1)
			{
        echo "USER FOUND";
        header("location: admin/admin-panel.html");
      }
      else
      {
        //echo "USER NOT FOUND";
        echo "Wrong username or password";
      }

    }
    else
    {
      echo "No user found";
    }

  }
?>
