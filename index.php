<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $project_title ?></title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>

<body>
  <div class="container bg-info pb-3 mt-5">
    <h1 class="text-center fw-bold mt-4"><?php echo $project_title ?></h1>
    <p class="text-center fw-bold">Create strong and secure passwords to keep your account safe online</p>
    <form action="index.php" method="GET" class="mt-4 border p-3">
      <h3 class="fw-bold">Seleziona la lunghezza della password da generare:</h3>
      <div class="d-flex justify-content-evenly mt-4">
        <select style="width: auto;" class="form-select" name="password_length">
          <option hidden value="0">Password length</option>
          <option value="1">1 character</option>
          <option value="2">2 characters</option>
          <option value="3">3 characters</option>
          <option value="4">4 characters</option>
          <option value="5">5 characters</option>
          <option value="6">6 characters</option>
          <option value="7">7 characters</option>
          <option value="8">8 characters</option>
          <option value="9">9 characters</option>
          <option value="10">10 characters</option>
          <option value="11">11 characters</option>
          <option value="12">12 characters</option>
          <option value="13">13 characters</option>
          <option value="14">14 characters</option>
          <option value="15">15 characters</option>
          <option value="16">16 characters</option>
          <option value="17">17 characters</option>
          <option value="18">18 characters</option>
          <option value="19">19 characters</option>
          <option value="20">20 characters</option>
          <option value="21">21 characters</option>
          <option value="22">22 characters</option>
          <option value="23">23 characters</option>
          <option value="24">24 characters</option>
        </select>
        <button type="submit" class="btn btn-light">Generate</button>
      </div>
    </form>
    <div class="">
      <h4 class="fw-bold fs-5">La lunghezza che hai selezionato è di: <span class="text-danger"><?php echo $password_length ?></span> caratteri</h4>
      <h4 class="fw-bold fs-5">La password generata è: <span class="text-danger bg-dark px-2 py-1"><?php echo $password_generate ?></span></h4>
    </div>
  </div>
</body>

</html>