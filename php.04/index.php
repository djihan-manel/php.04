<?php
if(isset($_POST["send"])){
    $msg = trim($_POST["msg"]);
    if($msg !== ""){
        file_put_contents("guest.txt", $msg."\n", FILE_APPEND);
    }
}
$all = file_exists("guest.txt") ? file("guest.txt") : [];
?>
<!DOCTYPE html>
<html>
<body>
<h2>دفتر الزوار</h2>

<form method="post">
    <textarea name="msg" placeholder="اكتب رسالة"></textarea><br>
    <button name="send">إرسال</button>
</form>

<h3>الرسائل:</h3>
<?php foreach($all as $m) echo "<p>$m</p>"; ?>
</body>
</html>
