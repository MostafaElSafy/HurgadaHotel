<?php



/* Mostafa's functions used in the login and register */
function check_login($con)
{

    if (isset($_SESSION['user_id'])) {

        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: signin.php");
    die;
}

function random_num($length)
{

    $text = "";
    if ($length < 4) {
        $length = 4;
    }

    $len = rand(3, $length);

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 6);
    }

    return $text;
}


/* Mostafa's functions used in the login and register */