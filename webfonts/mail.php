<h2>Test Mail</h2>
<?php

if (!isset($_POST["submit"]))
  {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  From: <input type="text" name="from"><br>
  Email: <input type="text" name="email"><br>
  Message: <textarea rows="20" cols="40" name="message"></textarea><br>
  <input type="submit" name="submit" value="Click To send mail">
  </form>
  <?php
  }

else

  {

  if (isset($_POST["from"]))
    {
    $from = $_POST["from"]; // sender
    $email = $_POST["email"];
    $message = $_POST["message"];

    $message = wordwrap($message, 70);

    mail("waterlandent@gmail.com",$subject,$message,"From: $from\n");
    echo "Thanks for your response.";
    }
  }
?>