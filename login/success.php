<?php 
include'../view/header.php'; 
?>
<div class="mainWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <div class="conNotes">
            <main>
                <h2>Success.php</h2>
                <p>Thank you for registering. Your information is:</p>
                <p>Username:<?php echo $userName; ?></p>
                <p>First Name:<?php echo $firstName; ?></p>
                <p>Last Name: <?php echo $lastName; ?></p>
                <p>Email Address : <?php echo $email; ?></p>
                <p>Phone: <?php echo $phone; ?></p>
                <a href="login.php"><button>Login</button></a>
            </main>
        </div><!-- end main article -->

       
</div><!-- end content wrapper -->

<?php include '../view/footer.php'; ?>