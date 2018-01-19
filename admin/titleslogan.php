<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<style>
.leftside{float: left; width: 70%}
.rightside{float: left; width: 20%}
.rightside img{height: 160px; width: 170px}
</style>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $fm->validation($_POST['title']);
        $slogan = $fm->validation($_POST['slogan']);
        $title = mysqli_real_escape_string($db->link, $title);
        $slogan = mysqli_real_escape_string($db->link, $slogan);
        $permited  = array('png');
        $file_name = $_FILES['logo']['name'];
        $file_size = $_FILES['logo']['size'];
        $file_temp = $_FILES['logo']['tmp_name'];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $same_name = 'logo'.'.'.$file_ext;
        $uploaded_image = "upload/".$same_name;

        if($title == "" || $slogan == ""){
            echo "<span class='error'>Field must not be empty!</span>";
        } elseif(empty($file_name)){
            $query = "UPDATE tbl_settings SET title = '$title', slogan = '$slogan' WHERE id='1'";
            $update_settings = $db->update($query);
                if ($update_settings) {
                    echo "<span class='success'>Settings Updated Successfully.
                        </span>";
                } else {
                    echo "<span class='error'>Settings Not Updated !</span>";
                    }
            } else {
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE tbl_settings SET title = '$title', slogan = '$slogan', logo = '$uploaded_image' WHERE id='1'";
                $update_settings = $db->update($query);
                    if ($update_settings) {
                        echo "<span class='success'>Settings Updated Successfully.
                            </span>";
                    }else {
                        echo "<span class='error'>Settings Not Updated !</span>";
                        }
                }
            } ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Site Title and Description</h2>
        <?php
        $query = "SELECT * FROM tbl_settings WHERE id = '1'";
        $blogsettings = $db->select($query);
        if($blogsettings){
            while($result = $blogsettings->fetch_assoc()){
        ?>
        <div class="block sloginblock">
        <div class="leftside">
            <form action="titleslogan.php"  method="post" enctype="multipart/form-data">
                <table class="form">
                    <tr>
                        <td>
                            <label>Website Title</label>
                        </td>
                        <td>
                            <input type="text" value="<?php echo $result['title'];?>"  name="title" class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Website Slogan</label>
                        </td>
                        <td>
                            <input type="text" value="<?php echo $result['slogan'];?>"  name="slogan" class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Website Logo</label>
                        </td>
                        <td>
                            <input type="file" name="logo" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
                <div class="rightside"><img src="<?php echo $result['logo'];?>" alt="LOGO"></div>
            </div>
            <?php } } ?>
        </div>
    </div>
    <?php include "inc/footer.php"; ?>