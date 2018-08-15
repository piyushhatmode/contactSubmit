<?php
include_once 'contactfrom.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  </head>
  <body>
    <h1 class="cen">Contact From</h1><br><br>
    <form action="index.php" method="POST">
      <div class="form-row">
    <div class="col">
      First Name
      <input type="text" name="first" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      Last Name
      <input type="text" name="last" class="form-control" placeholder="Last name"><br>
    </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
    <label for="inputAddress">Subject</label>
    <input type="text" class="form-control" name="subject" id="inputAddress" placeholder="Enter Subject">
  </div>
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Text area</label>
   <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" placeholder="Enter the message here..."></textarea>
 </div>
 <button type="submit" name="submitForm" class="btn btn-primary">Send Message</button>
    </form>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
     integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
