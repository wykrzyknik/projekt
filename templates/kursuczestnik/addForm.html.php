<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $Idkursuu= $this->get('Idkursuu');
    $Iduczestnikaa = $this->get('Iduczestnikaa');
 ?>
<h1>Nowy kurs</h1>
<form action="<?php echo($url); ?>kursuczestnik/dodaj/" method="post">
    Oplacano: <input type="text" name="Oplacano" /><br />
	  Opis: <input type="text" name="Opis" /><br />
    Idkursu: <select name="Idkursu">


    <?php
        foreach($Idkursuu as $id => $Idkursu) {
    ?>
          <option value="<?php echo($id); ?>"><?php echo ($Idkursu['Maksymalna_liczba_os']);?></option>
    <?php
        }
    ?>
    </select>

    <br/>


  Iduczestnika: <select name="Iduczestnika">
    <?php
        foreach($Iduczestnikaa as $id => $Iduczestnika) {
    ?>
          <option value="<?php echo($id); ?>"><?php echo ($Iduczestnika['Nazwisko'].' '.$Iduczestnika['Imie']);?></option>
    <?php
        }
    ?>
    </select>

    <br/>
    <input type="submit" value="Dodaj" />
</form>
<br/><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Lista kursuczestników</a><br/>
<a href="<?php echo($url); ?>kurs/">Lista kursów</a>
<a href="<?php echo($url); ?>uczestnik/">Lista uczestników</a>
<?php include './templates/footer.html.php'; ?>
