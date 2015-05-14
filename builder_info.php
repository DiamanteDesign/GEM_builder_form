<?php
//$connection = mysql_connect("localhost", "root", ""); // Establish Connection with Server
//$db = mysql_select_db("builder_info", $connection); // Select the Database


if(isset($_POST['submit'])){ // Fetching variables of the form 
$builder_name = $_POST['builder_name'];
$builder_type = $_POST['builder_type'];
$builder_address_1 = $_POST['builder_address_1'];
$builder_address_2 = $_POST['builder_address_2'];
$builder_city = $_POST['builder_city'];
$builder_state = $_POST['builder_state'];
$builder_zip = $_POST['builder_zip'];
$builder_principal_officer = $_POST['builder_principal_officer'];
$builder_business_phone = $_POST['builder_business_phone'];
$builder_cell_phone = $_POST['builder_cell_phone'];
$builder_fax = $_POST['builder_fax'];
$builder_email = $_POST['builder_email'];
$builder_url = $_POST['builder_url'];

$builder_cert_training[] = $_POST['builder__cert_training[]'];

$builder_cert_training_2[] = $_POST['builder__cert_training_2[]'];

$builder_project_cert_affil[] = $_POST['builder_project_cert_affil[]'];

$builder_energystar = $_POST['builder_energystar'];
$builder_hers = $_POST['builder_hers'];
$builder_production = $_POST['builder_production'];
$builder_custom = $_POST['builder_custom'];
$builder_res_retro = $_POST['builder_res_retro'];

$builder_region[] = $_POST['builder_region[]'];

$builder_homes_built = $_POST['builder_homes_built'];
$builder_year_end_build = $_POST['builder_year_end_build'];
$builder_avg_sales_price = $_POST['builder_avg_sales_price'];

$builder_green_building_awards[] = $_POST['builder_green_building_awards[]'];

$builder_info_green_lender[] = $_POST['builder_info_green_builder[]'];

$builder_challenges[] = $_POST['builder_challenges[]'];

$builder_challenges_2[] = $_POST['builder_challenges_2[]'];

$builder_challenges_3 = $_POST['builder_challenges_3'];
$builder_years_in_business = $_POST['builder_years_in_business'];
$builder_experience = $_POST['builder_experience'];
$builder_num_employees = $_POST['builder_num_employees'];
$builder_num_subcontractors = $_POST['builder_num_subcontractors'];
$builder_presales = $_POST['builder_presales'];
$builder_specs = $_POST['builder_specs'];
$builder_devel_projects = $_POST['builder_devel_projects'];
$builder_gem_preferred = $_POST['builder_gem_preferred'];
$builder_optional = $_POST['builder_optional'];
$builder_signature = $_POST['builder_signature'];



if($builder_name !=''||$builder_type !=''){
	
//Insert Query of SQL
$query = mysql_query("insert into builder_info(builder_name, builder_type, builder_address_1, builder_address_2, builder_city, builder_state, builder_zip, builder_principal_officer, builder_business_phone, builder_cell_phone, builder_fax, builder_email, builder_url, builder_cert_training, builder_cert_training_2, builder_project_cert_affil, builder_energystar, builder_hers, builder_production, builder_custom, builder_res_retro, builder_region, builder_homes_built, builder_year_end_build, builder_avg_sales_price, builder_green_building_awards, builder_info_green_builder, builder_challenges, builder_challenges_2, builder_challenges_3, builder_years_in_business, builder_experience, builder_num_employees, builder_num_subcontractors, builder_presales, builder_specs, builder_devel_projects, builder_gem_preferred, builder_optional, builder_signature)

values 

($builder_name, $builder_type, $builder_address_1, $builder_address_2, $builder_city, $builder_state, $builder_zip, $builder_principal_officer, $builder_business_phone, $builder_cell_phone, $builder_fax, $builder_email, $builder_url, $builder_cert_training, builder_cert_training_2, $builder_project_cert_affil, $builder_energystar, $builder_hers, $builder_production, $builder_custom, $builder_res_retro, $builder_region, $builder_homes_built, $builder_year_end_build, $builder_avg_sales_price, $builder_green_building_awards, $builder_info_green_builder, $builder_challenges, $builder_challenges_2, $builder_challenges_3, $builder_years_in_business, $builder_experience, $builder_num_employees, $builder_num_subcontractors, $builder_presales, $builder_specs, $builder_devel_projects, $builder_gem_preferred, $builder_optional, $builder_signature)");

echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Database Operation Failed....!!</p>";
}
}
//mysql_close($connection); // Closing Connection with Server

?>
