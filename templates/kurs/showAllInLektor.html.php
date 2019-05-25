<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kurss = $this->get('data');
    $Idlektoraa = $this->get('Idlektoraa');
 ?>
<h1>Lista kurs w kursoferta: <?php echo($Idkursofertaa[$this->get('selectedCategory')]['Nazwisko'],['Imie']) ?></h1>
<ul>
	<?php
      if(isset($Idlektoraa) && isset($kurss)) {
      foreach($kurss as $kurs) {
  ?>
	<li>
      <?php
			   echo ('<a href="'.$url.'produkt/'.$kurs['id'].'">'.$kurs['Maksymalna_liczba_os'].'</a>');
         echo (' - ');
         echo ('<a href="'.$url.'produkt/kategoria/'.$kursoferta['Idlektora'].'">'.$Idkursofertaa[$kurs['Idkursuoferta']]['Maksymalna_liczba_os'].'</a>');
      ?>
	</li>
	<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>kurs/">Lista kurs</a><br/>
<a href="<?php echo($url); ?>kurs/formularz/">Dodaj kursoferta</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Lista kursofert</a>
<a href="<?php echo($url); ?>lektor/">Lista lektorów</a>
<?php include './templates/footer.html.php'; ?>
