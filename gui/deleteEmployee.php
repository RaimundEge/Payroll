        <div class="header">
            <h2>Delete Employee</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Employee Information</h2>
            <p>
				<?php
					print $_SESSION['controller']->deleteEmployee($_POST['id']);
				?>
			</p>
			<?php include 'php/footer.php'; ?>
       </div>       
