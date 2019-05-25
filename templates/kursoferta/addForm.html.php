<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $Idjezykaa = $this->get('Idjezykaa');
 ?>
<h1>Nowy kursoferta</h1>
<form action="<?php echo($url); ?>kursoferta/dodaj/" method="post">
    NazwaOferty: <input type="text" name="Nazwaoferty" /><br />
	  PoziomKursu: <input type="text" name="PoziomKursu" /><br />
	  Cena: <input type="text" name="Cena" /><br />
    Idjezyka: <select name="Idjezyka">

    <?php
        foreach($Idjezykaa as $id => $Idjezyka) {
    ?>
          <option value="<?php echo($id); ?>"><?php echo ($Idjezyka['NazwaJezyka']);?></option>
    <?php
        }
    ?>
    </select>

    <br/>
    <input type="submit" value="Dodaj" />
</form>
<br/><br/>
<a href="<?php echo($url); ?>kursoferta/">Lista kursofert</a><br/>
<a href="<?php echo($url); ?>jezyk/">Lista jezyków</a>
<?php include './templates/footer.html.php'; ?>
