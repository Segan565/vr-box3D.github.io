 <?php 
// если была нажата кнопка "Отправить" 
if($_POST['submit']) {
        $title = substr(htmlspecialchars(trim($_POST['nameplace'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['phonenumber'])), 0, 1000000); 
        // $to - кому отправляем 
        $to = 'h.serge@mail.ru'; 
        // $from - от кого 
        $from='test@test.ru'; 
        // функция, которая отправляет наше письмо
        mail($to, $title, $mess, 'From:'.$from); 
        echo 'Спасибо! Ваше письмо отправлено.'; 
} 
?>