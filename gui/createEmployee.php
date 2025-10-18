        <div class="header">
            <h2>Create new Employee</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Employee Information</h2>
            <p>
				<?php
					$projList = $_SESSION['controller']->getProjects();
					print "<form method=POST action=index.php?page=updateEmployee>";
					print "<input type=hidden name='id' value='-1'>";
					print "<table>";
					print "<tr><td>Name: </td><td><input type=text required name=name value=''></td></tr>";
					print "<tr><td>Address: </td><td><input type=text required name=address value=''></td></tr>";
					print "<tr><td>Salary: </td><td><input type=text required name=salary value=''></td></tr>";
					print "<tr><td>Project: </td><td><select name=project>";
					foreach ($projList as $proj) {
						print "<option>" . $proj->id . "</option>";
					}
					print "</select></td></tr>";
					print "<tr><td>Bank #: </td><td><input type=text required name=routingnumber value=''></td></tr>";
					print "<tr><td>Account #: </td><td><input type=text required name=accountnumber value=''></td></tr>";
					print "</table><p>";
					print "<button>Update</button>";
					print "</p></form>";
				?>
			</p>
			<?php include 'php/footer.php'; ?>
       </div>       
