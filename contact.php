
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=$_POST['emailval'];
        $value=$_POST['nameval'];
        $back=$_POST['feedval'];
        //Connecting to database
        $servername="localhost";
        $username="root";
        $password="";
        $database="gamingblog";
        //Creating a connection
        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die("Sorry we failed to connect".mysqli_connect_error($conn));
        }
        else{
    // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contact` (`email`, `name`, `feedback`) VALUES ('$email', '$value','$back')";
        $result = mysqli_query($conn, $sql);
            if(!$result){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
             }
            else{
                echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
             }
        }
     }
?>
 