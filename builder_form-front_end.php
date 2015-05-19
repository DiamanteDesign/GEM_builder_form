<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Builder Form</title>


<link rel="stylesheet" type="text/css" href="" />

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="builder_form.js"></script>
<link rel="stylesheet" type="text/css" href="builder_form.css" />
<?php require 'form-functions.php';?>
</head>

<body>

<div class="container">
<form id="builder-form" class="form-horizontal" role="form" name="builder-form" method="post" action="builder_form.php">
<legend id="builder-form-title" class="form-title"><h1>Preferred Builder Questionnaire</h1></legend>
<fieldset>
    <legend><h3>I. General Information</h3></legend>

<!-- Company Name -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="company_name">Company Name</label>
  <input id="company_name" name="company_name" class="field-input col-sm-4" required type="text">
</div>

<!-- Entity -->

<div class="form-group">
  <label class="radio control-label col-lg-2 col-sm-3" for="company_type">Entity</label>
    <div class="radio field-input col-lg-offset-2 col-md-offset-3">
      <label for="company_type-0">
        <input name="company_type" id="company_type-0" value="Sole Proprietorship" checked="checked" type="radio">
        Sole Proprietorship
      </label>
    </div>
    <div class="radio field-input col-lg-offset-2 col-sm-offset-3">
      <label for="company_type-1">
        <input name="company_type" id="company_type-1" value="General Partnership" type="radio">
        General Partnership
      </label>
    </div>
    <div class="radio field-input col-lg-offset-2 col-sm-offset-3">
      <label for="company_type-2">
        <input name="company_type" id="company_type-2" value="LLC" type="radio">
        LLC
      </label>
    </div>
    <div class="radio field-input col-lg-offset-2 col-sm-offset-3">
      <label for="company_type-3">
        <input name="company_type" id="company_type-3" value="LLP" type="radio">
        LLP
      </label>
    </div>
    <div class="radio field-input col-lg-offset-2 col-sm-offset-3">
      <label for="company_type-4">
        <input name="company_type" id="company_type-4" value="C Corporation" type="radio">
        C Corporation
      </label>
    </div>
</div>

<!-- Company Address 1 -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="company-address1">Company Address</label>
  <div class="field-input">
    <input id="company-address1" name="company-address1" class="col-sm-4" type="text">
  </div>
</div>

<!-- Company Address 2 -->

<div class="form-group">
<label class="control-label col-lg-2 col-sm-3" for="company-address2"></label>
  <div class="field-input">
    <input id="company-address2" name="company-address2" class="col-sm-4" required type="text">
  </div>
</div>

<!-- City -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="company_city">City</label>
  <div class="field-input">
    <input id="company_city" name="company_city" class="col-sm-3" type="text">
  </div>
</div>

<!-- State -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="company_state">State</label>
  <div class="field-input">
    <?php statedropdown("company_state");?>
  </div>
</div>

<!-- Zip -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="company_zip">Zip</label>
  <div class="field-input">
    <input id="company_zip" name="company_zip" class="col-xs-1" type="text" size="5">
    <div class="single-ch-addon">-</div>
    <input id="company_zip4" name="company_zip4" class="col-xs-1" placeholder="0000" type="text">
  </div>
</div>

<!-- Principal Officer -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="principal_officer">Principal Officer</label>
  <div class="field-input">
    <input id="principal_officer" name="principal_officer" class="input-xlarge" type="text">
  </div>
</div>

<!-- Business Phone -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="business_phone">Business Phone</label>
  <div class="field-input">
    <input id="business_phone" name="business_phone" placeholder="" class="input-xlarge input-textfield-tel" type="tel">
  </div>
</div>

<!-- Cell Phone -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="cell_phone">Cell Phone</label>
  <div class="field-input">
    <input id="cell_phone" name="cell_phone" class="input-textfield-tel" type="tel">
  </div>
</div>

