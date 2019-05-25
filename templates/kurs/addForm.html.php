<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $Idkursofertaa = $this->get('Idkursofertaa');
    $Idlektoraa = $this->get('Idlektoraa');
 ?>
<h1>Nowy kurs</h1>
<form action="<?php echo($url); ?>kurs/dodaj/" method="post">
    Maksymalna_liczba_os: <input type="text" name="Maksymalna_liczba_os" /><br />
	  Nrsali: <input type="text" name="Nrsali" /><br />
	  data_rozpoczecia: <input type="date" name="data_rozpoczecia" /><br />
    data_zakonczenia: <input type="date" name="data_zakonczenia" /><br />
    Idkursuoferta: <select name="Idkursuoferta">


    <?php
        foreach($Idkursofertaa as $id => $Idkursoferta) {
    ?>
          <option value="<?php echo($id); ?>"><?php echo ($Idkursoferta['PoziomKursu']);?></option>
    <?php
        }
    ?>
    </select>

    <br/>


  Idlektora: <select name="Idlektora">
    <?php
        foreach($Idlektoraa as $id => $Idlektora) {
    ?>
          <option value="<?php echo($id); ?>"><?php echo ($Idlektora['Nazwisko'].' '.$Idlektora['Imie']);?></option>
    <?php
        }
    ?>
    </select>

    <br/>
    <input type="submit" value="Dodaj" />
</form>
<br/><br/>
<a href="<?php echo($url); ?>kurs/">Lista kurs</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Lista kursoferta</a>
<a href="<?php echo($url); ?>lektor/">Lista lektor</a>
<?php include './templates/footer.html.php'; ?>
