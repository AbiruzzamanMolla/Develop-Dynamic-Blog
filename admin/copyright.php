<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="grid_10">
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
                <div class="block copyblock">
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $note = $fm->validation($_POST['copyright']);
                        $note = mysqli_real_escape_string($db->link, $note);

                        if($note !== ""){
                                $query = "UPDATE tbl_copyright SET note = '$note' WHERE id='1'";
                                $update_settings = $db->update($query);
                                    if ($update_settings) {
                                        echo "<span class='success'>Settings Updated Successfully.
                                            </span>";
                                    }else {
                                        echo "<span class='error'>Settings Not Updated !</span>";
                                        }
                                } else {
                                    echo "<span class='error'>Settings Not Updated !</span>";
                                    }
            } ?>
                <form action="copyright.php" method="post">
                    <table class="form">
                    <?php
                    $query = "SELECT * FROM tbl_copyright WHERE id = '1'";
                    $copyright = $db->select($query);
                    if($copyright){
                        while($result = $copyright->fetch_assoc()){
                    ?>
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['note']; ?>" name="copyright" class="large" />
                            </td>
                        </tr>
                        <?php } } ?>
                        <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <?php include "inc/footer.php"; ?>