<div class="modal-dialog" style="width: 40%">
    <div class="modal-content" style="margin-top: 40%; margin-bottom: 40%">
      	<div class="modal-header">
      	<h8 class="modal-title">Trouble</h8>
      	<button type="button" class="close" data-dismiss="modal">&times;</button>
      	</div>
      	<div class="modal-body">
		<form method="post" action="buttontrouble.php" id="formtrouble" onsubmit="return confirm('Station Trouble ?')" class="text-sm-dark" autocomplete="off">
			<input type="hidden" name="action">	  	
		    <table style="font-size: 12px; width: 100%">
		    	<input type="hidden" name="id" id="idtrouble">
                <input type="hidden" name="nama" id="stationtrouble">
		    	<tr>
					<td width="10%">NPK</td><td> : </td>
		    		<td><input type="text" name="npktrouble" id="npktrouble" class="form-control input-sm" placeholder="*NPK" maxlength="4" required /></td>
				</tr>
		    	<tr>
				<td width="10%">Name</td><td> : </td>
		    		<td><input type="text" name="namatrouble" id="namatrouble" class="form-control input-sm" placeholder="*Nama Lengkap" required readonly  /></td>
					<!-- <td width="10%">Pass.</td><td> : </td>
		    		<td><input type="password" name="passtrouble" id="passtrouble" class="form-control input-sm" placeholder="*Password (8 digit)" maxlength="8" required /></td> -->
		    		<td width="10%">Depart.</td><td> : </td>
		    		<td><input type="text" name="depttrouble" id="depttrouble" class="form-control input-lg" placeholder="*Departemen" required readonly /></td>
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