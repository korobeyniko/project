<?php
    $connection = mysqli_connect('localhost:3307', 'root', '', 'shop');

    if (isset($_POST['send'])){
        $fio = $_POST['fio'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $book_date = $_POST['book_date'];
        $adult_count = $_POST['adult_count'];
        $child_count = $_POST['child_count'];
        $name = $_POST['name'];

        $request = "INSERT INTO `book`(`adult_count`, `child_count`, `book_date`, `id_user`, `id_date`) 
        VALUES ('$adult_count', '$child_count', '$book_date', '$id_user', '$id_date')";



        //$request = "INSERT INTO `book_form`(`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) 
        //VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

        


        
        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }
?>