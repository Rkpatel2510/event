<?php


if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "elixir_event";
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if ($conn) {
        echo "success";
    } else {
        die("Error" . mysqli_connect_error());
    }




    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $User_Name     = $_REQUEST['name'];
        $User_Email    = $_REQUEST['email'];
        $User_password = $_REQUEST['password'];
        $User_contect  = $_REQUEST['number'];
        $Gender        = $_REQUEST['gender'];
    }


    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO registration (`User_id`, `User_Name`, `User_Email`, `User_password`, `User_contect`, `Gender`) VALUES (
           NULL , '$User_Name','$User_Email', '".md5($User_password)."','$User_contect','$Gender')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>data stored in a database successfully.";
        header("Location: login.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    // Close connection
    
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elixir Event.com</title>
    <link rel="stylesheet" href="Registration.css" type="text/css">
    <link rel="stylesheet" href="parsley.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src></script>
</head>
<style>
    body {
        background: url(images/1.jpg) no-repeat 0px 0px;
        background-size: cover;
        min-height: 280px;
    }
</style>

<body>
    <div class="main">
        <div class="register">
            <h2>REGISTRATION </h2>
            <form id="register"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label>Name:</label>
                <br>
                <input type="text" name="name" id="name" placeholder="Enter your name" Required>
                <br><br>
                <label>Email: </label>
                <br>
                <input type="email" name="email" id="name" placeholder="Enter Your Vaild Email" Required>
                <br><br>
                <label>Password :</label>
                <br>
                <input type="password" name="password" id="name" placeholder="Enter your password" Required>
                <br><br>
                <label>Mobile number :</label>
                <br>
                <input type="text" name="number" id="name" placeholder="Enter your mobile number" Required>
                <br><br>
                <label>Gender:</label>
                <input type="radio" name="gender" id="male" value="Male" Required> &nbsp;
                <span id="male">Male</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" id="female" value="Female"> &nbsp;
                <span id="female">Female</span>
                <br><br>
                <input type="submit" value="Submit" name="submit" id="submit">
            </form>
        </div>
        <!--end register-->
    </div>
    <!--end main-->

</body>

<script>
    $('#register').parsley();
</script>

</html>