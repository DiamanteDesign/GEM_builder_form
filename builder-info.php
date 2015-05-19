<!doctype html>
<html>
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="builder_form.js"></script>
<?php require 'form-functions.php';?>


<meta charset="utf-8">
<title>Preferred Builder Questionaire.html</title>
</head>

<body>
<p><img src="../GEM form header Builder 2.png" width="750" height="150" alt=""/></p>
<p>&nbsp;</p>
<blockquote>
  <h1 id="Title"> 	Preferred Builder Questionnaire</h1>
</blockquote>
<form id="builder_form" name="builder_form" role="form" method="post" action="builder_form.php">
  <table width="92%" border="0" cellpadding="3">
    <tbody>
      <tr>
        <th colspan="11" align="left" scope="col"><h3>I. General Information</h3></th>
      </tr>
      <tr>
        <th width="15%" align="right" scope="col"><label for="" id="builder_name">Company Name:</label></th>
        <th colspan="10" align="left" scope="col"><input name="builder_name" type="text" required id="builder_name" form="builder_form_1" size="35" maxlength="90"></th>
      </tr>
      <tr>
        <td align="right"><strong id="builder_type">Entity:</strong></td>
        <td colspan="10" align="left"><p>
          <label>
            <input type="radio" name="builder_type" value="sole proprietorship" id="builder_type">
            Sole Proprientorship</label>
          <br>
          <label>
            <input type="radio" name="builder_type" value="gen partnership" id="builder_type">
            General Partnership</label>
          <br>
          <label>
            <input type="radio" name="builder_type" value="LLP" id="builder_type">
            LLP</label>
          <br>
          <label>
            <input type="radio" name="builder_type" value="LLC" id="builder_type">
            LLC</label>
          <br>
          <label>
            <input type="radio" name="builder_type" value="C Corp" id="builder_type">
            C Corporation</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right"><label for="builder_address_1" id="builder_address_1"><strong id="builder_address_1">Company Address:</strong></label></td>
        <td colspan="2" align="left"><input name="builder_address_1" type="text" required size="35" id="builder_address_1"></td>
        <td align="right"><strong id="builder_address_2">Company Address:</strong></td>
        <td align="left"><input name="builder_address_2" type="text" id="builder_address_3" size="25"></td>
        <td align="right"><label for="builder_city"><strong id="builder_city">City:</strong></label></td>
        <td align="left"><input type="text" name="builder_city" id="builder_city2"></td>
        
        
<!--        <td align="right" id="builder_state"><strong id="builder_state">State:</strong></td> --> >
        
        
        <td align="left" select name="builder_state">
    <option value="0">Choose a state: </option>
    <?php echo showOptionsDrop($builder_state_arr); ?>
