<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kurss = $this->get('data');
    $Idkursofertaa = $this->get('Idkursofertaa');
 ?>
<h1>Lista kurs w kursoferta: <?php echo($Idkursofertaa[$this->get('selectedCategory')]['Nazwaoferty']) ?></h1>
<ul>
	<?php
      if(isset($Idkursofertaa) && isset($kurss)) {
      foreach($kurss as $kurs) {
  ?>
	<li>
      <?php
			   echo ('<a href="'.$url.'produkt/'.$kurs['id'].'">'.$kurs['Maksymalna_liczba_os'].'</a>');
         echo (' - ');
         echo ('<a href="'.$url.'produkt/kategoria/'.$kursoferta['Idkursuoferta'].'">'.$Idkursofertaa[$kurs['Idkursuoferta']]['Maksymalna_liczba_os'].'</a>');
      ?>
	</li>
	<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>kurs/">Lista kursofert</a><br/>
<a href="<?php echo($url); ?>kurs/formularz/">Dodaj kursoferta</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Lista kursofert</a>
<a href="<?php echo($url); ?>lektor/">Lista lektorów</a>
<?php include './templates/footer.html.php'; ?>
