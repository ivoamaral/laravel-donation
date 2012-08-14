@layout('layouts/main')

@section('content')
<div class="row">

 @include('plugins.navigation')

<div class="span9"><div class="gs-content">

		<h1 class="page-title">Giving History</h1>
		
		<p class="lead">View the chronology of your giving over time. Use the filter box to narrow down by organization, billing method, or purpose. You can also download the data for your records.</p>
		
		<div class="row">
			<div class="span8">
				<hr>					
				<form class="well form-horizontal">
				
				<select id="select01">
					<option>All Organizations</option>
					<option>VCF at the Barn</option>
					<option>Wilmington Christian School</option>
					<option>Door of Hope</option>
					<option>Freedom Outreach</option>
				</select>
				
				<select id="select02" class="span2">
					<option>All Years</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
				</select>
				
				<button type="submit" class="btn">Filter</button>
				
				</form>
				<hr>
			</div>
		</div>
		
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="span3"></div><div class="span3"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Live Filter: <input aria-controls="DataTables_Table_0" type="text"></label></div></div></div><div class="span8"><div class="DTTT_container"><a id="ToolTables_DataTables_Table_0_0" class="DTTT_button DTTT_button_copy"><span>Copy</span><div style="position: absolute; left: 0px; top: 0px; width: 44px; height: 30px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_1" src="js/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="ZeroClipboard_TableToolsMovie_1" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=44&amp;height=30" wmode="transparent" align="middle" height="30" width="44"></div></a><a id="ToolTables_DataTables_Table_0_1" class="DTTT_button DTTT_button_csv"><span>CSV</span><div style="position: absolute; left: 0px; top: 0px; width: 42px; height: 30px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_2" src="js/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="ZeroClipboard_TableToolsMovie_2" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=42&amp;height=30" wmode="transparent" align="middle" height="30" width="42"></div></a><a id="ToolTables_DataTables_Table_0_2" class="DTTT_button DTTT_button_xls"><span>Excel</span><div style="position: absolute; left: 0px; top: 0px; width: 47px; height: 30px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_3" src="js/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="ZeroClipboard_TableToolsMovie_3" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=3&amp;width=47&amp;height=30" wmode="transparent" align="middle" height="30" width="47"></div></a><a id="ToolTables_DataTables_Table_0_3" class="DTTT_button DTTT_button_pdf"><span>PDF</span><div style="position: absolute; left: 0px; top: 0px; width: 41px; height: 30px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_4" src="js/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="ZeroClipboard_TableToolsMovie_4" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=4&amp;width=41&amp;height=30" wmode="transparent" align="middle" height="30" width="41"></div></a><a title="View print view" id="ToolTables_DataTables_Table_0_4" class="DTTT_button DTTT_button_print"><span>Print</span></a></div></div><table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0" class="table table-bordered table-striped dt-giver-history dataTable">
		  <thead>
		    <tr role="row"><th aria-label="Date: activate to sort column descending" aria-sort="ascending" style="width: 101px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting_asc">Date</th><th aria-label="Organization: activate to sort column ascending" style="width: 245px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Organization</th><th aria-label="Amount: activate to sort column ascending" style="width: 79px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Amount</th><th aria-label="" style="width: 28px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled"><i data-original-title="Recurring" class="icon-repeat tip" rel="tooltip"></i></th><th aria-label="Billing Method: activate to sort column ascending" style="width: 155px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Billing Method</th><th aria-label="Purpose: activate to sort column ascending" style="width: 120px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Purpose</th></tr>
		  </thead>
		  
		<tbody aria-relevant="all" aria-live="polite" role="alert"><tr class="odd">
		      <td class="  sorting_1">08-05-2012</td>
		      <td class=" "><a href="giver-add-gift.php?org=12345">Wilmington Christian School</a></td>
		      <td class=" ">$100.00</td>
		      <td class=" "></td>
		      <td class=" "><code>CC VISA *1495</code></td>
		      <td class=" ">Athletic Fund</td>
		    </tr><tr class="even">
		      <td class="  sorting_1">08-05-2012</td>
		      <td class=" "><a href="giver-add-gift.php?org=12345">Door of Hope</a></td>
		      <td class=" ">$190.00</td>
		      <td class=" "><a href="giver-manage-recurring.php"><i data-original-title="Recurring" class="icon-repeat tip" rel="tooltip"></i></a></td>
		      <td class=" "><code>CC VISA *1495</code></td>
		      <td class=" ">General</td>
		    </tr><tr class="odd">
		      <td class="  sorting_1">08-05-2012</td>
		      <td class=" "><a href="giver-add-gift.php?org=12345">Freedom Outreach</a></td>
		      <td class=" ">$25.00</td>
		      <td class=" "><a href="giver-manage-recurring.php"><i data-original-title="Recurring" class="icon-repeat tip" rel="tooltip"></i></a></td>
		      <td class=" "><code>CC MC *2202</code></td>
		      <td class=" ">Meals</td>
		    </tr></tbody></table><div class="row"><div class="span"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li class="next disabled"><a href="#">Next → </a></li></ul></div></div><div class="span"><div id="DataTables_Table_0_info" class="dataTables_info">Showing 1 to 3 of 3 entries</div></div></div></div>
			
	</div></div>
	@endsection