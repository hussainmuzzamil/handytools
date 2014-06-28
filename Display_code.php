<?php // display source code $lines = file('http://google.com/'); foreach ($lines as $line_num => $line) { 
	// loop thru each line and prepend line numbers
	echo "Line #{$line_num} : " . htmlspecialchars($line) . "
\n";
}
?>