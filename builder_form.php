<?php 
session_start();
error_reporting(E_ALL|E_STRICT);
require_once('mysql-handler.php');
if (!$DBH)
{
  echo "Please try later.";
}
else
{
echo "database connected<br>";
}
// Get variables from form


// HTML FORM POSTS CORRECTLY
/*if($_POST['action'] == 'Continue') {

echo '$builder_name = ' . $_POST['builder_name']. '<br>';
echo '$builder_type = ' . $_POST['builder_type']. '<br>';
echo '$builder_address_1 = ' . $_POST['builder_address_1'] . '<br>';
echo '$builder_address_2 = ' . $_POST['builder_address_2'] . '<br>';
echo '$builder_city = ' . $_POST['builder_city'] . '<br>';
echo '$builder_state = ' . $_POST['builder_state'] . '<br>';
echo '$builder_zip = ' . $_POST['builder_zip'] . '<br>';
echo '$builder_zip4 = ' . $_POST['builder_zip4'] . '<br>';
echo '$builder_principal_officer = ' . $_POST['builder_principal_officer'] . '<br>';
echo '$builder_business_phone = ' . $_POST['builder_business_phone'] . '<br>';
echo '$builder_cell_phone = ' . $_POST['builder_cell_phone'] . '<br>';
echo '$builder_fax = ' . $_POST['builder_fax'] . '<br>';
echo '$builder_email = ' . $_POST['builder_email'] . '<br>';
echo '$builder_url = ' . $_POST['builder_url'] . '<br>';

}*/

$builder_name = $_POST['builder_name'];
$builder_type = $_POST['builder_type'];
$builder_address_1 = $_POST['builder_address_1'];
$builder_address_2 = $_POST['builder_address_2'];
$builder_city = $_POST['builder_city'];
$builder_state = $_POST['builder_state'];
$builder_zip = $_POST['builder_zip'];
$builder_zip4 = $_POST['builder_zip4'];
$builder_principal_officer = $_POST['builder_principal_officer'];
$builder_business_phone = $_POST['builder_business_phone'];
$builder_cell_phone = $_POST['builder_cell_phone'];
$builder_fax = $_POST['builder_fax'];
$builder_email = $_POST['builder_email'];
$builder_url = $_POST['builder_url'];
/*
echo '$builder_name = ' . $_POST['builder_name']. '<br>';
echo '$builder_type = ' . $_POST['builder_type']. '<br>';
echo '$builder_address_1 = ' . $_POST['builder_address_1'] . '<br>';
echo '$builder_address_2 = ' . $_POST['builder_address_2'] . '<br>';
echo '$builder_city = ' . $_POST['builder_city'] . '<br>';
echo '$builder_state = ' . $_POST['builder_state'] . '<br>';
echo '$builder_zip = ' . $_POST['builder_zip'] . '<br>';
echo '$builder_zip4 = ' . $_POST['builder_zip4'] . '<br>';
echo '$builder_principal_officer = ' . $_POST['builder_principal_officer'] . '<br>';
echo '$builder_business_phone = ' . $_POST['builder_business_phone'] . '<br>';
echo '$builder_cell_phone = ' . $_POST['builder_cell_phone'] . '<br>';
echo '$builder_fax = ' . $_POST['builder_fax'] . '<br>';
echo '$builder_email = ' . $_POST['builder_email'] . '<br>';
echo '$builder_url = ' . $_POST['builder_url'] . '<br>';
*/

echo '-$builder_name = ' . $builder_name . '<br>';
echo '-$builder_type = ' . $builder_type . '<br>';
echo '-$builder_address_1 = ' . $builder_address_1 . '<br>';
echo '-$builder_address_2 = ' . $builder_address_2 . '<br>';
echo '-$builder_city = ' . $builder_city . '<br>';
echo '$builder_state = ' . $builder_state . '<br>';
echo '$builder_zip = ' . $builder_zip . '<br>';
echo '$builder_zip4 = ' . $builder_zip4 . '<br>';
echo '$builder_principal_officer = ' . $builder_principal_officer . '<br>';
echo '$builder_business_phone = ' . $builder_business_phone . '<br>';
echo '$builder_cell_phone = ' . $builder_cell_phone . '<br>';
echo '$builder_fax = ' . $builder_fax . '<br>';
echo '$builder_email = ' . $builder_email . '<br>';
echo '$builder_url = ' . $builder_url . '<br>';

