# WindTurbine-Inspection
Wind turbine inspection coding exercise to iterate through a PHP array with AJAX. I used Bootstrap 4 to come up with an efficient yet appealing display outcome.

The main PHP script is in the data.php file. There, an array is created for a hundred items and we iterate through this array using a foreach loop. The conditions of the exercise are met using an if...elseif...else statement and renders for each case a different layout and text - as per the exercise. 

Ajax comes in place from the index.php file. This file is the main html element of the page and is used as the main container structure to hold the PHP script. We use a simple Ajax load() method to call the script inside the <div class='container'> asynchronously.

You can find the header and footer information in their respective file within the template folder.

For more information please refer to the pdf document that was sent with the application. 
