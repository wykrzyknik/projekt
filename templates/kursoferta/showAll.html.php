<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kursofertaa = $this->get('data');
    $Idjezykaa = $this->get('Idjezykaa');
 ?>
<h1>Lista kursoferta</h1>
<ul>
	<?php
      if(isset($Idjezykaa) && isset($kursofertaa)) {
      foreach($kursofertaa as $kursoferta) {
  ?>
	<li>
      <?php
			   echo ('<a href="'.$url.'kursoferta/'.$kursoferta['id'].'">'.$kursoferta['id'].' '.$kursoferta['Nazwaoferty'].'</a>');
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
<a href="<?php echo($url); ?>kursoferta/formularz/">Dodaj kursoferta</a><br/>
<a href="<?php echo($url); ?>jezyk/">Lista jezyków</a>
<a href="<?php echo($url); ?>lektor/">Tabela lektora</a><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Tabela kursuczestników</a><br/>
<a href="<?php echo($url); ?>kurs/">Tabela kurs</a><br/>
<a href="<?php echo($url); ?>uczestnik/">Tabela uczestnika</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Tabela kursoferta</a><br/>
<?php include './templates/footer.html.php'; ?>
