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

try{

$sql = "INSERT INTO builder_info (builder_name, builder_type, builder_address_1, builder_address_2, builder_city, builder_state, builder_zip, builder_zip4, builder_principal_officer, builder_business_phone, builder_cell_phone, builder_fax, builder_email, builder_url) values (:builder_name, :builder_type, :builder_address, :builder_address_2, :builder_city, :builder_state, :builder_zip, :builder_zip4, :builder_principal_officer, :builder_business_phone, :builder_cell_phone, :builder_fax, :builder_email, :builder_url
)";
$sth = $DBH->prepare($sql);
$sth->execute(array(
	':builder_name' => $_POST["builder_name"],
	':builder_type' => $_POST["builder_type"],
	':builder_address' => $_POST["builder_address"],
	':builder_address_2' => $_POST["builder_address_2"],
	':builder_city' => $_POST["builder_city"],
	':builder_state' => $_POST["builder_state"],
	':builder_zip' => $_POST["builder_zip"],
	':builder_zip4' => $_POST["builder_zip4"],
	':builder_principal_officer' => $_POST["builder_principal_officer"],
	':builder_business_phone' => $_POST["builder_business_phone"],
	':builder_cell_phone' => $_POST["builder_cell_phone"],
	':builder_fax' => $_POST["builder_fax"],
	':builder_email' => $_POST["builder_email"],
	':builder_url' => $_POST["builder_url"]
		)
);
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$stmt = $DBH->prepare("SELECT * FROM builder_info");
$stmt->execute();
$result = $stmt->fetchAll();

    foreach($result as $row)
        {
        echo $row['builder_id'].'<br />';
        echo $row['builder_name'].'<br />';
        echo $row['builder_type'].'<br />';
        }
