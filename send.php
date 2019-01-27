
<?php
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $rent_from = $_POST['rent_from'];
    $rent_to = $_POST['rent_to'];
    $date=date('d.m.y H:i');

    $from = 'From: rent'; 
    $to = 'matriksa@yandex.ru'; 
    $subject = "Имеется заказ от $date\n";

    $body = "От: $name\n телефон: $tel\n E-mail: $email\n c: $rent_from\n по: $rent_to\n";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Thank you for ordering<br>Within 5 seconds You will be moved to the main page</p>';
        header('Refresh: 5; URL=https://xn----8sbafmriqzeaojejq.xn--p1ai/wifi4you/index.html');

 /* exit;*/
    } else { 
        echo '<p>Something went wrong. Please write to e-mail: master@wifi4you.ru'; 
    }
}
?>