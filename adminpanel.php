<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  
</head>
<body>



<section class = "p-5 bg-secondary">
<div class="container min-vh-100 ">
    <h1 class="text-center mb-5 text-light fw-bold">Admin Panel</h1>

    <?php include "fetch.php";?>
    <form action="" method ="post" class="d-flex flex-column justify-content-center">
<button type="submit" name="show" class="btn btn-dark mt-4 align-self-center">View Messages</button>
</form>
<img src="img/2.jpg" alt="" class ="rounded-circle mx-auto d-block mt-5" style = "width:20%;">
</div>
</section>


<!--  -->
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>