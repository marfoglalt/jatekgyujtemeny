<?php
function ki($szoveg)
{
    echo htmlspecialchars($szoveg, ENT_QUOTES);
}


$hiba = false;
$sikeres = "";
$sikertelen = "";

if (empty($_POST['name'])) {
    $hiba = true;
    $sikertelen = "<p class='text-danger'>A név mezőnek NEM szabad üresnek lennie!</p>";
}

else if (empty($_POST['email'])) {
    $hiba = true;
    $sikertelen = "<p class='text-danger'>Az email mezőnek NEM szabad üresnek lennie!</p>";
}

else if (empty($_POST['message'])) {
    $hiba = true;
    $sikertelen = "<p class='text-danger'>A szövegdoboznak NEM szabad üresnek lennie!</p>";
}

else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $hiba = true;
}

else if (!$hiba) {
     $sikeres = "<p class='text-success'>Sikeres küldés</p>";
}

$gomb = $_POST['gomb'] ?? false;
?>
<h2>Üzenetküldő</h2>
<section  id="five" class="wrapper style1 fade-up">
    <form action="?oldal=uzenet" method="post">

        <div id="elerhetoseg">
            <div>
                <label for="name">Név</label>
                <input type="text" name="name" id="name" />
            </div>
            <div>
                <label for="email">E-mail cím</label>
                <input type="text" name="email" id="email" />
            </div>
            <div>
                <label for="message">Üzenet szövege</label>
                <textarea name="message" id="message" rows="6"></textarea>
            </div>
        </div>
        <input type="submit" name="kuldes" value="Küldes">
        <br><br>
    </form>
</section>