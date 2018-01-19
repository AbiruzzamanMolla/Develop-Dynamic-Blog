<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
?>
<div class="grid_10">
<div class="box round first grid">
    <h2>Update Post</h2>
    <div class="block">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = mysqli_real_escape_string($db->link, $_POST['title']);
        $catid = mysqli_real_escape_string($db->link, $_POST['catid']);
        $author = mysqli_real_escape_string($db->link, $_POST['author']);
        $tags = mysqli_real_escape_string($db->link, $_POST['tags']);
        $body = mysqli_real_escape_string($db->link, $_POST['body']);

        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "upload/".$unique_image;

        if($title == "" || $catid == "" || $tags == "" || $body == ""){
            echo "<span class='error'>Field must not be empty!</span>";
        }
        if(!empty($file_name)){
            if ($file_size >1048567) {
                    echo "<span class='error'>Image Size should be less then 1MB!
                </span>";
                } elseif (in_array($file_ext, $permited) === false) {
                    echo "<span class='error'>You can upload only:-"
                    .implode(', ', $permited)."</span>";
                } else{
                    move_uploaded_file($file_temp, $uploaded_image);
                        $query = "UPDATE tbl_post SET catid = '$catid', title = '$title', image = '$uploaded_image', author = '$author', body = '$body', tags = '$tags' WHERE id = '$id'";
                        $update_post = $db->update($query);
            if ($update_post) {
                echo "<span class='success'>Post Updated Successfully.
                </span>";
            }else {
                echo "<span class='error'>Post Not Updated !</span>";
                }
            }
    } else {
        $query = "UPDATE tbl_post SET catid = '$catid', title = '$title', author = '$author', body = '$body', tags = '$tags' WHERE id = '$id'";
        $update_post = $db->update($query);
            if ($update_post) {
                echo "<span class='success'>Post Updated Successfully.
                </span>";
            }else {
                echo "<span class='error'>Post Not Updated !</span>";
                }
    }
}
    ?>
    <form action="editpost.php" method="post" enctype="multipart/form-data">
        <table class="form">
        <?php
            $query = "SELECT * FROM tbl_post WHERE id='$id'";
            $postedit = $db->select($query);
            while($result = $postedit->fetch_assoc()){
        ?>
            <tr>
                <td>
                    <label>Title</label>
                </td>
                <td>
                    <input type="text" value="<?php echo $result['title'];?>" name="title" class="medium" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Author</label>
                </td>
                <td>
                    <input type="text" value="<?php echo $result['author'];?>" name="author" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Category</label>
                </td>
                <td>
                <select id="select" name="catid">
                <?php
                $catquery = "SELECT * FROM tbl_category";
                $allcat = $db->select($catquery);
                if($allcat){
                    while($result2 = $allcat->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result2['id']; ?>"><?php echo $result2['name']; ?></option>
                <?php } } ?>
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tags</label>
                </td>
                <td>
                    <input type="text" value="<?php echo $result['tags'];?>" id="tags" name="tags" />
                </td>
            </tr>
            <tr>
                <td>
                    <label><img src="<?php echo $result['image']; ?>" height="100px" width="100px" alt=""></label>
                </td>
                <td>
                    <input type="file" name="image" />
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Content</label>
                </td>
                <td>
                    <textarea class="tinymce" name="body"><?php echo $result['body'];?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Save" />
                </td>
            </tr>
            <?php } ?>
        </table>
        </form>
    </div>
</div>
</div>
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
<?php include "inc/footer.php"; ?>