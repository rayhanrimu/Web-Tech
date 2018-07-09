<!DOCTYPE html>
<html>
<head>
	<title>Passport_Stage3</title>
</head>
<body>
	<h2>PASSPORT APPLICATION - STAGE 3</h2>
     <p>Online Application ID:</p>
     <p>Filed marked with <b style="color: red">(*)</b> are mandatory</p>
     <hr/>
     <table>
     	<form>

	     	<tr>
		     	<td rowspan="100" width="250 px"></td>
	     		<td colspan="3"><h4>Payment Information</h4></td>
	     		<td colspan="3" width="30 px"></td>
     		
     		</tr>

     		<tr>
     			<td><label>Payment Type:</label></td>
	     		<td width="30 px"></td>
	     		<td>
	     		<input type="radio" name="payment" value="Regular">Online<br>
	     		<input type="radio" name="payment" value="Express">Non-Online
	     		</td>
	     		<td colspan="3" width="30 px"></td>
     		</tr>

     		<tr>
	     		<td colspan="3">
	     		<input type="checkbox" name="Same" value="Same"><i>Skip Payment</i><br>
	     		</td>

	     		<td colspan="4" width="30 px"></td>
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Amount:</label><b style="color: red">*</b></td>
	     		
	     		<td><select style="width: 150px" name="country">
     				<option value="BDT">-BDT-</option>
     				<option value="$">$</option>
					<option value="Rupi">Rupi</option>
     				<option value="Euro">Euro</option>
     				<option value="Riyal">Riyal</option>

     			</select>
     			<input style="width: 150px" type="value" id="input" placeholder="Amount" >
     			</td>
	     		<td colspan="3" width="30 px"></td>
     		
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Date of Payment:</label><b style="color: red">*</b></td>
	     		
	     		<td ><input style="width: 300px" type="date" id="payDate" class="form-control"></td>
	     		<td colspan="3" width="30 px"></td>
     		
     		</tr>
     		<tr>
     			<td colspan="2"><label>Receipt No:</label><b style="color: red">*</b></td>
	     		<td><input style="width: 300px" type="id" id="id" placeholder="Receipt Number"></td>
	     		<td colspan="3" width="30 px"></td>
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Name Of Bank:</label></td>
	     		<td><select style="width: 300px" name="Bank">
	     				<option value="Select">-Select-</option>
	     				<option value="Janata Bank">Janata Bank</option>
	     				<option value="Dutch">Dutch Bangla</option>
	     				<option value="Sonali">Sonali</option>
	     				<option value="Islami Bank">Islami Bank</option>

	     			</select>
	     		</td>
	     		<td colspan="3" width="30 px"></td>
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Name Of Branch:</label></td>
	     		<td><select style="width: 300px" name="Branch">
	     				<option value="Select">-Select-</option>
	     				<option value="Dinajpur">Dinajpur</option>
	     				<option value="Banani">Banani</option>
	     				<option value="Kuril">Kuril</option>
	     				<option value="Khulna">Khulna</option>

	     			</select>
	     		</td>
	     		<td colspan="3" width="30 px"></td>
     		</tr>

     		<tr>
     			<td height="30 px" width="10 px" colspan="6"></td>
     		
     		</tr>

     		<tr>
	     		<td style="height: 300px" colspan="5" width="30 px"></td>
				<td align="center" colspan="2"> 
	     		<input type="submit" value="PREVIOUS PAGE">
	     		<input type="submit" value="SAVE & NEXT">
	     		</td>
     		</tr>
     	</form>
     </table>
</body>
</html>