<div class="modal fade" id="ExportModal">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">

		<!-- Modal Header -->
		<div class="modal-header">
			<h4 class="modal-title"><i class="fas fa-download"></i> Export as...</h4>
			<div class="text-right">
				<button type="button" class="close d-none d-sm-block" data-dismiss="modal">&times;</button>
			</div>
		</div>

		<!-- Modal body -->
		<div class="modal-body">
			<div class="row rcontent export-button w-85 ml-auto mr-auto mt-2" id="ExportPrint">
				<div class="col-sm-12 col-md-4 text-center mt-2">
					<i class="fas fa-print" style="font-size: 48px;"></i>
					<p class="export-title"><b>Print</b></p>
				</div>
				<div class="col-sm-12 col-md-8 mt-4">
					<p class="export-tooltip">Prints the entire table.</p>
				</div>
			</div>
			<div class="row rcontent export-button w-85 ml-auto mr-auto mt-2" id="ExportCopy">
				<div class="col-sm-12 col-md-4 text-center mt-2">
					<i class="fas fa-clipboard-list" style="font-size: 48px;"></i>
					<p class="export-title"><b>Copy to Clipboard</b></p>
				</div>
				<div class="col-sm-12 col-md-8 mt-4">
					<p class="export-tooltip">Copies the entire table as text to the clipboard. Paste it down via normal means to reveal.</p>
				</div>
			</div>
			<div class="row rcontent export-button w-85 ml-auto mr-auto mt-2" id="ExportExcel">
				<div class="col-sm-12 col-md-4 text-center mt-2">
					<i class="fas fa-file-excel" style="font-size: 48px;"></i>
					<p class="export-title"><b>Excel File (.xlsx)</b></p>
				</div>
				<div class="col-sm-12 col-md-8 mt-4">
					<p class="export-tooltip">Export as a Microsoft Excel Open XML Spreadsheet file. Best viewed on a spreadsheet program.</p>
				</div>
			</div>
			<div class="row rcontent export-button w-85 ml-auto mr-auto mt-2" id="ExportCSV">
				<div class="col-sm-12 col-md-4 text-center mt-2">
					<i class="fas fa-file-csv" style="font-size: 48px;"></i>
					<p class="export-title"><b>CSV File (.csv)</b></p>
				</div>
				<div class="col-sm-12 col-md-8 mt-4">
					<p class="export-tooltip">Export as a Comma-seperated values file. Best viewed on a spreadsheet program.</p>
				</div>
			</div>
			<div class="row rcontent export-button w-85 ml-auto mr-auto mt-2 export-disabled" id="ExportPDF">
				<div class="col-sm-12 col-md-4 text-center mt-2">
					<i class="fas fa-file-pdf" style="font-size: 48px;"></i>
					<p class="export-title"><b><del>PDF File (.pdf)</del></b></p>
				</div>
				<div class="col-sm-12 col-md-8 mt-4">
					<p class="export-tooltip"><b>WORK IN PROGRESS!</b></p>
					<p class="export-tooltip"><del>Export as a Portable Document Format file. Best viewed on a PDF viewer.</del></p>
				</div>
			</div>
		</div>

		<!-- Modal footer -->
		<div class="modal-footer">
			<button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
		</div>

		</div>
	</div>
</div>