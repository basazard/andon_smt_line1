<div class="modal-dialog" style="width: 40%">
    <div class="modal-content" style="margin-top: 40%; margin-bottom: 40%">
      	<div class="modal-header">
      	<h8 class="modal-title">Repair</h8>
      	<button type="button" class="close" data-dismiss="modal">&times;</button>
      	</div>
      	<div class="modal-body">
		<form method="post" action="buttonrepair.php" id="formrepair" onsubmit="return confirm('Start Repair ?')" class="text-sm-dark" autocomplete="off">
			<input type="hidden" name="action">	  	
		    <table style="font-size: 12px; width: 100%">
		    	<input type="hidden" name="id" id="idrepair">
                <input type="hidden" name="nama" id="stationrepair">
		    	<tr>
					<td width="10%">NPK</td><td> : </td>
		    		<td><input type="text" name="npkrepair" id="npkrepair" class="form-control input-sm" placeholder="*NPK" maxlength="4" required /></td>
				</tr>
		    	<tr>
					<td width="10%">Name</td><td> : </td>
		    		<td><input type="text" name="namarepair" id="namarepair" class="form-control input-sm" placeholder="*Nama Lengkap" required readonly  /></td>
					<!-- <td width="10%">Pass.</td><td> : </td>
		    		<td><input type="password" name="passrepair" id="passrepair" class="form-control input-sm" placeholder="*Password (8 digit)" maxlength="8" required /></td> -->
		    		<td width="10%">Depart.</td><td> : </td>
		    		<td><input type="text" name="deptrepair" id="deptrepair" class="form-control input-lg" placeholder="*Departemen" required readonly /></td>
				</tr>
		    </table>
		    <div class="row justify-content-end mx-0 my-2">
		  	<input class="col-sm-2 btn btn-sm btn-success ml-1" type="submit" name="submit" id="log_login" value="Ok" />
		  	<input class="col-sm-2 btn btn-sm btn-danger mx-1" type="reset" name="reset" id="log_reset" value="Reset" />
		    </div>
		</form>
		</div>
    </div>
</div>