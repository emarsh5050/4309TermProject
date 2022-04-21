<?php

$required = array('firstName', 'lastName', 'email', 'cardNumber','expDate', 'ccv');

$expected = array('firstName', 'middleInit', 'lastName', 'email', 'phoneNumber', 'promoCode', 'cardNumber', 'expDate','ccv','notes');

$missing = array();

function printArray(array $id){ 	
    $a = "";
    
	    $a = "<ul>";
        foreach ($id as &$value) {
            $a .= "<li>";
            $a .= $value;
            $a .= "</li>";
        }
        $a .= "</ul>";
	
	return $a;}
	

if (isset($_POST['submit'])) { 
    
    foreach($expected as $value){
        $input = $_POST[$value];
        if (in_array($value, $required)) {

			if (empty($input)) {
				array_push($missing, $value);
			} else {

				${$value} = $input;
			}
		} else {
			${$value} = $input;
		}
    }
    
    if(empty($missing)){
        
        $output .= "
        <table>
            <tr>
             <td>Author: </td>
             <td>$firstName 'promoCode', 'cardNumber', 'expDate','ccv','notes</td>
            </tr>
            
            <tr>
             <td>Title: </td>
             <td>$middleInit</td>
            </tr>
            
            <tr>
             <td>Email: </td>
             <td>$lastName</td>
            </tr>
            
            <tr>
             <td>Comment: </td>
             <td>$email</td>
            </tr>
            
            <tr>
             <td>City: </td>
             <td>$phoneNumber</td>
            </tr>
            
            <tr>
             <td>City: </td>
             <td>$promoCode</td>
            </tr>

            <tr>
             <td>City: </td>
             <td>$cardNumber</td>
            </tr>

           <tr>
             <td>City: </td>
             <td>$expDate</td>
            </tr>
            
            <tr>
             <td>City: </td>
             <td>$ccv</td>
            </tr>
            
            <tr>
             <td>City: </td>
             <td>$notes</td>
            </tr>
		</table>   ";} else{
		  $missList = implode(", ", $missing);
          $output = "Required fields must be filled out: $missList";
	}
}
else{$output = "<p> Go to form <p>";}

  

?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> CTEC 4309 Class Working File: Message Form Processing</TITLE>
<style>
table, th, td {
  border:1px solid black;
  padding: 5px;
}
</style>
</HEAD>

<BODY>

</br>
    
CTEC 4309 Class Working File 
<hr>

<h2>Preview Your Message</h2>

<hr size="1">
<p>
	<?php echo $output;?>
</p>


</BODY>
</HTML>