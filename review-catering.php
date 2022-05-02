<?php
include ('shared.php');

$required = array('firstname', 'lastname', 'email', 'phone','date', 'guests','venue','type');

$expected = array('firstname', 'lastname', 'email', 'phone','date', 'guests','venue','type','description');

$expName = array('First name', 'Last name', 'Email','Phone number', 'Date', 'Number of guests', 'Venue','Event type','Description');

$missing = array();

	

if (isset($_POST['getQuote'])) { 
    
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
      <title>Review your information - David's Barbeque</title>
      <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
      <link href="css/style.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
   </head>
   <body>
        </main>
            <?php echo $nav; ?>

            <section>
                <h1>Review your information</h1>
                
                <table>
                    <?php echo $output;?>
                </table>
                

                <a class="btn btn-primary" href="index.php">Looks Good!</a>
                <a class="btn btn-primary" href="catering.php">Back</a>
            </section>

            
            <footer><?php echo $footer; ?></footer>
        </main>
        <script src="js/app.js"></script>
    </BODY>
</HTML>
