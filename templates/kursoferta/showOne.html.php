<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kursoferta = $this->get('data');
    $Idjezykaa = $this->get('Idjezykaa');
 ?>
<h1>Produkt</h1>
<div>
	<?php
      if(isset($Idjezykaa) && isset($kursoferta)) {
  ?>
  <?php
  echo ('Jezyk: <a href="'.$url.'kursoferta/jezyk/'.$kursoferta['Idjezyka'].'">'.$Idjezykaa[$kursoferta['Idjezyka']]['NazwaJezyka'].'</a></br>');
	   echo ('Nazwaoferty: '.$kursoferta['Nazwaoferty'].'<br/>');
     echo ('Poziomkursu: '.$kursoferta['PoziomKursu'].'<br/>');
     echo ('Cena: '.sprintf('%.2f zł', $kursoferta['Cena']).'<br/>');

  ?>
  <br/><a href="<?php echo($url); ?>kursoferta/usun/<?php echo($kursoferta['id']) ?>">[usuń kursoferta]</a><br/>
	<?php
      }
  ?>
</div>
<br/><br/>
<a href="<?php echo($url); ?>kursoferta/">Lista kursofert</a><br/>
<a href="<?php echo($url); ?>kursoferta/formularz/">Dodaj kursofert</a><br/>
<a href="<?php echo($url); ?>jezyk/">Lista jezyków</a>
<?php include './templates/footer.html.php'; ?>