<!-- Fax -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="fax">Fax</label>
  <div class="field-input">
    <input id="fax" name="fax" class="input-textfield-tel" type="tel">
  </div>
</div>

<!-- Email -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="email">Email</label>
  <div class="field-input">
    <input id="email" name="email" class="input-textfield-email" type="email">
  </div>
</div>

<!-- Url -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="url">Website URL</label>
  <div class="field-input">
    <input id="url" name="url" class="input-textfield-url" type="url">
  </div>
</div>

<!-- Social Security Number -->

    <div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="ssn">Social Security No.</label>
  <div class="field-input">
    <input id="ssn" name="ssn" class="input-medium" type="text">
  </div>
</div>

<!-- Tax ID -->

<div class="form-group">
  <label class="control-label col-lg-2 col-sm-3" for="taxid">Tax ID</label>
  <div class="field-input">
    <input id="taxid" name="taxid" class="input-medium" type="url">
  </div>
</div>


<fieldset>
    <legend><h3>II. Green Building Certifications - Experience</h3></legend>


<!-- Green Building Certification-Training -->

<div class="form-group">
  <label class="control-label col-sm-3" for="green-training">Green Building Certification-Training</label>
  <div class="checkbox">
    <div class="col-sm-offset-3 col-sm-9">
      <label><input name="green-training" id="green-training-0" value="LEED AP" type="checkbox">
      LEED AP
      </label>
    </div>
  </div>
  <div class="checkbox">
    <div class="col-sm-offset-3 col-sm-9">
      <label><input name="green-training" id="green-training-1" value="Associate" type="checkbox">
      Associate
      </label>
    </div>
  </div>
  <div class="checkbox">
    <div class="col-sm-offset-2 col-sm-10">
      <label><input name="green-training" id="green-training-2" value="Other" type="checkbox">
      Other
    </label>
  </div>
</div>












        <td height="86" align="right" valign="top"><h4 id="green certifications">a. Green Building Certification- Training:</h4>
        <h4 id="Other certifications">
          <label for="cert train other" id="other green certifications">Other:</label>
        </h4></td>
        <td colspan="6" align="left"><p>
          <label>
            <input type="checkbox" name="green_building_certification_training" value="leed" id="greenbuildingcertificationtraining_0">
            LEED AP</label>
          <br>
          <label>
            <input type="checkbox" name="green_building_certification_training" value="associate" id="greenbuildingcertificationtraining_1">
            Associate<br>
            </label>          
           <label>
            <input type="checkbox" name="green_building_certification_training" value="other" id="greenbuildingcertificationtraining_2">
            Other<br>
            <br>
            </label>
          <textarea name="green_building_certification_training_other" cols="35" rows="5" id="cert_train_other"></textarea>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right" valign="top"><h4 id="green affiliations and certifications">&nbsp;</h4>
          <h4>b. Green Building Project Certifications- Affiliations: </h4>
        <p>&nbsp;</p>
        <h4><br>
        </h4>
        <h4>Energy Star: </h4>
        <p>&nbsp;</p>
        <p id="other green affiliations">
          <label for="other green affiliations"><strong>Other :</strong></label>
        </p></td>
        <td colspan="3" align="left" valign="top"><p>&nbsp;</p>
          <p>
            <label>
              <input type="checkbox" name="project_certification_affiliations" value="leed" id="projectcertificationaffiliations_0">
            LEED</label>
              <br>
            <label>
              <input type="checkbox" name="project_certification_affiliations" value="HERS" id="projectcertificationaffiliations_1">
            HERS</label>
            <br>
            <label>
              <input type="checkbox" name="project_certification_affiliations" value="building challenge" id="projectcertificationaffiliations_2">
            DOE Building Challenge</label>
            <br>
            <label>
              <input type="checkbox" name="project_certification_affiliations" value="passive house" id="projectcertificationaffiliations_3">
            Passive House
            <br>
            </label>
            <input type="checkbox" name="project_certification_affiliations" value="ICC-700" id="projectcertificationaffiliations_4">
           ICC-700 Code
           <br>
            <label>
              <input type="checkbox" name="project_certification_affiliations" value="none" id="projectcertificationaffiliations_5">
            None</label>
          </p>
          </p>
          <p>
            <label>
              <input type="radio" name="energystar" value="2" id="energystar_0">
            2.0</label>
            <br>
            <label>
              <input type="radio" name="energystar" value="2.5" id="energystar_1">
              2.5</label>
            <br>
            <label>
              <input type="radio" name="energystar" value="3" id="energystar_2">
              3.0</label>
          </p>
          <p>
            <textarea name="other green affiliations" cols="35" rows="5" id="other green affiliations"></textarea>
          </p></td>
        <td align="center" valign="middle" id="highest_HERS"><strong id="highest HERS acieved2">**If HERS Certification <br>
