<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kursofertaa = $this->get('data');
    $Idjezykaa = $this->get('Idjezykaa');
 ?>
<h1>Lista kursofert w jezykach: <?php echo($Idjezykaa[$this->get('selectedCategory')]['NazwaJezyka']) ?></h1>
<ul>
	<?php
      if(isset($Idjezykaa) && isset($kursofertaa)) {
      foreach($kursofertaa as $kursoferta) {
  ?>
	<li>
      <?php
			   echo ('<a href="'.$url.'produkt/'.$kursoferta['id'].'">'.$kursoferta['nazwa'].'</a>');
         echo (' - ');
         echo ('<a href="'.$url.'produkt/kategoria/'.$kursoferta['Idjezyka'].'">'.$Idjezykaa[$kursoferta['Idjezyka']]['NazwaJezyka'].'</a>');
      ?>
	</li>
	<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>kursoferta/">Lista kursofert</a><br/>
<a href="<?php echo($url); ?>kursoferta/formularz/">Dodaj kursoferta</a><br/>
<a href="<?php echo($url); ?>jezyk/">Lista jezyk</a>
<?php include './templates/footer.html.php'; ?>
