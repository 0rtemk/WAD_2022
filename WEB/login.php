<?php
    include('parts/begin.html');
    include('parts/login.html');
?>

<h2>
        Данные из формы
</h2>

<?php
    echo "<h4> Логин: ";
    echo $_GET['login']."</h4>";
    echo "<h4> Пароль: ";
    echo $_GET['password']."</h4>";

    include('parts/footer.html');
    include('parts/end.html');
?>
