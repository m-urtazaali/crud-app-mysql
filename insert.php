<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>::CRUD Application::</title>
</head>

<body>
    <div class="container  mt-5 mb-5 ">
        <div class="row">

            <a href="index.php"><button class="btn btn-primary mt-5 mb-3 ">back</button></a>
            <div class="col-md-12 ">
                <div class="card">

                    <div class="card">
                        <h1 class="bg-success  text-white">Student INSERT Form</h1>
                    </div>
                    <form class="row g-3 needs-validation" novalidate method="POST" action=""
                        enctype="multipart/form-data">

                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control" name="first_name" id="validationCustom01" required>
                            <div class="valid-feedback">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="validationCustom02" required>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">department name</label>
                            <input type="text" class="form-control" name="deppt_name" id="validationCustom02" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" id="validationCustom02" required>
                        </div>
                </div>


                <input class="btn btn-success" type="submit" name="save" value="save">

            </div>



            </form>
        </div>
    </div>
    </div>
    </div>
    <script type="text/javascript">
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
    </script>

</body>

</html>
<?php 

include("db_conn.php");

if(isset($_POST['save'])){
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];
    $deppt_name=$_POST['deppt_name'];
   $age=$_POST['age'];


// echo "<pre>";
//    print_r($_REQUEST);
//    echo "</pre>";
  $q="INSERT INTO student (first_name,last_name,deppt_name,age) 
VALUES('$first_name','$last_name','$deppt_name','$age')";

   $data=mysqli_query($conn,$q);
   // echo "<pre>";
   // print_r($data);
   // echo "</pre>";
   // die();
      if($data){
         ?>
<!-- <script type="text/javascript">
            alert('insert data')
         </script> -->

<?php 
        echo "data insert sucessfuly";


      }else{
         echo "not inserted";
      }
   }
 ?>