<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kurs = $this->get('data');
    $Idkursofertaa = $this->get('Idkursofertaa');
    $Idlektoraa = $this->get('Idlektoraa');
 ?>
<h1>Produkt</h1>
<div>
	<?php
      if(isset($Idlektoraa) && isset($kurs) && isset($Idkursofertaa)) {
  ?>
  <?php
echo ('KursOferta: <a href="'.$url.'kurs/kursoferta/'.$kurs['Idkursuoferta'].'">'.$Idkursofertaa[$kurs['Idkursuoferta']]['PoziomKursu'].'</a><br/>');  
//  echo ('KursOferta: <a href="'.$url.'kurs/kursoferta/'.$kurs['Idkursuoferta'].'">'.$Idkursofertaa[$kurs['Idkursuoferta']]['Nazwaoferty'].'</a><br/>');
  echo ('Lektor: <a href="'.$url.'kurs/lektor/'.$kurs['Idlektora'].'">'.$Idlektoraa[$kurs['Idlektora']]['Nazwisko'].'</a><br/>');
	   echo ('Maksymalna_liczba_os: '.$kurs['Maksymalna_liczba_os'].'<br/>');
     echo ('Nrsali: '.$kurs['Nrsali'].'<br/>');
     echo ('data_rozpoczecia: '.$kurs['data_rozpoczecia'].'<br/>');
     echo ('data_zakonczenia: '.$kurs['data_zakonczenia'].'<br/>');

  ?>
  <br/><a href="<?php echo($url); ?>kurs/usun/<?php echo($kurs['id']) ?>">[usuń kurs]</a><br/>
	<?php
      }
  ?>
</div>
<br/><br/>
<a href="<?php echo($url); ?>kurs/">Lista kurs</a><br/>
<a href="<?php echo($url); ?>kurs/formularz/">Dodaj kursofert</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Lista kursoferta</a></br>
<a href="<?php echo($url); ?>lektor/">Lista lektor</a>
<?php include './templates/footer.html.php'; ?>
