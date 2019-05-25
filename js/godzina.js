<script language="javascript">
<!--W3e JAVAscript Preset
var timerID = null;
var timerRunning = false;
function stopclock()
{
if(timerRunning)
clearTimeout(timerID)
timerRunning = false;
}

function startclock()
{
stopclock();
showtime();
}

function showtime()
{
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds();
var timeValue = "" + ((hours > 24) ? hours - 24 : hours);
timeValue += ((minutes < 10) ? ":0" : ":") + minutes;
timeValue += ((seconds < 10) ? ":0" : ":") + seconds;
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000); //tutaj widzimy, że zegarek odświerza się co sekundę, bo 1000 to sekunda. Najlepiej zostawić tak jak jest.
timerRunning = true;
}
//-->
</script>
