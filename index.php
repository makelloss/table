<?php
$i1 = "<img src=\"images/1.png\"width=\"50\"\"height =\"50\">";
print "<table style=\"border:solid;\">";
for ($i = 0; $i <= rand(1,10); $i++) {
    print "<tr><td style=\"border:solid;\">$i</td><td style=\"border:solid;\">$i1</td></tr>";
}
print "</table>";