<?php
if (isset($_SESSION['debug'])) {
if ($logText != "") {
	print '<h2 class="content-subhead">Log Messages</h2><p>';
	print $logText . "</p>";
} else {	
	print '<h2 class="content-subhead">No Log Messages</h2><p>';
}
}
?>