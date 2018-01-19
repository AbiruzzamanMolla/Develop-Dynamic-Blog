<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<?php
if(!isset($_GET['catid']) || $_GET['catid'] == null){
    echo "<script>window.location = 'catlist.php';</script>";
} else {
    $catid = $_GET['catid'];
}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Category</h2>
        <div class="block copyblock">
            <form method="post" action="">
                <?php 
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $name = $_POST['name'];
                        $name = mysqli_real_escape_string($db->link, $name);
                        if(empty($name)){
                            echo "<span class='error'>Field must not be empty!</span>";
                        } else {
                            $query = "UPDATE tbl_category SET name ='$name' WHERE id = '$catid'";
                            $catedit = $db->update($query);
                            if($catedit){
                                echo "<script>window.location = 'catlist.php';</script>";
                            } else {
                                echo "<span class='error'>Opps! Category not edited.</span>";
                            }
                        }
                    }
                ?>
                <?php
                $query = "SELECT * FROM tbl_category WHERE id='$catid' ORDER BY id desc";
                $category = $db->select($query);
                while($result = $category->fetch_assoc()){
                    ?>
            <table class="form">
                <tr>
                    <td>
                        <input type="text" name="name" placeholder="<?php echo $result['name']; ?>" class="medium" />
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
    <?php } ?>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