</select></td>
<!--        <td align="left" id="builder_state"><input name="builder_state" type="text" id="builder_state" size="2"></td> -->
        
        <td align="right"><label for="builder_zip"><strong id="builder_zip">Zip</strong>:</label></td>
        <td align="left"><input name="builder_zip" type="text" id="builder_zip" size="9"></td>
      </tr>
      <tr>
        <td align="right"><label for="builder_principal_officer" id="builder_principal_officer"><strong id="builder_principal_officer">Principal Officer:</strong></label></td>
        <td colspan="10" align="left"><input name="builder_principal_officer" type="text" required id="builder_principal_officer" size="35"></td>
      </tr>
      <tr>
        <td align="right"><label for="builder_business_phone"><strong id="builder_business_phone">Business Phone:</strong></label></td>
        <td colspan="10" align="left"><input name="builder_business_phone" type="tel" required id="builder_business_phone" size="35"></td>
      </tr>
      <tr>
        <td align="right"><label for="builder_cell_phone"><strong id="builder_cell_phone">Cell Phone:</strong></label></td>
        <td colspan="10" align="left"><input name="builder_cell_phone" type="tel" id="builder_cell_phone" size="35"></td>
      </tr>
      <tr>
        <td align="right"><label for="builder_fax"><strong id="builder_fax">Fax:</strong></label></td>
        <td colspan="10" align="left"><input name="builder_fax" type="tel" id="builder_fax" size="35"></td>
      </tr>
      <tr>
        <td align="right"><label for="builder_email"><strong id="builder_email">Email:</strong></label></td>
        <td colspan="10" align="left"><input name="builder_email" type="builder_email" id="builder_email" size="35"></td>
      </tr>
      <tr>
        <td align="right"><label for="builder_url"><strong id="url">Web Page URL:</strong></label></td>
        <td colspan="10" align="left"><input name="builder_url" type="builder_url" id="builder_url" title="builder_url" size="35"></td>
      </tr>
      <tr>
        <td colspan="11" align="left" valign="baseline"><h3><strong>II. Green Building Certifications - Experience</strong></h3></td>
      </tr>
      <tr>
        <td height="86" align="right" valign="top"><h4 id="builder_cert_training">a. Green Building Certification- Training</h4>
        <h4 id="builder_cert_training">
          <label for="builder_cert_training" id="builder_cert_training">Other:</label>
        </h4></td>
        <td colspan="10" align="left"><p>
          <label>
            <input type="checkbox" name="builder_cert_training" value="leed" id="builder_cert_training">
            LEED AP</label>
          <br>
          <label>
            <input type="checkbox" name="builder_cert_training" value="associate" id="builder_cert_training">
            Associate<br>
            <br>
            </label>
          <textarea name="builder_cert_training_2" cols="35" rows="5" id="builder_cert_training_2" ></textarea>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right" valign="top"><h4 id="builder_project_cert_affil">&nbsp;</h4>
          <h4>b. Green Building Project Certifications- Affiliations </h4>
        <p>&nbsp;</p>
        <h4><br>
        </h4>
        <h4>Energy Star </h4>
        <p>&nbsp;</p>
        <p id="builder_project_cert_affil">
          <label for="builder_project_cert_affil"><strong>Other :</strong></label>
        </p></td>
        <td colspan="4" align="left" valign="top"><p>&nbsp;</p>
          <p>
            <label>
              <input type="checkbox" name="builder_project_cert_affil" value="leed" id="builder_project_cert_affil">
            LEED</label>
              <br>
            <label>
              <input type="checkbox" name="builder_project_cert_affil" value="HERS" id="builder_project_cert_affil">
            HERS</label>
            <br>
            <label>
              <input type="checkbox" name="builder_project_cert_affil" value="building challenge" id="builder_project_cert_affil">
            DOE Building Challenge</label>
            <br>
            <label>
              <input type="checkbox" name="builder_project_cert_affil" value="passive house" id="builder_project_cert_affil">
            Passive House
            <br>
            </label>
            <input type="checkbox" name="builder_project_cert_affil" value="ICC-700" id="builder_project_cert_affil">
           ICC-700 Code
           <br>
            <label>
              <input type="checkbox" name="builder_project_cert_affil" value="none" id="builder_project_cert_affil">
            None</label>
          </p>
          </p>
          <p>
            <label>
              <input type="radio" name="builder_energystar" value="2" id="builder_energystar">
            2.0</label>
            <br>
            <label>
              <input type="radio" name="builder_energystar" value="2.5" id="builder_energystar">
              2.5</label>
            <br>
            <label>
              <input type="radio" name="builder_energystar" value="3" id="builder_energystar">
              3.0</label>
          </p>
          <p>
            <textarea name="builder_project_cert_affil" cols="35" rows="5" id="builder_project_cert_affil"></textarea>
          </p></td>
        <td colspan="2" align="center" valign="middle" id="builder_hers"><strong id="builder_hers">**If HERS Certification <br>
