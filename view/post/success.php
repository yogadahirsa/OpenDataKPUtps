<style>
	table,th,td{
		border:1px solid black;
	}
	caption{
		font-size:20;
	}
	#json{
		padding: 10px 30px;
		background-color: #b0c4de;
		margin-top: 5px;
		width: 84%;
		font-family:'Courier New';
	}
</style>

JSON:
<br/>
<div id="json">
<?
echo $json;
?>
</div>
<br/>
<br/>
<table cellpadding="4" cellspacing="1" style="font-size:12px;width:90%;line-height:170%;">
	<tr>
		<th>TPS ID</th>
		<th>Jadwal ID</th>
		<th>Pro ID</th>
		<th>Kab ID</th>
		<th>Kec ID</th>
		<th>Kel ID</th>
		<th>No. TPS</th>
		<th>RT</th>
		<th>RW</th>
		<th>Jumlah</th>
	</tr>
	<tr>
		<td align="center"><?echo $data->tps_id;?></td>
		<td align="center"><?echo $data->jadwal_id;?></td>
		<td align="center"><?echo $data->pro_id;?></td>
		<td align="center"><?echo $data->kab_id;?></td>
		<td align="center"><?echo $data->kec_id;?></td>
		<td align="center"><?echo $data->kel_id;?></td>
		<td align="center"><?echo $data->num_tps;?></td>
		<td align="center"><?echo $data->rt;?></td>
		<td align="center"><?echo $data->rw;?></td>
		<td align="center"><?echo $data->jumlah;?></td>
	</tr>
</table>
<br/>
<br/>
