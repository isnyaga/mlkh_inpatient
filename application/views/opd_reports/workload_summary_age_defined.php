<?php 
//OJB: Check if for excel export process
if($export_excel == 1){
	ob_start();
	$this->load->view("partial/header_excel");
}else{
	$this->load->view("partial/header");
} 
?>
<div id="page_title" style="margin-bottom:8px;"><?php echo $title ?></div>
<div id="page_subtitle" style="margin-bottom:8px;"><?php echo $subtitle ?></div>
<div id="table_holder">
	<table width="100%" border="1" class="tablesorter">
		<thead>
			<tr>
            	<th colspan="2">&nbsp;</th>
				<th>Male</th>
                <th>Female</th>
                <th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
            	<th rowspan="3">General Outpatient</th>
                <th>New</th>
                <td><?php echo $data['general']['new']['male']; ?></td>
                <td><?php echo $data['general']['new']['female']; ?></td>
                <td><?php echo array_sum($data['general']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['general']['revisit']['male']; ?></td>
                <td><?php echo $data['general']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['general']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['general']['new']['male'] + $data['general']['revisit']['male']; ?></td>
                <td><?php echo $data['general']['new']['female'] + $data['general']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['general']['new']) + array_sum($data['general']['revisit']); ?></td></tr>
            
            <tr><th colspan="5" bgcolor="#999999">Special Clinics</th></tr>
            <tr>
            	<th rowspan="3">ENT</th>
                 <th>New</th>
                <td><?php echo $data['ent']['new']['male']; ?></td>
                <td><?php echo $data['ent']['new']['female']; ?></td>
                <td><?php echo array_sum($data['ent']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['ent']['revisit']['male']; ?></td>
                <td><?php echo $data['ent']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['ent']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['ent']['new']['male'] + $data['ent']['revisit']['male']; ?></td>
                <td><?php echo $data['ent']['new']['female'] + $data['ent']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['ent']['new']) + array_sum($data['ent']['revisit']); ?></td></tr>
                
            <tr>
            	<th rowspan="3">Eye</th>
                 <th>New</th>
                <td><?php echo $data['eye']['new']['male']; ?></td>
                <td><?php echo $data['eye']['new']['female']; ?></td>
                <td><?php echo array_sum($data['eye']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['eye']['revisit']['male']; ?></td>
                <td><?php echo $data['eye']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['eye']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['eye']['new']['male'] + $data['eye']['revisit']['male']; ?></td>
                <td><?php echo $data['eye']['new']['female'] + $data['eye']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['eye']['new']) + array_sum($data['eye']['revisit']); ?></td></tr>
                
            <tr>
            	<th rowspan="3">Dental</th>
                 <th>New</th>
                <td><?php echo $data['dental']['new']['male']; ?></td>
                <td><?php echo $data['dental']['new']['female']; ?></td>
                <td><?php echo array_sum($data['dental']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['dental']['revisit']['male']; ?></td>
                <td><?php echo $data['dental']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['dental']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['dental']['new']['male'] + $data['dental']['revisit']['male']; ?></td>
                <td><?php echo $data['dental']['new']['female'] + $data['dental']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['dental']['new']) + array_sum($data['dental']['revisit']); ?></td></tr>
                
            <tr>
            	<th rowspan="3">TB</th>
                 <th>New</th>
                <td><?php echo $data['tb']['new']['male']; ?></td>
                <td><?php echo $data['tb']['new']['female']; ?></td>
                <td><?php echo array_sum($data['tb']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['tb']['revisit']['male']; ?></td>
                <td><?php echo $data['tb']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['tb']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['tb']['new']['male'] + $data['tb']['revisit']['male']; ?></td>
                <td><?php echo $data['tb']['new']['female'] + $data['tb']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['tb']['new']) + array_sum($data['tb']['revisit']); ?></td></tr>
            
            <tr>
            	<th rowspan="3">Orthopaedic</th>
                 <th>New</th>
                <td><?php echo $data['orthopaedic']['new']['male']; ?></td>
                <td><?php echo $data['orthopaedic']['new']['female']; ?></td>
                <td><?php echo array_sum($data['orthopaedic']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['orthopaedic']['revisit']['male']; ?></td>
                <td><?php echo $data['orthopaedic']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['orthopaedic']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['orthopaedic']['new']['male'] + $data['orthopaedic']['revisit']['male']; ?></td>
                <td><?php echo $data['orthopaedic']['new']['female'] + $data['orthopaedic']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['orthopaedic']['new']) + array_sum($data['orthopaedic']['revisit']); ?></td></tr>
            
            <tr><th colspan="5" bgcolor="#999999">MCH Clinics</th></tr>
            <tr>
            	<th rowspan="3">CWC</th>
                 <th>New</th>
                <td><?php echo $data['cwc']['new']['male']; ?></td>
                <td><?php echo $data['cwc']['new']['female']; ?></td>
                <td><?php echo array_sum($data['cwc']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['cwc']['revisit']['male']; ?></td>
                <td><?php echo $data['cwc']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['cwc']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['cwc']['new']['male'] + $data['cwc']['revisit']['male']; ?></td>
                <td><?php echo $data['cwc']['new']['female'] + $data['cwc']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['cwc']['new']) + array_sum($data['cwc']['revisit']); ?></td></tr>
            
            <tr>
            	<th rowspan="3">ANC</th>
                 <th>New</th>
                <td><?php echo $data['anc']['new']['male']; ?></td>
                <td><?php echo $data['anc']['new']['female']; ?></td>
                <td><?php echo array_sum($data['anc']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['anc']['revisit']['male']; ?></td>
                <td><?php echo $data['anc']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['anc']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['anc']['new']['male'] + $data['anc']['revisit']['male']; ?></td>
                <td><?php echo $data['anc']['new']['female'] + $data['anc']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['anc']['new']) + array_sum($data['anc']['revisit']); ?></td></tr>
            
            <tr>
            	<th rowspan="3">PNC</th>
                 <th>New</th>
                <td><?php echo $data['pnc']['new']['male']; ?></td>
                <td><?php echo $data['pnc']['new']['female']; ?></td>
                <td><?php echo array_sum($data['pnc']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['pnc']['revisit']['male']; ?></td>
                <td><?php echo $data['pnc']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['pnc']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['pnc']['new']['male'] + $data['pnc']['revisit']['male']; ?></td>
                <td><?php echo $data['pnc']['new']['female'] + $data['pnc']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['pnc']['new']) + array_sum($data['pnc']['revisit']); ?></td></tr>
            
            <tr>
            	<th rowspan="3">FP</th>
                 <th>New</th>
                <td><?php echo $data['fp']['new']['male']; ?></td>
                <td><?php echo $data['fp']['new']['female']; ?></td>
                <td><?php echo array_sum($data['fp']['new']); ?></td></tr>
            </tr>
            <tr><th>Revisit</th>
            	<td><?php echo $data['fp']['revisit']['male']; ?></td>
                <td><?php echo $data['fp']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['fp']['revisit']); ?></td></tr>
            <tr><th>Total</th>
                <td><?php echo $data['fp']['new']['male'] + $data['fp']['revisit']['male']; ?></td>
                <td><?php echo $data['fp']['new']['female'] + $data['fp']['revisit']['female']; ?></td>
                <td><?php echo array_sum($data['fp']['new']) + array_sum($data['fp']['revisit']); ?></td></tr>
            
		</tbody>
	</table>
</div>
<div id="report_summary">
<?php foreach($summary_data as $name=>$value) { ?>
	<div class="summary_row"><?php echo $this->lang->line('reports_'.$name). ': '.to_currency($value); ?></div>
<?php }?>
</div>
<?php 
if($export_excel == 1){
	$this->load->view("partial/footer_excel");
	$content = ob_end_flush();
	
	$filename = trim($filename);
	$filename = str_replace(array(' ', '/', '\\'), '', $title);
	$filename .= "_Export.xls";
	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);
	echo $content;
	die();
	
}else{
	$this->load->view("partial/footer"); 
?>

<script type="text/javascript" language="javascript">
function init_table_sorting()
{
	//Only init if there is more than one row
	if($('.tablesorter tbody tr').length >1)
	{
		$("#sortable_table").tablesorter(); 
	}
}
$(document).ready(function()
{
	init_table_sorting();
});
</script>
<?php 
} // end if not is excel export 
?>