Current Highest HERS Index Achieved </strong>:</td>
        <td colspan="2" align="left" valign="middle"><input type="number" name="builder_hers" id="builder_hers"></td>
        <td width="13%" colspan="2" align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td colspan="10" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><h4 id="builder_production">Are you a Production Builder?</h4></td>
        <td colspan="2" align="left"><p>
          <label>
            <input type="radio" name="builder_production" value=" YES" id="builder_production">
            Yes</label>
          <br>
          <label>
            <input type="radio" name="builder_production" value=" NO" id="builder_production">
            No</label>
          <br>
        </p></td>
        <td colspan="2" align="center"><strong id="builder_custom">Are you a Custom Builder?</strong></td>
        <td colspan="2" align="left" id="builder_custom"><label>
          <input type="radio" name="builder_custom" value="Yes" id="builder_custom">
          Yes</label>
          <br>
          <label id="builder_customr">
            <input type="radio" name="builder_custom?" value="No" id="builder_custom">
        No</label></td>
        <td colspan="2" align="center"><strong id="builder_res_retro">Are you a Residential Retrofit Contractor?</strong></td>
        <td colspan="2" align="left"><p>
          <label>
            <input type="radio" name="builder_res_retro" value="Yes" id="builder_res_retro">
            Yes</label>
          <br>
          <label>
            <input type="radio" name="builder_res_retro" value="No" id="builder_res_retro">
            No</label>
          <br>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right"><strong id="builder_region">Regions where you build:</strong></td>
        <td colspan="2" align="left"><p>
          <label>
            <input type="checkbox" name="builder_region" value="AL" id="builder_region">
            Alabama</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="AK" id="builder_region">
            Alaska</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="AZ" id="builder_region">
            Arizona</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="AR" id="builder_region">
            Arkansas</label>
          <br>
          <label>
            <input type="checkbox" name="builder_regiond" value="CA" id="builder_region">
            California</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="CO" id="builder_region">
            Colorado</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="CT" id="builder_region">
            Connecticut</label>
          <br>
          <label>
            <input type="checkbox" name="builder_regiond" value="DE" id="builder_region">
            Delaware</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="FL" id="builder_region">
            Florida</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="GA" id="builder_region">
            Georgia</label>
          <br>
        </p></td>
        <td width="16%" colspan="2" align="left"><p>
          <label>
            <input type="checkbox" name="builder_region" value="HI" id="builder_region">
            Hawaii</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="ID" id="builder_region">
            Idaho</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="IL" id="builder_region">
            Illinois</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="NE" id="builder_region">
            Nebraska</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="NV" id="builder_region">
            Nevada </label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="NH" id="builder_region">
            New Hampshire</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="NJ" id="builder_region">
            New Jersey</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="NM" id="builder_region">
            New Mexico</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="NY" id="builder_region">
            New York</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="NC" id="builder_region">
            North Carolina</label>
          <br>
        </p></td>
        <td width="18%" colspan="2" align="left"><p>
          <label>
            <input type="checkbox" name="builder_region" value="ND" id="builder_region">
            North Dakota</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="OH" id="builder_region">
            Ohio</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="OK" id="builder_region">
            Oklahoma</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="OR" id="builder_region">
            Oregon</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="PA" id="builder_region">
            Pennsylvania</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="IN" id="builder_region">
            Indiana</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="IA" id="builder_region">
            Iowa</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="KS" id="builder_region">
            Kansas</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="KY" id="builder_region">
            Kentucky</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="LA" id="builder_region">
            Louisiana</label>
          <br>
        </p></td>
        <td colspan="2" align="left"><p>
          <label>
            <input type="checkbox" name="builder_region" value="ME" id="builder_region">
            Maine</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="MD" id="builder_region">
            Maryland</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="MA" id="regionswhereyoubuild_12">
            Massachusetts</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="MI" id="builder_region">
            Michigan</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="MN" id="builder_region">
            Minnesota</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="MS" id="builder_region">
            Mississippi</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="MO" id="builder_region">
            Missouri</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="MT" id="builder_region">
            Montana</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="RI" id="builder_region">
            Rhode Island</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="SC" id="builder_region">
            South Carolina</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="SD" id="builder_region">
            South Dakota</label>
          <br>
        </p></td>
        <td colspan="2" align="left"><p>
          <label>
            <input type="checkbox" name="builder_region" value="TN" id="builder_region">
            Tennesee</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="TX" id="builder_region">
            Texas</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="UT" id="builder_region">
            Utah</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="VT" id="builder_region">
            Vermont</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="VA" id="builder_region">
            Virginia</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="WA" id="builder_region">
            Washington</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="DC" id="builder_region">
            Washington DC</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="WV" id="builder_region">
            West Virgina</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="WI" id="builder_region">
            Wisconsin</label>
          <br>
          <label>
            <input type="checkbox" name="builder_region" value="WY" id="builder_region">
            Wyoming</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right" id="builder_homes_built"><label for="builder_homes_built"><strong id="builder_homes_built">Number of homes built this year</strong></label></td>
        <td colspan="2" align="left"><input name="builder_year_end_build" type="text" required id="builder_year_end_build" size="15"></td>
        <td colspan="2" align="right"><strong id="builder_avg_sales_price">Average Sales or Construction Price:          </strong></td>
        <td colspan="2" align="left"><input type="text" name="textfield" id="builder_avg_sales_price"></td>
        <td colspan="2" align="left" id="builder_year_end_build"><strong id="builder_year_end_build">Projected year end homes built</strong>:</td>
        <td colspan="2" align="left"><input name="builder_year_end_build" type="text" required id="builder_year_end_build" size="15"></td>
      </tr>
      <tr>
        <td align="right" id="builder_green_building_awards"><h4>Green Building Awards:</h4></td>
        <td colspan="10" align="left"><textarea name="textarea" cols="35" rows="5" id="textarea"></textarea></td>
      </tr>
      <tr>
        <td align="center"><h4 id="builder_info_green_lender">&nbsp;</h4></td>
        <td colspan="8" align="center"><h3 id="builder_info_green_lender"><strong id="builder_info_green_lender">Would you like more information about our Green Lender and Appraisal Platform?</strong><br>
        </h3></td>
        <td colspan="2" align="left"><label>
          <input type="radio" name="builder_info_green_lender" value=" yes" id="builder_info_green_lender">
          Yes</label>
          <br>
          <label>
            <input type="radio" name="builder_info_green_lender" value="no" id="builder_info_green_lender">
        No</label></td>
      </tr>
      <tr>
        <td colspan="11" align="left"><h3> III. What are your current Green Building-Financing Constraints and Challenges?</h3></td>
      </tr>
      <tr>
        <td align="right" valign="top" id="builder_challenges"><h4 id="builder_challenges">Select All that Apply:</h4>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h4>Access to Green:</h4>
        <h4>&nbsp;</h4>
        <h4 id="builder_challenges_3">Capitalization:</h4></td>
        <td colspan="10" align="left"><p>
          <label>
            <input type="checkbox" name="builder_challenges" value="increasing building perf." id="builder_challenges">
            Increasing building performance measures to near-net-zero – incorporating renewables and absorbing capital outlays</label>
          <br>
          <label>
            <input type="checkbox" name="builder_challenges" value="differentiation" id="builder_challenges">
            Market Differentiation – becoming a market leader- innovating beyond other green builder competition</label>
          <br>
          <label>
            <input type="checkbox" name="builder_challenges" value="scalability" id="builder_challenges">
            Scalability – market growth</label>
          <br>
          <label>
            <input type="checkbox" name="builder_challenges" value="marketing" id="builder_challenges">
            Marketing – trained sales force</label>
          <br>
          <label>
            <input type="checkbox" name="builder_challengess" value="low appraisal" id="builder_challenges">
            Low appraisal valuations, inability to apply a “green premium” to property value</label>
          <br>
          <label>
            <input type="checkbox" name="builder_challenges" value="governmental policies" id="builder_challenges">
            Government Policies, municipality approved timelines</label>
          <br>
          <label>
            <input type="checkbox" name="builder_challenges" value="access to qualified" id="builder_challenges">
            Access to qualified, trained green building workforce</label>
          <br>
          <label>
            <input type="checkbox" name="builder_challenges" value="cost benefit" id="builder_challenges">
            Translating cost benefit to potential buyers, clients</label>
          </p>
          <p>&nbsp;</p>
          <p>
            <label>
              <input type="checkbox" name="builder_challenges_2" value="lenders" id="builder_challenges_2">
              Lenders</label>
            <br>
            <label>
              <input type="checkbox" name="builder_challenges_2" value="appraisers" id="builder_challenges_2">
              Appraisers</label>
            <br>
          </p>
          <p>            
            <label>
              <input type="checkbox" name="builder_challenges_3" value="equity partners" id="builder_challenges_3">
              Identifying equity partners</label>
            <br>
            <label>
              <input type="checkbox" name="builder_challenges_3" value="warehouse line" id="builder_challenges_3">
              Production warehouse line</label>
            <br>
            <label>
              <input type="checkbox" name="builder_challenges_3" value="construction loan" id="builder_challenges_3">
              Construction loans</label>
            <br>
            <br>
        </p></td>
      </tr>
      <tr>
        <td colspan="11" align="left"><h3 id="company experience">IV.  Company and Owner Experience</h3></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td colspan="4" align="center"><label for="builder_year_in_business"><strong id="builder_year_in_business">How many years have you been in the Building Industry?</strong></label></td>
        <td colspan="2" align="left"><input name="builder_year_in_business" type="text" id="builder_year_in_business" size="10"></td>
        <td colspan="2" align="left">&nbsp;</td>
        <td colspan="2" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><h4 id="builder_experience">Check all that Apply</h4></td>
        <td colspan="10" align="left"><p>
          <label>
            <input type="checkbox" name="builder_experience" value="build" id="builder_experience">
            Build</label>
          <br>
          <label>
            <input type="checkbox" name="builder_experience" value="custom" id="builder_experience">
            Custom Builder</label>
          <br>
          <label>
            <input type="checkbox" name="builder_experience" value="remodel" id="builder_experience">
            Remodel</label>
          <br>
          <label>
            <input type="checkbox" name="builder_experience" value="multifamily" id="builder_experience">
            Multi Family</label>
          <br>
          <label>
            <input type="checkbox" name="builder_experience" value="residential" id="builder_experience">
            Residential</label>
          <br>
          <label>
            <input type="checkbox" name="builder_experience" value="subcontractor" id="builder_experience">
            Sub contractor</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right" id="builder_num_employees"><label for="builder_num_employees"><strong>Number of Employees:</strong></label></td>
        <td colspan="2" align="left"><input name="builder_num_employees" type="text" id="builder_num_employees" size="15"></td>
        <td colspan="2" align="left">&nbsp;</td>
        <td colspan="2" align="right" id="builder_num_subcontractors"><strong id="builder_num_subcontractors">Number of Sub Contractors:</strong></td>
        <td colspan="2" align="left"><input name="builder_num_subcontractors" type="text" id="builder_num_subcontractors" size="15"></td>
        <td colspan="2" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="builder_num_subcontractors">&nbsp;</td>
        <td colspan="10" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><h4 id="current number of">Current Number of:</h4></td>
        <td width="7%" align="left"><strong id="builder_presales">Pre Sales:</strong></td>
        <td width="11%" align="left"><input name="builder_presales" type="text" id="presales3" size="15"></td>
        <td colspan="2" align="right"><strong id="builder_specs">Specs:</strong></td>
        <td colspan="2" align="left"><input name="builder_specs" type="text" id="specs9" size="15"></td>
        <td colspan="2" align="right"><strong id="builder_devel_projects">Development Projects:</strong></td>
        <td colspan="2" align="left"><input name="builder_devel_projects" type="text" id="builder_devel_projects" size="15"></td>
      </tr>
      <tr>
        <td align="center" id="builder_gem_preferred"><h3 id="builder_gem_preferred">&nbsp;</h3></td>
        <td colspan="6" align="right"><h3 id="builder_gem_preferred">Would you like to become a GEM Preferred Builder<br>
        </h3></td>
        <td colspan="2" align="left"><label>
          <input type="radio" name="builder_gem_preferred" value="Yes" id="builder_gem_preferred">
          Yes</label>
          <br>
          <label id="builder_gem_preferred">
            <input type="radio" name="builder_gem_preferred" value="no" id="builder_gem_preferred">
        No</label></td>
        <td colspan="2" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="builder_optional"><em id="optional">optional</em></td>
        <td colspan="10" align="left"><p>The builder, as an individual and/or officer of the building company, hereby authorizes Green Energy Money to make any normal inquiries necessary to qualify the builder for its’ Preferred Builder program.  It is understood that any inquiry or satisfactory review is not intended to constitute an approval for lending purposes.  The undersigned hereby certifies he/she is authorized to do business in the company’s name.</p></td>
      </tr>
      <tr>
        <td align="right" id="signature"><label for="signature"><strong>Signature:</strong></label></td>
        <td colspan="6" align="left"><input name="signature" type="text" id="signature" size="60"> </td>
        <td width="20%" colspan="2" align="left"><em id="asanindividual">"sig_date";</em></td>
        <td colspan="2" align="left"><label for="sig_date"><strong id="date">Date:</strong></label>
        <input type="sig_date" name="sig_date" id="sig_date"></td>
      </tr>
    </tbody>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
