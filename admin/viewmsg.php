<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">
                <?php
                  if(!isset($_GET['msgid']) || $_GET['msgid'] == null){
                      echo "<script>window.location = 'inbox.php';</script>";
                  } else {
                      $msgid = $_GET['msgid'];
                  }
                  ?>
                <form action="" method="post" enctype="multipart/form-data">
                <table class="form">
                <?php
                $query = "SELECT * FROM tbl_contect WHERE id='$msgid' ORDER BY id desc";
                $category = $db->select($query);
                while($result = $category->fetch_assoc()){
                    ?>
                        <tr>
                            <td>
                                <label>Name: </label>
                            </td>
                            <td>
                                <p><?php echo $result['firstname']." ".$result['lastname']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email: </label>
                            </td>
                            <td>
                                <p><?php echo $result['email']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date: </label>
                            </td>
                            <td>
                                <p><?php echo $fm->formatData($result['date']); ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Message: </label>
                            </td>
                            <td>
                                <p><?php echo $result['body']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Delete: </label>
                            </td>
                            <td>
                                <p align="right"><a href="?delid=<?php echo $result['id']; ?>">Delete This Message</a></p>
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