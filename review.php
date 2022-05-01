<?php
include ('shared.php');

$required = array('firstName', 'lastName', 'email', 'cardNumber','expDate', 'ccv');

$expected = array('firstName', 'middleInit', 'lastName', 'email', 'phoneNumber', 'promoCode', 'cardNumber', 'expDate','ccv','notes');

$expName = array('First Name', 'Middle Initial', 'Last Name', 'Email', 'Phone Number', 'Promo Code', 'Card Number', 'Exp Date','CCV','Notes');

$missing = array();

$cookie_name = "pCode";

if(isset($_POST['promoCode']) && !empty($_POST['promoCode'])){
		setcookie("pCode", $_POST["promoCode"], time() + 14400);
		$_COOKIE['pCode'] = $_POST["promoCode"];
} 
else{
    	setcookie("pCode", "", time() - 3600);
		$_COOKIE['pCode'] = "";
}

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
        for ($x = 0; $x <= sizeof($expected) -1; $x++) {
        $input = $_POST[$expected[$x]];
        $name = $expName[$x];
        $output .= "
            <tr>
             <td>$name:</td>
             <td class=\"input\">$input</td>
            </tr>
        ";
        }
    } 
		
		else{
		  $missList = implode(", ", $missing);
          $output = "Required fields must be filled out: $missList";
	}
}
else{$output = "<p> Go to form <p>";}

?>

<!DOCTYPE HTML>
<HTML>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Review your order - David's Barbeque</title>
      <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
      <link href="css/style.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
   </head>
   <body>
        </main>
            <section>
            <?php echo $nav; ?>
            <h1>Review your order</h1>
            
            <table>
            	<?php echo $output;?>
            </table>
            

            <a class="btn btn-primary" href="thankyou.php">Looks Good!</a>
            <a class="btn btn-primary" href="checkout.php">Back</a>
            </section>

            
            <footer><?php echo $footer; ?></footer>
        </main>
        <script src="js/app.js"></script>
    </BODY>
</HTML>