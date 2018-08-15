<?php
include_once 'dbh.php';
  if (isset($_POST['submitForm'])) {

    $first =mysqli_real_escape_string($conn, $_POST['first']);
    $last =mysqli_real_escape_string($conn, $_POST['last']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $mailForm = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (empty($first) || empty($last) || empty($subject) || empty($mailForm) || empty($message)) {
      echo "<script type=\"text/javascript\">
            alert('All blocks are compulsory');
            </script>";
      exit();

      header("Location: index.php");
    } else{
      if (!preg_match("/^[a-zA-Z ]*$/", $first)) {
        header("Location: index.php?index=invalid");
        exit();
      }
      else{
        if (!filter_var($mailForm, FILTER_VALIDATE_EMAIL)) {
          header("Location: index.php?index.php=email");
          exit();
        } else{
          $sql = "INSERT INTO contact (user_first, user_last, user_email, subject, textarea)
                          VALUES('$first', '$last', '$mailForm', '$subject', '$message');";
                          mysqli_query($conn, $sql);
                          header("Location: index.php?signup=success");
                          exit();
        }
    }
  }
    // If you want to send email to your web hosting site then write your website mail address here:-->$to

    // $to = "somebody@example.com";
    // $txt = "You have received an email from:".$name.".\n\n".$message;
    // $headers = "From: ".$mailForm;
    //
    // mail($to,$subject,$txt,$headers);
    // header("Location: index.php?mailsend");

  }
?>
