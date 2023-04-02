<?php
include_once 'db_conn.php';
if (count($_POST) > 0) {

  mysqli_query($conn, "UPDATE Ambulence set Amb_ID='" . $_POST['Amb_ID'] . "', Amb_Status='" . $_POST['Amb_Status'] . "' WHERE Amb_ID='" . $_POST['Amb_ID'] . "'");
  $message = "Record Modified Successfully";
  header("location:ambulence.php");
}
$query = mysqli_query($conn, "SELECT * FROM Ambulence WHERE Amb_ID='" . $_GET['Amb_ID'] . "'");
$Patient_data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ju Medical Center</title>
  <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- custom css file link  -->
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
</head>

<body>
  <!-- Begin Page Content -->
  <div class="container" style="margin-top: 3%;margin-bottom: 5%;width: 75%;">
    <!-- Area Chart -->


    <form action="" method="post" textalign="center">
      <div><?php if (isset($message)) {
              echo $message;
            } ?>
      </div>

      <div>
        <h2>Ambulence ID</h2>
        <input type="number" name="Amb_ID" value="<?php echo $Patient_data['Amb_ID']; ?>">
        <br>
      </div>

      <div>
        <h2>Amb_Status</h2>
        <input list="browsers" name="Amb_Status" id="browser" class="" required>
        <datalist id="browsers">
          <option value="<?php echo $Patient_data['Amb_Status']; ?>">
          <option value="<?php echo $Patient_data['Amb_Status']; ?>">
        </datalist>
      </div>
      <br>
      <input type="submit" value="Update" class="btn">

    </form>

  </div>
  </div>

  </div>


</body>

</html>