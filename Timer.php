<?php
require('connection.php');
$sql = "SELECT todate FROM elections where name='cr'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
	$targetdate=$row['todate'];
}	
echo "
<script language='JavaScript'>
var target='$targetdate';
TargetDate = target;
BackColor = 'lightgreen';
ForeColor = 'Black';
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = '%%D%% Days  %%H%% Hours - %%M%% Minutes - %%S%% Seconds.';
FinishMessage = 'Time Out.';
</script>
<script language='JavaScript' src='//scripts.hashemian.com/js/countdown.js'></script>
<body>
</body>
</html>"
?>