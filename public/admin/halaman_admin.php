<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:../login/index.php?pesan=gagal");
}

?>

<?php
//Session
// session_start();


include  'header.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "select * from users where username='$username' and password='$password'")
        or die(mysqli_error($con));
    $row = mysqli_fetch_array($query);
    $counter = mysqli_num_rows($query);
    if ($counter == 0) {
        echo "<script type='text/javascript' >alert(' Passwork ama Username midbaa khalden');
    document.location='loginform.php'
    </script>";
    } else {
        //$name=$row['name'];
        //$username=$row['username'];
        //$password=$row['password'];
        //$id=$row['id'];

        //$_SESSION['name'] = $name;
        //$_SESSION['username'] = $username;
        //$_SESSION['ID']=$id;
        echo "<script type='text/javascript'>document.location='index.php'</script>";
    }
}

include 'footer.php';
?>

    
