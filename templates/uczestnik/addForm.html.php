<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
 ?>
<h1>Nowy uczestnik</h1>
<form action="<?php echo($url); ?>uczestnik/dodaj/" method="post">

    Nazwisko: <input type="text" name="Nazwisko" /><br />
    Imie: <input type="text" name="Imie" /><br />
    Data_ur: <input type="date" name="Data_ur" /><br />
    PESEL: <input type="text" name="PESEL" /><br />
    Kod_pocztowy: <input type="text" name="Kod_pocztowy" /><br />
    Miasto: <input type="text" name="Miasto" /><br />
    Ulica: <input type="text" name="Ulica" /><br />
    Numerlokalu: <input type="text" name="Numerlokalu" /><br />
    Telefon: <input type="text" name="Telefon" /><br />
    Email: <input type="text" name="Email" /><br />
    <br/>
    <input type="submit" value="Dodaj" />
</form>
<br/><br/>
<a href="<?php echo($url); ?>uczestnik/">Lista uczestników</a>
<?php include './templates/footer.html.php'; ?>