Current Highest HERS Index Achieved </strong>:</td>
        <td align="left" valign="middle"><input type="number" name="highest_HERS_achieved" id="highest_HERS_achieved"></td>
        <td width="13%" align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><h4 id="production_builder">Are you a Production Builder?</h4></td>
        <td colspan="2" align="left"><p>
          <label>
            <input type="radio" name="production_builder" value="YES" id="productionbuilder_0">
            Yes</label>
          <br>
          <label>
            <input type="radio" name="production_builder" value="NO" id="productionbuilder_1">
            No</label>
          <br>
        </p></td>
        <td align="center"><strong id="custom_builder">Are you a Custom Builder?</strong></td>
        <td align="left" id="custom_builder"><label>
          <input type="radio" name="custom_builder" value="Yes" id="custom_builder_0">
          Yes</label>
          <br>
          <label id="custom_builder">
            <input type="radio" name="custom_builder" value="No" id="custom_builder_1">
        No</label></td>
        <td align="center"><strong id="residential_retrofit_contractor">Are you a Residential Retrofit Contractor?</strong></td>
        <td align="left"><p>
          <label>
            <input type="radio" name="residential_retrofit_contractor" value="Yes" id="Residentialretrofitcontractor_0">
            Yes</label>
          <br>
          <label>
            <input type="radio" name="residential_retrofit_contractor" value="No" id="Residentialretrofitcontractor_1">
            No</label>
          <br>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right"><strong id="Regions where you build">Regions where you build:</strong></td>
        <td colspan="2" align="left"><p>
          <label>
            <input type="checkbox" name="build_region" value="alabama" id="build_region0">
            Alabama</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="alaska" id="build_region1">
            Alaska</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="arizona" id="build_region2">
            Arizona</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="arkansas" id="build_region3">
            Arkansas</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="California" id="build_region4">
            California</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="colorado" id="build_region5">
            Colorado</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="connecticut" id="build_region6">
            Connecticut</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="delaware" id="build_region7">
            Delaware</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="florida" id="build_region8">
            Florida</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="georgia" id="build_region9">
            Georgia</label>
          <br>
        </p></td>
        <td width="16%" align="left"><p>
          <label>
            <input type="checkbox" name="build_region" value="hawaii" id="build_region10">
            Hawaii</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="idaho" id="build_region11">
            Idaho</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="illinois" id="build_region12">
            Illinois</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="nebraska" id="build_region13">
            Nebraska</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="nevada" id="build_region14">
            Nevada </label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="New Hmpshire" id="build_region15">
            New Hampshire</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="new jersey" id="build_region16">
            New Jersey</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="ne mexico" id="build_region17">
            New Mexico</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="new york" id="build_region18">
            New York</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="n carolina" id="build_region19">
            North Carolina</label>
          <br>
        </p></td>
        <td width="18%" align="left"><p>
          <label>
            <input type="checkbox" name="build_region" value="n dakota" id="build_region20">
            North Dakota</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="ohio" id="build_region21">
            Ohio</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="oklahoma" id="build_region22">
            Oklahoma</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="oregon" id="build_region23">
            Oregon</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="pennsylvania" id="build_region24">
            Pennsylvania</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="indiana" id="build_region25">
            Indiana</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="Iowa" id="build_region26">
            Iowa</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="kansas" id="build_region27">
            Kansas</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="kentucky" id="build_region28">
            Kentucky</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="louisiana" id="build_region29">
            Louisiana</label>
          <br>
        </p></td>
        <td align="left"><p>
          <label>
            <input type="checkbox" name="build_region" value="maine" id="build_region30">
            Maine</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="maryland" id="build_region31">
            Maryland</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="massachusetts" id="build_region32">
            Massachusetts</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="michigam" id="build_region33">
            Michigan</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="minnesota" id="build_region34">
            Minnesota</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="mississippi" id="build_region35">
            Mississippi</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="missouri" id="build_region36">
            Missouri</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="montana" id="build_region37">
            Montana</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="rhode island" id="build_region38">
            Rhode Island</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="S Carolina" id="build_region39">
            South Carolina</label>
          <br>
          <label>
            <input type="checkbox" name="build_region" value="S Dakota" id="build_region40">
            South Dakota</label>
          <br>
        </p></td>
        <td align="left"><p>
          <label>
            <input type="checkbox" name="build_region2" value="tennesee" id="build_region41">
            Tennesee</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="texas" id="build_region42">
            Texas</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="utah" id="build_region43">
            Utah</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="vermont" id="build_region44">
            Vermont</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="virginia" id="build_region45">
            Virginia</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="washington state" id="build_region46">
            Washington</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="DC" id="build_region47">
            Washington DC</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="West Virginia" id="build_region48">
            West Virgina</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="wisconsin" id="build_region49">
            Wisconsin</label>
          <br>
          <label>
            <input type="checkbox" name="build_region2" value="wyoming" id="build_region50">
            Wyoming</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right" id="green_building_awards"><label for="numberofhomesbuilt"><strong id="number of homes built">Number of homes built this year:</strong></label></td>
        <td colspan="2" align="left"><input name="number_of_homes_built" type="text" required id="number_of_homes_built" size="15"></td>
        <td align="right"><strong id="avg_sales_price">Average Sales or Construction Price:          </strong></td>
        <td align="left"><input type="text" name="avg_sales_price" id="avg_sales_price"></td>
        <td align="left" id="projected_year_end_builds"><strong id="projected_year_end_builds">Projected year end homes built</strong>:</td>
        <td align="left"><input name="projected_year_end_build" type="text" required id="projected_year_end_build" size="15"></td>
      </tr>
      <tr>
        <td align="right" id="green_building_awards"><h4>Green Building Awards:</h4></td>
        <td colspan="6" align="left"><textarea name="green_building_awards" cols="35" rows="5" id="green_building_awards"></textarea></td>
      </tr>
      <tr>
        <td align="right"><h4 id="info_green_lender">&nbsp;</h4></td>
        <td colspan="4" align="left"><h3 id="info_green_lender"><strong id="info_green_lender">Would you like more information about our Green Lender and Appraisal Platform?</strong><br>
        </h3></td>
        <td align="left"><label>
          <input type="radio" name="info_green_lender" value="YES" id="morelenderinfo_0">
          Yes</label>
          <br>
          <label>
            <input type="radio" name="info_green_lender" value="NO" id="morelenderinfo_1">
        No</label></td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFCE">
        <td height="50" colspan="7" align="left"><h3> III. What are your current Green Building-Financing Constraints and Challenges?</h3></td>
      </tr>
      <tr>
        <td align="right" valign="top" id="green_challenges"><h4 id="green_challenges">Select All that Apply:</h4>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h4>Access to Green:</h4>
        <h4>&nbsp;</h4>
        <h4 id="capitalization">Capitalization:</h4></td>
        <td colspan="6" align="left"><p>
          <label>
            <input type="checkbox" name="challenges" value="increasing building perf." id="challenges_0">
            Increasing building performance measures to near-net-zero – incorporating renewables and absorbing capital outlays</label>
          <br>
          <label>
            <input type="checkbox" name="challenges" value="differentiation" id="challenges_1">
            Market Differentiation – becoming a market leader- innovating beyond other green builder competition</label>
          <br>
          <label>
            <input type="checkbox" name="challenges" value="scalability" id="challenges_2">
            Scalability – market growth</label>
          <br>
          <label>
            <input type="checkbox" name="challenges" value="marketing" id="challenges_3">
            Marketing – trained sales force</label>
          <br>
          <label>
            <input type="checkbox" name="challenges" value="low appraisal" id="challenges_4">
            Low appraisal valuations, inability to apply a “green premium” to property value</label>
          <br>
          <label>
            <input type="checkbox" name="challenges" value="governmental policies" id="challenges_5">
            Government Policies, municipality approved timelines</label>
          <br>
          <label>
            <input type="checkbox" name="challenges" value="access to qualified" id="challenges_6">
            Access to qualified, trained green building workforce</label>
          <br>
          <label>
            <input type="checkbox" name="challenges" value="cost benefit" id="challenges_7">
            Translating cost benefit to potential buyers, clients</label>
          </p>
          <p>&nbsp;</p>
          <p>
            <label>
              <input type="checkbox" name="challenges_2" value="lenders" id="challenges2_0">
              Lenders</label>
            <br>
            <label>
              <input type="checkbox" name="challenges_2" value="appraisers" id="challenges2_1">
              Appraisers</label>
            <br>
          </p>
          <p>            
            <label>
              <input type="checkbox" name="challenges_3" value="equity partners" id="challenges3_0">
              Identifying equity partners</label>
            <br>
            <label>
              <input type="checkbox" name="challenges_3" value="warehouse line" id="challenges3_1">
              Production warehouse line</label>
            <br>
            <label>
              <input type="checkbox" name="challenges_3" value="construction loans" id="challenges3_2">
              Construction loans</label>
            <br>
            <br>
        </p></td>
      </tr>
      <tr bgcolor="#FFFFCE">
        <td height="46" colspan="7" align="left"><h3 id="company experience">IV.  Company and Owner Experience</h3></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td colspan="3" align="center"><label for="year_in_business"><strong id="year_in_business">How many years have you been in the Building Industry?</strong></label></td>
        <td align="left"><input name="year_in_business" type="text" id="year_in_business" size="10"></td>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><h4 id="check all that apply experience">Check all that Apply:</h4></td>
        <td colspan="6" align="left"><p>
          <label>
            <input type="checkbox" name="experience" value="build" id="experience_0">
            Build</label>
          <br>
          <label>
            <input type="checkbox" name="experience" value="custom" id="experience_1">
            Custom Builder</label>
          <br>
          <label>
            <input type="checkbox" name="experience" value="remodel" id="experience_2">
            Remodel</label>
          <br>
          <label>
            <input type="checkbox" name="experience" value="multifamily" id="experience_3">
            Multi Family</label>
          <br>
          <label>
            <input type="checkbox" name="experience" value="residential" id="experience_4">
            Residential</label>
          <br>
          <label>
            <input type="checkbox" name="experience" value="subcontractor" id="experience_5">
            Sub contractor</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="right" id="num_employees"><label for="num_employees"><strong>Number of Employees:</strong></label></td>
        <td colspan="2" align="left"><input name="num_employees" type="text" id="num_employees" size="15"></td>
        <td align="left"><strong id="num_subcontractors2">Number of Sub Contractors:</strong></td>
        <td align="left" id="num_subcontractors"><input name="num_subcontractors" type="text" id="num_subcontractors3" size="15"></td>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><h4 id="job_load">Current Number of:</h4></td>
        <td width="7%" align="left"><strong id="presales">Pre Sales:</strong></td>
        <td width="11%" align="left"><input name="presales" type="text" id="presales" size="15"></td>
        <td align="left"><strong id="specs">Specs:</strong></td>
        <td align="left"><input name="specs" type="text" id="specs" size="15"></td>
        <td align="right"><strong id="devel_projects">Development Projects:</strong></td>
        <td align="left"><input name="devel_projects" type="text" id="devel_projects" size="15"></td>
      </tr>
      <tr>
        <td align="center"><h2 id="GEM preferred">&nbsp;</h2></td>
        <td colspan="3" align="left"><h3 id="gem_preferred">Would you like to become a GEM Preferred Builder?<br>
        </h3></td>
        <td align="left"><label>

          <input type="radio" name="gem_preferred" value="yes" id="gem_preferred_0">
          Yes</label>
          <br>
          <label id="Gem Preferred">
            <input type="radio" name="gem_preferred" value="no" id="gem_preferred_1">

        No</label></td>

        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
    </tbody>
  </table>
