<nav id="primary-menu">

    <ul>
        <li class="current"><a href="index.php"><div>Home</div></a>
        </li>
        <li><a href="#"><div>Schemes</div></a>
            <ul>
                <li><a href="mkby.php"><div>Mazi Kanya Bhagyashree</div></a></li>
                <li><a href="bsy.php"><div>Balika Samridhi</div></a></li>
                <li><a href="jsy.php"><div>Janani Suraksha</div></a></li>
                <li><a href="pmuy.php"><div>Ujjwala Yojana</div></a></li>
                <li><a href="vpby.php"><div>Varishtha Pension</div></a></li>
                
            </ul>
        </li>

        <li><a href="upload.php"><div>Upload Documents</div></a></li>
        <li><a href="contact.php"><div>Complaint</div></a></li>
        <li><a href="#"><div><?php echo $_SESSION['member_name']; ?> </div></a></li>

        <li><a href="logout.php"><div>Logout</div></a></li>
    </ul>
</nav>