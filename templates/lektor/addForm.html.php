<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
 ?>
<h1>Nowy lektor</h1>
<form action="<?php echo($url); ?>lektor/dodaj/" method="post">
    Nazwisko: <input type="text" name="Nazwisko" /><br />
    Imie: <input type="text" name="Imie" /><br />
    Telefon: <input type="text" name="Telefon" /><br />
    Email: <input type="text" name="Email" /><br />
    Miasto: <input type="text" name="Miasto" /><br />
    Ulica: <input type="text" name="Ulica" /><br />
    Numerdomu: <input type="text" name="Numerdomu" /><br />
    Numerlokalu: <input type="text" name="Numerlokalu" /><br />
    <br/>
    <input type="submit" value="Dodaj" />
</form>
<br/><br/>
<a href="<?php echo($url); ?>lektor/">Lista lektorów</a>
<?php include './templates/footer.html.php'; ?>
