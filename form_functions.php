<?php
// List the states in a select box
function statedropdown( $field_name ) {
   $states = array(
         array("AL", "Alabama"),
         array("AK", "Alaska"),
         array("AZ","Arizona"),
         array("AR","Arkansas"),
         array("CA","California"),
         array("CO","Colorado"),
         array("CT","Connecticut"),
         array("DE","Delaware"),
         array("DC","Dist of Columbia"),
         array("FL","Florida"),
         array("GA","Georgia"),
         array("HI","Hawaii"),
         array("ID","Idaho"),
         array("IL","Illinois"),
         array("IN","Indiana"),
         array("IA","Iowa"),
         array("KS","Kansas"),
         array("KY","Kentucky"),
         array("LA","Louisiana"),
         array("ME","Maine"),
         array("MD","Maryland"),
         array("MA","Massachusetts"),
         array("MI","Michigan"),
         array("MN","Minnesota"),
         array("MS","Mississippi"),
         array("MO","Missouri"),
         array("MT","Montana"),
         array("NE","Nebraska"),
         array("NV","Nevada"),
         array("NH","New Hampshire"),
         array("NJ","New Jersey"),
         array("NM","New Mexico"),
         array("NY","New York"),
         array("NC","North Carolina"),
         array("ND","North Dakota"),
         array("OH","Ohio"),
         array("OK","Oklahoma"),
         array("OR","Oregon"),
         array("PA","Pennsylvania"),
         array("RI","Rhode Island"),
         array("SC","South Carolina"),
         array("SD","South Dakota"),
         array("TN","Tennessee"),
         array("TX","Texas"),
         array("UT","Utah"),
         array("VT","Vermont"),
         array("VA","Virginia"),
         array("WA","Washington"),
         array("WV","West Virginia"),
         array("WI","Wisconsin"),
         array("WY","Wyoming")
   );

   if ((!$field_name) || ($field_name == ""))
        $field_name="state";
   echo '<select name="' . $field_name . '" id="' . $field_name . '" class="select-box form-control">' . "\n";
   echo '<option value="">--SELECT--</option>\n';
   foreach ($states as $k=>$s) {
      echo '<option id="' . $field_name . '_' . ($k + 1) . '" value="' . $s[0] . '">' . $s[1] . "</option>\n";
   }
   echo "</select>\n";
} // End function statedropdown()

function statecheckbox( $field_name ) {
   $states = array(
         "Alabama",
         "Alaska",
         "Arizona",
         "Arkansas",
         "California",
         "Colorado",
         "Connecticut",
         "Delaware",
         "Dist of Columbia",
         "Florida",
         "Georgia",
         "Hawaii",
         "Idaho",
         "Illinois",
         "Indiana",
         "Iowa",
         "Kansas",
         "Kentucky",
         "Louisiana",
         "Maine",
         "Maryland",
         "Massachusetts",
         "Michigan",
         "Minnesota",
         "Mississippi",
         "Missouri",
         "Montana",
         "Nebraska",
         "Nevada",
         "New Hampshire",
         "New Jersey",
         "New Mexico",
         "New York",
         "North Carolina",
         "North Dakota",
         "Ohio",
         "Oklahoma",
         "Oregon",
         "Pennsylvania",
         "Rhode Island",
         "South Carolina",
         "South Dakota",
         "Tennessee",
         "Texas",
         "Utah",
         "Vermont",
         "Virginia",
         "Washington",
         "West Virginia",
         "Wisconsin",
         "Wyoming"
   );
   if ((!$field_name) || ($field_name == ""))
        $field_name="state";
   echo '<label for=" name="' . $field_name . '" id="' . $field_name . '" class="checkbox">' . "\n";
   foreach ($states as $k=>$s) {
      echo '<input type="checkbox" id="' . $field_name . '_' . ($k + 1) . '" value="' . $s[0] . '">' . $s[1] . "<br>";
   }
} // End function statedropdown()
?>
