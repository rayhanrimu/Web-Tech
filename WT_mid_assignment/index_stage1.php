<!DOCTYPE html>
<html>
<head>
	<title>passport</title>
</head>
<body>
     <h2>PASSPORT APPLICATION - STAGE 1</h2>
     <p><i style="color: red">Before felling up the online application form read the <a href="http://www.passport.gov.bd/Default.aspx">guidelines</a> carefully</i></p>
     <p>Filed marked with <b style="color: red">(*)</b> are mandatory</p>
     <hr/>

     <table>
     <form>
     	<tr>
     		<td rowspan="100" width="150 px"></td>
     		<td colspan="3"><h3>Passport Application Information</h3></td>
     		<td rowspan="100" width="150 px"></td>
     		<td><label>Date of Birth:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td ><input style="width: 300px" type="date" id="birthDate" class="form-control"></td>
     	</tr>
     	<tr>
     		
     		<td><label>Applying in:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td >
     			<select style="width: 300px" name="country">
     				<option value="Bangladesh">Bangladesh</option>
     				<option value="India">India</option>
     				<option value="Canada">Canada</option>
     				<option value="Australia">Australia</option>
     				<option value="Japan">Japan</option>
     			</select>
     		</td>
     		
     		<td rowspan="3"><label>Gender:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td rowspan="3">
			<input type="radio" name="gender" value="Male">Male<br>
     		<input type="radio" name="gender" value="Female">Female<br>
     		<input type="radio" name="gender" value="Others">Others</td>
     	</tr>

     	<tr>
     		
     		<td><label>Application Type:</label></td>
     		<td width="30 px"></td>
     		<td><b>NEW APPLICATION</b></td>
     		
     		<td width="30 px"></td>
     		
     	</tr>

     	<tr>
     		
     		<td><label>Passport Type:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td >
     			<select style="width: 300px" name="country">
     				<option value="Select">-Select-</option>
     				<option value="ORDINARY">ORDINARY</option>
     				<option value="DIPLOMATIC">DIPLOMATIC</option>
     				<option value="OFFICIAL">OFFICIAL</option>

     			</select>
     		</td>
     		
     		<td width="30 px"></td>
     
     	</tr>

     	<tr>
     		
     		<td><label>Delivery Type:</label></td>
     		<td width="30 px"></td>
     		<td>
     		<input type="radio" name="delivery" value="Regular">Regular<br>
     		<input type="radio" name="delivery" value="Express">Express
     		</td>
     		
     		<td><label>Birth ID No:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td><input style="width: 300px" type="id" id="id" placeholder="ID" ></td>
     	</tr>

		<tr>
			<td colspan="3"><h3>Personal Information</h3></td>
			
			<td><label>National ID No:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td><input style="width: 300px" type="id" id="id" placeholder="ID" ></td>
		</tr>
		
     	<tr>
     		<td colspan="2"><label>Name of Applicant:</label><b style="color: red"> *</b></td>
     		<td><input style="width: 300px" type="text" id="name" placeholder="name" ></td>
			
			<td><label>Tax Id No:</label></td>
     		<td width="30 px"></td>
     		<td><input style="width: 300px" type="id" id="id" placeholder="ID" ></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>First Part (Given Name):</label></td>
     		<td><input style="width: 300px" type="text" id="name" placeholder="name" ></td>
     		
     		<td><label>Height:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td>
			<input style="width: 30px" type="No" id="height" ><b> cm</b>
     		<input style="width: 30px" type="No" id="height" ><b> inch</b>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Second Part (Surname):</label><b style="color: red">*</b></td>
     		
     		<td><input style="width: 300px" type="text" id="name" placeholder="name" ></td>
     		
     		<td><label>Religion:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td><select style="width: 300px" name="Religion">
     				<option value="Select">-Select-</option>
     				<option value="Islam">Islam</option>
     				<option value="Hinduism">Hinduism</option>
					<option value="Buddhism">Buddhism</option>
					<option value="Judaism">Judaism</option>
     				<option value="Others">Others</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="3"><p>Guardian
     		<input type="checkbox" name="guardian" value="guardian">
     		 <b style="color: red">tick</b> only if applicant is legally adapted</p></td>
     		
     		<td><label>Email:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td><input style="width: 300px" type="text" id="email" placeholder="Email Address"></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Father's Name:</label><b style="color: red">*</b></td>
     		<td><input style="width: 300px" type="text" id="Fathername" placeholder="FatherName" ></td>
     		
     		<td colspan="3"><h3>Citizenship Information</b></h3>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Father's Nationality:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="FNationality">
     				<option value="Select">-Select-</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Afganistani">Afganistani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     		
     		<td><label>Nationality:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td><select style="width: 300px" name="CitizenNationality">
     				<option value="Select">-Select-</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Afganistani">Afganistani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Father's Profession:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="FProfession">
     				<option value="Select">-Select-</option>
     				<option value="Professor">Professor</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td><label>Citizenship Status:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td><select style="width: 300px" name="CitizenStatus">
     				<option value="Select">-Select-</option>
     				<option value="Birth">Birth</option>
					<option value="Migration">Migration</option>
     				<option value="Tourist">Tourist</option>
     				<option value="others">Others</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		
     		<td><label>Mother's Name:</label><b style="color: red">*</b></td>
     		<td width="30 px"></td>
     		<td>
     			<input style="width: 300px" type="text" id="Mothername" placeholder="MotherName" >
     		</td>
     		
     		<td><label>Dual Citizenship:</label><b style="color: red"> *</b></td>
     		<td width="30 px"></td>
     		<td>
	     		<input type="radio" name="Dcitizenship" value="Yes">Yes<br>
	     		<input type="radio" name="Dcitizenship" value="No">No
	     	</td>

     	</tr>

     	<tr>
     		<td colspan="2"><label>Mother's Nationality:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="MNationality">
     				<option value="Select">-Select-</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Japanis">Japanis</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><h4>Present Address</h4></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Mother's Profession:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="MProfession">
     				<option value="Select">-Select-</option>
					<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				
     			</select>
     		</td>
     		
     		<td><label>Village/House:</label></td>
     		<td width="30 px"></td>
     		<td>
     			<input style="width: 300px" type="text" id="VillageHouse" placeholder="Village_house" >
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Spouse's Name:</label><b style="color: red">*</b></td>
     		<td><input style="width: 300px" type="text" id="Spousename" placeholder="SpouseName" ></td>
     		</td>
     		
     		<td colspan="2"><label>Road/Block/Sector:</label></td>
     		<td>
     			<input style="width: 300px" type="text" id="Road_Block" placeholder="Road_Block" >
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Spouse's Nationality:</label><b style="color: red"></b></td>
     		
     		<td><select style="width: 300px" name="SpNationality">
     				<option value="Select">-Select-</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Afganistani">Afganistani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>District:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="District">
     				<option value="Select">-Select-</option>
     				<option value="Dhaka">Dhaka</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Spouse's Profession:</label><b style="color: red"></b></td>
     		
     		<td><select style="width: 300px" name="SpProfession">
     				<option value="Select">-Select-</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>Police Station:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="District">
     				<option value="Select">-Select-</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Marital Status:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="MaritalStatus">
     				<option value="Select">-Select-</option>
     				<option value="Married">Married</option>
     				<option value="UnMarried">Unmarried</option>
     				<option value="Divorsed">Divorsed</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>Post Office:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="PostOffice">
     				<option value="Select">-Select-</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="Kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Applicant's Profession:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="SpProfession">
     				<option value="Select">-Select-</option>
					<option value="Student">Student</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td colspan="3"><h4>Permanent Address:</h4></td>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Country of Birth:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="BCountry">
     				<option value="Select">-Select-</option>
     				<option value="Bangladesh">Bangladesh</option>
     				<option value="India">India</option>
     				<option value="France">France</option>
     				<option value="Italy">Italy</option>

     			</select>
     		</td>
     		
     		<td colspan="3"><p>
     		<input type="checkbox" name="Same" value="Same">Same as Above</p></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Birth District:</label><b style="color: red">*</b><td><select style="width: 300px" name="Birth_District">
     				<option value="Select">-Select-</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     		
     		<td><label>Village/House:</label></td>
     		<td width="40 px"></td>
     		<td>
     			<input style="width: 300px" type="text" id="VillageHouse" placeholder="Village_house" >
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>Road/Block/Sector:</label></td>
     		<td>
     			<input style="width: 300px" type="text" id="Road_Block" placeholder="Road_Block" >
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>District:</label><b style="color: red">*</b><td><select style="width: 300px" name="District">
     				<option value="Select">-Select-</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>Police Station:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="District">
     				<option value="Select">-Select-</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Dinajpur</option>
     				<option value="Khulna">Shahbag</option>
     				<option value="kustia">Khulna</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>Post Office:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="PostOffice">
     				<option value="Select">-Select-</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Dinajpur</option>
     				<option value="Khulna">Shahbag</option>
     				<option value="kustia">Khulna</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td height="30 px" width="10 px" colspan="6"></td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td align="right" colspan="3"> 
     		<input type="submit" value="SAVE NOW & CONTINUE IN THE FUTURE">
     		<input type="submit" value="SAVE & NEXT">
     		</td>
     	</tr>

     	<tr>
     		<td height="40 px" width="10 px" colspan="6"></td>
     	</tr>

     </form>
     </table>

</body>
</html>