<!-- Menu toggle -->
<a href="#menu" id="menuLink" class="menu-link">
    <!-- Hamburger icon -->
    <span></span>
</a>

<div id="menu">
    <div class="pure-menu">
        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="." class="pure-menu-link">Home</a></li>

            <li class="pure-menu-item"><a href="index.php?page=editSearch" class="pure-menu-link">Edit Employee</a></li>
            <li class="pure-menu-item"><a href="index.php?page=createEmployee" class="pure-menu-link">Create Employee</a></li>
            <li class="pure-menu-item"><a href="index.php?page=deleteSearch" class="pure-menu-link">Delete Employee</a></li>

            <li class="pure-menu-item"><a href="mailto:ege@niu.edu" class="pure-menu-link">Contact</a></li>
        </ul>
        <br>
        <div align="center">
            <input type="checkbox" id="debugswitch"                    
                   <?php echo(isset($_SESSION['debug'])?'checked':''); ?>
                   onclick="toggleDebug(this)">
                enable debug messages
        </div>
    </div>           
</div>
<script src="js/ui.js"></script>
