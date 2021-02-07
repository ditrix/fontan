
<meta http-equiv='refresh' content='0; <?php echo $_POST['current_url'] ?> '></meta>
<?php
/* source webliberty.ru/forma-obratnoy-svyazi-na-wordpress-bez-plaginov/ */
/*echo "<meta http-equiv='refresh' content='5; url=   http://fontanbizua/'></meta>";*/
//echo $_POST['current_url']; 
$post = (!empty($_POST)) ? true : false;
$sub = 'гармония воды: сообщение формы';
if($post) {

    $email = htmlspecialchars(trim($_POST['email']));
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST['coment']));
    $error = '';
    if(!$name) {$error .= 'Укажите свое имя. ';}
    if(!$email) {$error .= 'Укажите электронную почту. ';}
    if(!$phone) {$error .= 'Укажите телефон. ';}
    
    if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
    if(!$error) {
        $address = "motosnake76@gmail.com";
        /*$address = "ditrix2006@gmail.com";*/
        $mes = "Почта: ".$email."\n\nИмя: ".$name."\n\nТема: ".$phone."\n\nТел: " .$sub."\n\nСообщение: ".$message."\n\n";
        $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
       // if($send) {echo 'OK';}
    }
    else {//echo '<div class="err">'.$error.'</div>';
}
}
