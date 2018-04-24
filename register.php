<?php include ("./inc/header1.inc.php");?>
<div data-vide-bg="video/social2">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>HrManagenent Registration Form</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Register Now</h2>
			</div>
			<div class="sub-main-w3">	
				<form name="login" action="inc/register.inc.php" method="post">
					<input placeholder="E-mail" name="email" type="email" required>
                         <input placeholder="Full Name" name="fullname" type="text" required>
					<input placeholder="Username" name="username" type="text" required>
					<input  placeholder="Password" name="password" type="password" required>
					<br><br>
                     <input placeholder="Date of Birth" name="dateofbirth" type="date" required id="dateofbirth" class="myformstyle">
                <br><br>
<input type="text" list="genderlist" class="myformstyle" name="gender" placeholder="Select Gender" required id="gender">
<datalist id="genderlist">
<option value="M">Male</option>
<option value="F">Female</option>
</datalist>
                <br><br>
                
                <input type="text" list="maritallist" class="myformstyle" name="maritalstatus" placeholder="Marital Status" required id="maritalstatus">
<datalist id="maritallist">
<option value="Single">Single</option>
<option value="In a Relationship">In a Relationship</option>
<option value="Engaged">Engaged</option>
<option value="Married">Married</option>
<option value="Divorced">Divorced</option>
<option value="Widow">Widow</option>
</datalist>
                <br><br>
                
 <input type="text" list="countrylist" class="myformstyle" name="nationality" placeholder="Country" required id="nationality">
 
 <datalist id="countrylist">
            <option value="" selected="selected">- Select One -</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="British Virgin Islands">British Virgin Islands</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso"   >Burkina Faso</option>
                    <option value=">Burundi"   >Burundi</option>
                    <option value="kh"   >Cambodia</option>
                    <option value="cm"   >Cameroon</option>
                    <option value="ca"   >Canada</option>
                    <option value="cv"   >Cape Verde</option>
                    <option value="ky"   >Cayman Islands</option>
                    <option value="cf"   >Central African Republic</option>
                    <option value="td"   >Chad</option>
                    <option value="cl"   >Chile</option>
                    <option value="cn"   >China</option>
                    <option value="cx"   >Christmas Island</option>
                    <option value="cc"   >Cocos (Keeling) Islands</option>
                    <option value="co"   >Colombia</option>
                    <option value="km"   >Comoros</option>
                    <option value="cg"   >Congo</option>
                    <option value="ck"   >Cook Islands</option>
                    <option value="cr"   >Costa Rica</option>
                    <option value="hr"   >Croatia</option>
                    <option value="cu"   >Cuba</option>
                    <option value="cy"   >Cyprus</option>
                    <option value="cz"   >Czech Republic</option>
                    <option value="cd"   >Democratic Republic of Congo</option>
                    <option value="dk"   >Denmark</option>
                    <option value="xx"   >Disputed Territory</option>
                    <option value="dj"   >Djibouti</option>
                    <option value="dm"   >Dominica</option>
                    <option value="do"   >Dominican Republic</option>
                    <option value="tl"   >East Timor</option>
                    <option value="ec"   >Ecuador</option>
                    <option value="eg"   >Egypt</option>
                    <option value="sv"   >El Salvador</option>
                    <option value="gq"   >Equatorial Guinea</option>
                    <option value="er"   >Eritrea</option>
                    <option value="ee"   >Estonia</option>
                    <option value="et"   >Ethiopia</option>
                    <option value="fk"   >Falkland Islands</option>
                    <option value="fo"   >Faroe Islands</option>
                    <option value="fm"   >Federated States of Micronesia</option>
                    <option value="fj"   >Fiji</option>
                    <option value="fi"   >Finland</option>
                    <option value="fr"   >France</option>
                    <option value="gf"   >French Guyana</option>
                    <option value="pf"   >French Polynesia</option>
                    <option value="tf"   >French Southern Territories</option>
                    <option value="ga"   >Gabon</option>
                    <option value="gm"   >Gambia</option>
                    <option value="ge"   >Georgia</option>
                    <option value="de"   >Germany</option>
                    <option value="Ghana"   >Ghana</option>
                    <option value="gi"   >Gibraltar</option>
                    <option value="gr"   >Greece</option>
                    <option value="gl"   >Greenland</option>
                    <option value="gd"   >Grenada</option>
                    <option value="gp"   >Guadeloupe</option>
                    <option value="gu"   >Guam</option>
                    <option value="gt"   >Guatemala</option>
                    <option value="gn"   >Guinea</option>
                    <option value="gw"   >Guinea-Bissau</option>
                    <option value="gy"   >Guyana</option>
                    <option value="ht"   >Haiti</option>
                    <option value="hm"   >Heard Island and Mcdonald Islands</option>
                    <option value="hn"   >Honduras</option>
                    <option value="Hong Kong"   >Hong Kong</option>
                    <option value="hu"   >Hungary</option>
                    <option value="is"   >Iceland</option>
                    <option value="in"   >India</option>
                    <option value="id"   >Indonesia</option>
                    <option value="ir"   >Iran</option>
                    <option value="iq"   >Iraq</option>
                    <option value="xe"   >Iraq-Saudi Arabia Neutral Zone</option>
                    <option value="ie"   >Ireland</option>
                    <option value="il"   >Israel</option>
                    <option value="it"   >Italy</option>
                    <option value="ci"   >Ivory Coast</option>
                    <option value="jm"   >Jamaica</option>
                    <option value="jp"   >Japan</option>
                    <option value="jo"   >Jordan</option>
                    <option value="kz"   >Kazakhstan</option>
                    <option value="ke"   >Kenya</option>
                    <option value="ki"   >Kiribati</option>
                    <option value="kw"   >Kuwait</option>
                    <option value="kg"   >Kyrgyzstan</option>
                    <option value="la"   >Laos</option>
                    <option value="lv"   >Latvia</option>
                    <option value="lb"   >Lebanon</option>
                    <option value="ls"   >Lesotho</option>
                    <option value="Liberia"   >Liberia</option>
                    <option value="Libya"   >Libya</option>
                    <option value="li"   >Liechtenstein</option>
                    <option value="lt"   >Lithuania</option>
                    <option value="lu"   >Luxembourg</option>
                    <option value="mo"   >Macau</option>
                    <option value="mk"   >Macedonia</option>
                    <option value="mg"   >Madagascar</option>
                    <option value="mw"   >Malawi</option>
                    <option value="my"   >Malaysia</option>
                    <option value="mv"   >Maldives</option>
                    <option value="Mali"   >Mali</option>
                    <option value="mt"   >Malta</option>
                    <option value="mh"   >Marshall Islands</option>
                    <option value="mq"   >Martinique</option>
                    <option value="mr"   >Mauritania</option>
                    <option value="mu"   >Mauritius</option>
                    <option value="yt"   >Mayotte</option>
                    <option value="Mexico"   >Mexico</option>
                    <option value="md"   >Moldova</option>
                    <option value="mc"   >Monaco</option>
                    <option value="mn"   >Mongolia</option>
                    <option value="ms"   >Montserrat</option>
                    <option value="ma"   >Morocco</option>
                    <option value="mz"   >Mozambique</option>
                    <option value="mm"   >Myanmar</option>
                    <option value="Namibia"   >Namibia</option>
                    <option value="nr"   >Nauru</option>
                    <option value="np"   >Nepal</option>
                    <option value="nl"   >Netherlands</option>
                    <option value="an"   >Netherlands Antilles</option>
                    <option value="nc"   >New Caledonia</option>
                    <option value="nz"   >New Zealand</option>
                    <option value="ni"   >Nicaragua</option>
                    <option value="ne"   >Niger</option>
                    <option value="Nigeria"  >Nigeria</option>
                    <option value="nu"   >Niue</option>
                    <option value="nf"   >Norfolk Island</option>
                    <option value="kp"   >North Korea</option>
                    <option value="mp"   >Northern Mariana Islands</option>
                    <option value="no"   >Norway</option>
                    <option value="om"   >Oman</option>
                    <option value="pk"   >Pakistan</option>
                    <option value="pw"   >Palau</option>
                    <option value="ps"   >Palestinian Territories</option>
                    <option value="pa"   >Panama</option>
                    <option value="pg"   >Papua New Guinea</option>
                    <option value="py"   >Paraguay</option>
                    <option value="pe"   >Peru</option>
                    <option value="ph"   >Philippines</option>
                    <option value="pn"   >Pitcairn Islands</option>
                    <option value="pl"   >Poland</option>
                    <option value="pt"   >Portugal</option>
                    <option value="pr"   >Puerto Rico</option>
                    <option value="qa"   >Qatar</option>
                    <option value="re"   >Reunion</option>
                    <option value="ro"   >Romania</option>
                    <option value="ru"   >Russia</option>
                    <option value="rw"   >Rwanda</option>
                    <option value="sh"   >Saint Helena and Dependencies</option>
                    <option value="kn"   >Saint Kitts and Nevis</option>
                    <option value="lc"   >Saint Lucia</option>
                    <option value="pm"   >Saint Pierre and Miquelon</option>
                    <option value="vc"   >Saint Vincent and the Grenadines</option>
                    <option value="ws"   >Samoa</option>
                    <option value="sm"   >San Marino</option>
                    <option value="st"   >Sao Tome and Principe</option>
                    <option value="sa"   >Saudi Arabia</option>
                    <option value="sn"   >Senegal</option>
                    <option value="sc"   >Seychelles</option>
                    <option value="sl"   >Sierra Leone</option>
                    <option value="sg"   >Singapore</option>
                    <option value="sk"   >Slovakia</option>
                    <option value="si"   >Slovenia</option>
                    <option value="sb"   >Solomon Islands</option>
                    <option value="so"   >Somalia</option>
                    <option value="za"   >South Africa</option>
                    <option value="gs"   >South Georgia and South Sandwich Islands</option>
                    <option value="kr"   >South Korea</option>
                    <option value="es"   >Spain</option>
                    <option value="pi"   >Spratly Islands</option>
                    <option value="lk"   >Sri Lanka</option>
                    <option value="sd"   >Sudan</option>
                    <option value="sr"   >Suriname</option>
                    <option value="sj"   >Svalbard and Jan Mayen</option>
                    <option value="sz"   >Swaziland</option>
                    <option value="se"   >Sweden</option>
                    <option value="ch"   >Switzerland</option>
                    <option value="sy"   >Syria</option>
                    <option value="tw"   >Taiwan</option>
                    <option value="tj"   >Tajikistan</option>
                    <option value="tz"   >Tanzania</option>
                    <option value="th"   >Thailand</option>
                    <option value="tg"   >Togo</option>
                    <option value="tk"   >Tokelau</option>
                    <option value="to"   >Tonga</option>
                    <option value="tt"   >Trinidad and Tobago</option>
                    <option value="tn"   >Tunisia</option>
                    <option value="tr"   >Turkey</option>
                    <option value="tm"   >Turkmenistan</option>
                    <option value="tc"   >Turks And Caicos Islands</option>
                    <option value="tv"   >Tuvalu</option>
                    <option value="ug"   >Uganda</option>
                    <option value="ua"   >Ukraine</option>
                    <option value="ae"   >United Arab Emirates</option>
                    <option value="uk"   >United Kingdom</option>
                    <option value="us"   >United States</option>
                    <option value="um"   >United States Minor Outlying Islands</option>
                    <option value="uy"   >Uruguay</option>
                    <option value="vi"   >US Virgin Islands</option>
                    <option value="uz"   >Uzbekistan</option>
                    <option value="vu"   >Vanuatu</option>
                    <option value="va"   >Vatican City</option>
                    <option value="ve"   >Venezuela</option>
                    <option value="vn"   >Vietnam</option>
                    <option value="wf"   >Wallis and Futuna</option>
                    <option value="eh"   >Western Sahara</option>
                    <option value="ye"   >Yemen</option>
                    <option value="zm"   >Zambia</option>
                    <option value="zw"   >Zimbabwe</option>
                    <option value="rs"   >Serbia</option>
                    <option value="me"   >Montenegro</option>
</datalist>

<br><br>
<input placeholder="State of Origin" name="stateoforigin" type="text" required id="stateoforigin" class="myformstyle">
                <br><br>

<input placeholder="Telephone Number" name="telephone" type="text" required id="telephone" class="myformstyle">
                <br><br>

<input placeholder="Contact Address" name="address" type="text" required id="address" class="myformstyle">
                <br><br>


					
                       <input type="submit" name="login" value="Register">
				</form>
                <br>
                <div class="navbar-right social-icons"> 
						<a href="index_applicant.php" style="float: none;">Log In Here</a>	  
						</div>

			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<?php include ("./inc/footer.inc.php"); ?>