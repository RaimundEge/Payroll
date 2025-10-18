        <div class="header">
            <h2>Delete Employee</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Employee Information</h2>
            <p>
				<?php
					$emp = $_SESSION['controller']->getEmployee($_POST['id']);
					print "<form method=POST action=index.php?page=deleteEmployee>";
					print "<input type=hidden name='id' value='" . $emp->id . "'>";
					print "<input type=text readonly name=name value='" . $emp->name . "'><br>";
					print "<input type=text readonly name=address value='" . $emp->address . "'><br>";
					print "<input type=text readonly name=salary value='" . $emp->salary . "'><br>";
					print "<input type=text readonly name=project value='" . $emp->project . "'><br>";
					print "<input type=text readonly name=routingnumber value='" . $emp->routingnumber . "'><br>";
					print "<input type=text readonly name=accountnumber value='" . $emp->accountnumber . "'><p>";
					print "<button>Confirm Delete</button>";
					print "</form>";
				?>
			</p>
			<?php include 'php/footer.php'; ?>
       </div>       