/*
try {
echo 'INSERT 1<br>';
$SQL = "INSERT INTO builder_info (builder_name) values ('$builder_name')";
echo 'INSERT 2<br>';
$STH = $DBH->prepare($SQL);
echo 'INSERT 3<br>';

$STH->execute();
echo 'INSERT 4<br>';
}
catch (PDOException $e) {
	echo "Error!: " . $e->getMessage() . "<br/>";
	die();
}
*/
// INSERT FORM VALUES INTO DATABASE
try {
echo 'INSERT 1<br>';
$sql = "INSERT INTO builder_info (builder_name, builder_type, builder_address_1, builder_address_2, builder_city, builder_state, builder_zip, builder_zip4, builder_principal_officer, builder_business_phone, builder_cell_phone, builder_fax, builder_email, builder_url) values (:builder_name, :builder_type, :builder_address_1, :builder_address_2, :builder_city, :builder_state, :builder_zip, :builder_zip4, :builder_principal_officer, :builder_business_phone, :builder_cell_phone, :builder_fax, :builder_email, :builder_url
)";
echo 'INSERT 2<br>';
$sth = $DBH->prepare("$sql");
echo 'INSERT 3<br>';
/*$sth->bindParam(':builder_name' , $builder_name);
$sth->bindParam(:builder_type' , $builder_type);
$sth->bindParam(:builder_address_1' , $builder_address_1);
$sth->bindParam(:builder_address_2' , $builder_address_2);
$sth->bindParam(:builder_city' , $builder_city);
$sth->bindParam(:builder_state' , $builder_state);
$sth->bindParam(:builder_zip' , $builder_zip);
$sth->bindParam(:builder_zip4' , $builder_zip4);
$sth->bindParam(:builder_principal_officer' , $builder_principal_officer);
$sth->bindParam(:builder_business_phone , $builder_business_phone);
$sth->bindParam(:builder_cell_phone , $builder_cell_phone);
$sth->bindParam(:builder_fax , $builder_fax);
$sth->bindParam(:builder_email , $builder_email);
$sth->bindParam(:builder_url , $builder_url);
$STH->execute();*/
$STH->execute(array(
	':builder_name' => '$_POST["builder_name"]',
	':builder_type' => '$_POST["builder_type"]',
	':builder_address_1' => '$_POST["builder_address_1"]',
	':builder_address_2' => '$_POST["builder_address_2"]',
	':builder_city' => '$_POST["builder_city"]',
	':builder_state' => '$_POST["builder_state"]',
	':builder_zip' => '$_POST["builder_zip"]',
	':builder_zip4' => '$_POST["builder_zip4"]',
	':builder_principal_officer' => '$_POST["builder_principal_officer"]',
	':builder_business_phone' => '$_POST["builder_business_phone"]',
	':builder_cell_phone' => '$_POST["builder_cell_phone"]',
	':builder_fax' => '$_POST["builder_fax"]',
	':builder_email' => '$_POST["builder_email"]',
	':builder_url' => '$_POST["builder_url"]'
		)
);

$STH->execute(array(
	':builder_name' => '$builder_name',
	':builder_type' => '$builder_type',
	':builder_address_1' => '$builder_address_1',
	':builder_address_2' => '$builder_address_2',
	':builder_city' => '$builder_city',
	':builder_state' => '$builder_state',
	':builder_zip' => '$builder_zip',
	':builder_zip4' => '$builder_zip4',
	':builder_principal_officer' => '$builder_principal_officer',
	':builder_business_phone' => '$builder_business_phone',
	':builder_cell_phone' => '$builder_cell_phone',
	':builder_fax' => '$builder_fax',
	':builder_email' => '$builder_email',
	':builder_url' => '$builder_url'
		)
);

echo 'INSERT 4<br>';
}
catch (PDOException $e) {
	echo "Error!: " . $e->getMessage() . "<br/>";
	die();
}