<div id="company-references" class="company-references" style="display:none;">
     <table> <tbody>

  <tr bgcolor="#FFFFCE">
        <td height="50" colspan="7" align="left">
        <h3>V. Company References</h3></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td colspan="6" align="center"><h3 id="supplier_ref">Supplier – (Primary  suppliers, including your lumber concrete and building suppliers are mandatory) </h3></td>
      </tr>
      <tr>
        <td align="right" id="supplier_ref_1">&nbsp;</td>
        <td colspan="3" align="center"><label for=""><strong>Name:</strong></label></td>
        <td align="center"><label for="supplier_contact_1"><strong id="Contact">Contact:</strong></label></td>
        <td align="center"><label for="supplier_tel_1"><strong>Telephone:</strong></label></td>
        <td align="center"><label for="supplier_fax_1"><strong>Fax:</strong></label></td>
      </tr>
      <tr>
        <td align="right" id="specs15"><strong>1.</strong></td>
        <td colspan="3" align="center"><input name="supplier_name_1" type="text" required id="supplier_name_1" size="50"></td>
        <td align="center"><input name="supplier_contact_1" type="text" required id="supplier_contact_1" size="50"></td>
        <td align="center"><input name="supplier_tel_1" type="tel" required id="supplier_tel_1"></td>
        <td align="left"><input name="supplier_fax_1" type="tel" required id="supplier_fax_1"></td>
      </tr>
      <tr>
        <td align="right" id="specs14"><strong>2</strong>.</td>
        <td colspan="3" align="center"><input name="supplier_name_2" type="text" required id="supplier_name_2" size="50"></td>
        <td align="center"><input name="supplier_contact_2" type="text" required id="supplier_contact_2" size="50"></td>
        <td align="center"><input type="tel" name="supplier_tel_2" id="supplier_tel_"></td>
        <td align="center"><input name="supplier_fax_2" type="tel" required id="supplier_fax_2"></td>
      </tr>
      <tr>
        <td align="right" id="specs13"><strong>3.</strong></td>
        <td colspan="3" align="center"><input name="supplier_name_3" type="text" required id="supplier_name_3" size="50"></td>
        <td align="left"><input name="supplier_contact_3" type="text" required id="supplier_contact_3" size="50"></td>
        <td align="center"><input name="supplier_tel_3" type="tel" required id="supplier_tel_3"></td>
        <td align="center"><input name="supplier_fax_3" type="tel" required id="supplier_fax_3"></td>
      </tr>
      <tr>
        <td align="right" id="specs12"><strong>4.</strong></td>
        <td colspan="3" align="center"><input name="supplier_name_4" type="text" id="supplier_name_4" size="50"></td>
        <td align="left"><input name="supplier_contact_4" type="text" required id="supplier_contact_4" size="50"></td>
        <td align="center"><input name="supplier_tel_4" type="tel" required id="supplier_tel_4"></td>
        <td align="left"><input name="supplier_fax_4" type="tel" required id="supplier_fax_4"></td>
      </tr>
      <tr>
        <td align="right" id="specs11"><strong>5.</strong></td>
        <td colspan="3" align="center"><input name="supplier_name_5" type="text" id="supplier_name_5" size="50"></td>
        <td align="left"><input name="supplier_contact_5" type="text" required id="supplier_contact_5" size="50"></td>
        <td align="center"><input name="supplier_tel_5" type="tel" required id="supplier_tel_5"></td>
        <td align="left"><input name="supplier_fax_5" type="tel" required id="supplier_fax_5"></td>
      </tr>
      <tr>
        <td align="right" id="specs10">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="specs6">&nbsp;</td>
        <td colspan="6" align="center"><p>  <strong> * Please note: if you  pay cash, you must attach a letter from the supplier indicating your  history and current  status.  *</strong></p></td>
      </tr>
      <tr>
        <td align="right" id="specs2">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="specs21">&nbsp;</td>
        <td colspan="6" align="center"><h3><u>Bank </u>: Includes banks  where you are an approved developer- builder or have current construction  loans</h3></td>
      </tr>
      <tr>
        <td align="right" id="specs27">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="specs29">&nbsp;</td>
        <td colspan="3" align="center"><label for="bank_name_1"><strong>Bank Name:</strong></label></td>
        <td align="center"><label for="bank_address_1"><strong id="Contact2">Address:</strong></label></td>
        <td align="center"><label for="bank_tel_1"><strong>Telephone:</strong></label></td>
        <td align="center"><label for="bank_fax_1"><strong>Fax:</strong></label></td>
      </tr>
      <tr>
        <td align="right" id="specs25"><strong>1.</strong></td>
        <td colspan="3" align="center"><input name="bank_name_1" type="text" id="bank_name_1" size="50"></td>
        <td align="left"><input name="bank_address_1" type="text" id="bank_address_1" size="50"></td>
        <td align="center"><input name="bank_tel_1" type="tel" id="bank_tel_1"></td>
        <td align="left"><input name="bank_fax_1" type="tel" id="bank_fax_1"></td>
      </tr>
      <tr>
        <td align="right" id="specs26"><strong>2.</strong></td>
        <td colspan="3" align="center"><input name="bank_name_2" type="text" id="bank_name_2" size="50"></td>
        <td align="left"><input name="bank_address_2" type="text" id="bank_address_2" size="50"></td>
        <td align="center"><input name="bank_tel_2" type="tel" id="bank_tel_2"></td>
        <td align="left"><input name="bank_fax_2" type="tel" id="bank_fax_2"></td>
      </tr>
      <tr>
        <td align="right" id="specs23">&nbsp;</td>
        <td colspan="4" align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="specs22">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="specs19">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" bgcolor="#CCCCCC" id="specs5"><em id="optional">optional</em></td>
        <td colspan="6" align="left"><p>The builder, as an individual and/or officer of the building company, hereby authorizes Green Energy Money to make any normal inquiries necessary to qualify the builder for its’ Preferred Builder program.  It is understood that any inquiry or satisfactory review is not intended to constitute an approval for lending purposes.  The undersigned hereby certifies he/she is authorized to do business in the company’s name.</p></td>
      </tr>
      <tr>
        <td align="center" bgcolor="#CCCCCC" id="signature"><label for="signature"><strong>Signature:</strong></label></td>
        <td colspan="4" align="left"><input name="signature" type="text" id="signature" size="60"> </td>
        <td width="20%" align="center"><em id="asanindividual">&quot;As an Individual&quot;</em></td>
        <td align="left"><label for="date"><strong id="date">Date:</strong></label>
        <input type="sig_date" name="sig_date" id="sig_date"></td>
      </tr>
      <tr>
        <td align="right" id="specs8">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="specs3">&nbsp;</td>
        <td colspan="6" align="left">&nbsp;</td>
      </tr>


</div>
</form>
</div>
</body>
</html>
