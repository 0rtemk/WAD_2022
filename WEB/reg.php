<?php
    include('parts/begin.html');
    include('parts/reg.html');
?>

<h2>
        Данные из формы
</h2>

<?php
    $host = "localhost";
    $user_bd = "root";
    $pass_bd = "";
    $bd_name = "task 1";
    $bd_connect = new mysqli( $host, $user_bd, $pass_bd, $bd_name );

    if($bd_connect -> errno){
        echo $bd_connect -> errno;
        echo $bd_connect -> connect_errno;
    }

    if(isset($_POST['login']) && isset($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql = "INSERT INTO task1(LOGIN, PASSWORD) VALUES ('$login', '$password')";
        $bd_connect -> query($sql);
        
        if(!$bd_connect -> query($sql)){
            echo $bd_connect -> errno;
            echo $bd_connect -> connect_errno;
        }

        /*echo "<h4> Логин: ";
        echo $login."</h4>";
        echo "<h4> Пароль: ";
        echo $password."</h4>";*/
    }
    
    $sql = mysqli_query($bd_connect, 'SELECT * FROM task1');
    while($result = mysqli_fetch_array($sql)){
        echo "<h4>{$result['ID']}, {$result['LOGIN']}, {$result['PASSWORD']}</h4>";
    }

    include('parts/footer.html');
    include('parts/end.html');
?>
