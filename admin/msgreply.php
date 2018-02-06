<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Reply Message </h2>
                <div class="block">
                <?php
                  if(isset($_GET['msgid']) || $_GET['msgid'] !== null){
                    $msgid = $_GET['msgid'];
                  } // else {
                  //   echo "<script>window.location = 'inbox.php';</script>";
                  // }
                  ?>
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $toMail = mysqli_real_escape_string($db->link, $_POST['toMail']);
                    $fromMail = mysqli_real_escape_string($db->link, $_POST['fromMail']);
                    $subject = mysqli_real_escape_string($db->link, $_POST['subject']);
                    $message = mysqli_real_escape_string($db->link, $_POST['message']);
                    $sendmail = mail($toMail, $subject, $message, $fromMail);
                    if($sendmail){
                      echo "Message send succesful!";
                    } else {
                      echo "Message is not send! ";
                    }
                }
                ?>
                <?php
            $query = "SELECT * FROM tbl_contect WHERE id='$msgid' ORDER BY id desc";
            $category = $db->select($query);
            while($result = $category->fetch_assoc()){
                ?>
                <form action="msgreply.php?msgid=<?php echo $result['id']; ?>" method="post" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
                            <td>
                                <label>To: </label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['email']; ?>" class="medium" name="toMail"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>From: </label>
                            </td>
                            <td>
                                <input type="text" placeholder="ABCD"  name="fromMail" class="medium"/>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                <label>Subject: </label>
                            </td>
                            <td>
                                <input type="text" placeholder="Subject name"  name="subject" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="message"></textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Send" />
                            </td>
                        </tr>
                    </table>
                    </form>
                        <?php } ?>
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