// SEE IF IT WORKED
try {
echo 'FETCH 1<br>';
$sql = 'SELECT * FROM builder_info';
echo 'FETCH 2<br>';
$stmt = $DBH->query($sql);
echo 'FETCH 3<br>';
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo 'FETCH 4<br>';
foreach($result as $key=>$val)
    {
    echo $key.' - '.$val.'<br />';
    }
echo 'FETCH 5<br>';



/*$sql = 'SELECT builder_id, builder_name, builder_type, builder_address_1, builder_address_2, builder_city, builder_state, builder_zip, builder_zip4, builder_principal_officer, builder_business_phone, builder_cell_phone, builder_fax, builder_email, builder_url
    FROM builder_info
    WHERE builder_name LIKE :builder_name';
echo 'FETCH 2<br>';
$sth_checkbuilder = $dbh->prepare($sql); //DIE ------------------
echo 'FETCH 3<br>';
$sth_checkbuilder->execute(array(':builder_name' => 'The Company 2'));
echo 'FETCH 4<br>';
$sth_checkbuilder->setFetchMode(PDO::FETCH_ASSOC);
echo 'FETCH 5<br>';
$row=$sth_checkbuilder->fetchAll();*/

//echo $row['0'] ['builder_id'] ['builder_name'] . "<br>";



/*

$builder2 = $sth->fetchAll();
$sth_checkbuilder->execute(array(':builder_name' => 'The Company'));
$builder1 = $sth->fetchAll();*/
}
catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}






/*
$builder_name = $_POST[test_input('builder_name')];
$builder_type = $_POST[test_input('builder_type')];
$builder_address_1 = $_POST[test_input('builder_address_1')];
$builder_address_2 = $_POST[test_input('builder_address_2')];
$builder_city = $_POST[test_input('builder_city')];
$builder_state = $_POST[test_input('builder_state')];
$builder_zip = $_POST[test_input('builder_zip')];
$builder_zip4 = $_POST[test_input('builder_zip4')];
$builder_principal_officer = $_POST[test_input('builder_principal_officer')];
$builder_business_phone = $_POST[test_input('builder_business_phone')];
$builder_cell_phone = $_POST[test_input('builder_cell_phone')];
$builder_fax = $_POST[test_input('builder_fax')];
$builder_email = $_POST[test_input('builder_email')];
$builder_url = $_POST[test_input('builder_url')];

echo '$builder_name = ' . $builder_name . '\n';
echo '$builder_type = ' . $builder_type . '\n';
echo '$builder_address_1 = ' . $builder_address_1 . '\n';
echo '$builder_address_2 = ' . $builder_address_2 . '\n';
echo '$builder_city = ' . $builder_city . '\n';
echo '$builder_state = ' . $builder_state . '\n';
echo '$builder_zip = ' . $builder_zip . '\n';
echo '$builder_zip4 = ' . $builder_zip4 . '\n';
echo '$builder_principal_officer = ' . $builder_principal_officer . '\n';
echo '$builder_business_phone = ' . $builder_business_phone . '\n';
echo '$builder_cell_phone = ' . $builder_cell_phone . '\n';
echo '$builder_fax = ' . $builder_fax . '\n';
echo '$builder_email = ' . $builder_email . '\n';
echo '$builder_url = ' . $builder_url . '\n';
*/
/*
$builder_cert_training[] = $_POST['builder_cert_training[]'];

$builder_cert_training_2[] = $_POST['builder_cert_training_2[]'];

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
*/



/*
builder_name, builder_type, builder_address_1, builder_address_2, builder_city, builder_state, builder_zip, builder_principal_officer, builder_business_phone, builder_cell_phone, builder_fax, builder_email, builder_url, builder_cert_training, builder_cert_training_2, builder_project_cert_affil, builder_energystar, builder_hers, builder_production, builder_custom, builder_res_retro, builder_region, builder_homes_built, builder_year_end_build, builder_avg_sales_price, builder_green_building_awards, builder_info_green_builder, builder_challenges, builder_challenges_2, builder_challenges_3, builder_years_in_business, builder_experience, builder_num_employees, builder_num_subcontractors, builder_presales, builder_specs, builder_devel_projects, builder_gem_preferred, builder_optional, builder_signature

$builder_name, $builder_type, $builder_address_1, $builder_address_2, $builder_city, $builder_state, $builder_zip, $builder_principal_officer, $builder_business_phone, $builder_cell_phone, $builder_fax, $builder_email, $builder_url, $builder_cert_training, $builder_cert_training_2, $builder_project_cert_affil, $builder_energystar, $builder_hers, $builder_production, $builder_custom, $builder_res_retro, $builder_region, $builder_homes_built, $builder_year_end_build, $builder_avg_sales_price, $builder_green_building_awards, $builder_info_green_builder, $builder_challenges, $builder_challenges_2, $builder_challenges_3, $builder_years_in_business, $builder_experience, $builder_num_employees, $builder_num_subcontractors, $builder_presales, $builder_specs, $builder_devel_projects, $builder_gem_preferred, $builder_optional, $builder_signature





echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Database Operation Failed....!!</p>";
}
}
//mysql_close($connection); // Closing Connection with Server
*/

?>
