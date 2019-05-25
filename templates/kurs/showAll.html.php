<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');

    $kurss = $this->get('data');
    $Idkursofertaa = $this->get('Idkursofertaa');
    $Idlektoraa = $this->get('Idlektoraa');
 ?>
<h1>Lista kurs</h1>
<ul>
	<?php
      if(isset($Idkursofertaa) && isset($Idlektoraa) && isset($kurss)) {
      foreach($kurss as $kurs) {
  ?>
	<li>
      <?php
			   echo ('<a href="'.$url.'kurs/'.$kurs['id'].'">'.$kurs['id'].' '.$kurs['Maksymalna_liczba_os'].'</a>');
         echo (' - ');
         //echo ('<a href="'.$url.'kursoferta/jezyk/'.$kursoferta['id'].'">'.$Idjezykaa[$kursoferta['id']]['NazwaJezyka'].'</a>');
        // echo ('<a href="'.$url.'kursoferta/'.$kursoferta['PoziomKursu'].'">'.$kursoferta['Cena'].'</a>');
      ?>
	</li>
	<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>kurs/formularz/">Dodaj kurs</a><br/>
<a href="<?php echo($url); ?>kurs/">Lista kurs</a>
<a href="<?php echo($url); ?>jezyk/">Lista jezyków</a>
<a href="<?php echo($url); ?>lektor/">Tabela lektora</a><br/>
<a href="<?php echo($url); ?>uczestnik/">Tabela uczestnika</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Tabela kursoferta</a><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Tabela kursuczestnik</a><br/>
<?php include './templates/footer.html.php'; ?>
