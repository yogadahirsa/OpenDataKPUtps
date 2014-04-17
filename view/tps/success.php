<style>
	table,th,td{
		border:1px solid black;
		border-collapse:collapse;
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

<?echo $frm->form("tps.php",$hidden);?>
	TPS ID: <?echo $frm->textbox("text","tps_id","20","16");?>&nbsp;
	<?echo $frm->button("Submit");?>
</form>
<br/>

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
		<th width=30%>Param</th>
		<th>Definition</th>
	</tr>
	<tr>
		<td>tps_id</td>
		<td>The ID of the TPS</td>
	</tr>
	<tr>
		<td>jadwal_id</td>
		<td>The ID of the event</td>
	</tr>
	<tr>
		<td>pro_id</td>
		<td>The ID of the province</td>
	</tr>
	<tr>
		<td>kab_id</td>
		<td>The ID of the kabupaten</td>
	</tr>
	<tr>
		<td>kec_id</td>
		<td>The ID of the kecamatan</td>
	</tr>
	<tr>
		<td>kel_id</td>
		<td>The ID of the kelurahan</td>
	</tr>
	<tr>
		<td>num_tps</td>
		<td>The number of TPS</td>
	</tr>
	<tr>
		<td>address</td>
		<td>The address of tps</td>
	</tr>
	<tr>
		<td>rt</td>
		<td>The number of RT</td>
	</tr>
	<tr>
		<td>rw</td>
		<td>The number of rw</td>
	</tr>
	<tr>
		<td>lat</td>
		<td>The lattitude</td>
	</tr>
	<tr>
		<td>lon</td>
		<td>The longitude</td>
	</tr>
	<tr>
		<td>jumlah</td>
		<td>The number voters in TPS</td>
	</tr>
	<tr>
		<td>max_tps</td>
		<td>The maximum number of voters in TPS</td>
	</tr>
	<tr>
		<td>type</td>
		<td>The type of TPS</td>
	</tr>
	<tr>
		<td>remark</td>
		<td>The purpose of TPS</td>
	</tr>
	<tr>
		<td>created_id</td>
		<td>The ID when TPS created</td>
	</tr>
	<tr>
		<td>created_date</td>
		<td>The first time TPS created</td>
	</tr><tr>
		<td>approved_id</td>
		<td>The ID when TPS approved</td>
	</tr>
	<tr>
		<td>approved_date</td>
		<td>The first time TPS approved</td>
	</tr>
	<tr>
		<td>status</td>
		<td>The status of TPS</td>
	</tr>
	<tr>
		<td>kpps</td>
		<td>The person who responsible for TPS</td>
	</tr>
</table>
<br/>
<br/>
