
<?PHP
$sql100 = mssql_query("SELECT count(*) FROM ".$mvcore_medb_s." WHERE ConnectStat = '1'");
$acr1 =mssql_result($sql100, 0, 0);

$sql101 = mssql_query("SELECT count(*) FROM ".$mvcore_medb_i."");
$acr2 =mssql_result($sql101, 0, 0);

$sql102 = mssql_query("SELECT count(*) FROM Character");
$acr3 =mssql_result($sql102, 0, 0);

$sql103 = mssql_query("SELECT count(*) FROM Guild");
$acr4 =mssql_result($sql103, 0, 0);

$sql104 = mssql_query("SELECT count(*) FROM Character WHERE CtlCode = '32'");
$acr5 =mssql_result($sql104, 0, 0);

$sql105 = mssql_query("SELECT count(*) FROM ".$mvcore_medb_s." WHERE ConnectStat = '1'");
$total['online']=mssql_result($sql105, 0, 0);

$month_today = date("M", time());
$day_today  = date("j", time());
$year_today  = date("Y", time());
$query   =mssql_query("SELECT count(*) FROM ".$mvcore_medb_s." WHERE ConnectTM LIKE '%".$month_today."%".$day_today."%".$year_today."%' OR DisConnectTM LIKE '%".$month_today."%".$day_today."%".$year_today."%'");
$online_today = mssql_result($query, 0, 0);
$sql = mssql_query("SELECT count(*) FROM ".$mvcore_medb_s." WHERE ConnectStat = 1");

?>
<table border='1' width='100%' align='center'>
<tr>
<td align='center' ><?php echo''.theme_inc_total_accounts.'';?>: </td> 
<td  align='center' ><?php echo''.theme_inc_total_characters.'';?><br></td> 
<td  align='center' ><?php echo''.theme_inc_total_guilds.'';?><br></td>
<?php if($mvcore['onoff_player_count'] == 'show') { ?>
<td  align='center' >Đang online<br></td>
<?php } ?>
<tr>
 <td  align='center' ><font color="yellowgreen"> <?php echo $acr2;?></font></td> 
 <td  align='center' ><font color="yellowgreen"> <?php echo $acr4;?> </font></td> 
 <td  align='center' ><font color="yellowgreen"> <?php echo $acr4;?> </font></td> 
<?php if($mvcore['onoff_player_count'] == 'show') { ?>
 <td  align='center' ><font color="yellowgreen"> <?php echo $acr1;?> </font></td> 
<?php } ?>
</table>