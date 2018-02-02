<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="grid_10">

<?php
if(isset($_SESSION)){
    $username = $_SESSION['username'];
    $id = $_SESSION['userid'];
} else {
    $username = "";
    $id = "";
}
?>
    <div class="box round first grid">
        <h2> Dashbord</h2>
        <div class="block">
            Welcome admin panel <span style="color:red">
            <?php echo $username.$id;  ?></span>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
