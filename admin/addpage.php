<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="grid_10">
<div class="box round first grid">
    <h2>Add New Page</h2>
    <div class="block">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = mysqli_real_escape_string($db->link, $_POST['title']);
        $body = mysqli_real_escape_string($db->link, $_POST['body']);

        if($title == "" || $body == ""){
            echo "<span class='error'>Field must not be empty!</span>";
        } else{
            $query = "INSERT INTO tbl_page(page_title, page_body) VALUES('$title', '$body')";
            $inserted_post = $db->insert($query);
            if ($inserted_post) {
            echo "<span class='success'>Page Inserted Successfully.
            </span>";
            }else {
            echo "<span class='error'>Page Not Inserted !</span>";
            }
        }
    }
    ?>
    <form action="addpage.php" method="post">
        <table class="form">
            <tr>
                <td>
                    <label>Title</label>
                </td>
                <td>
                    <input type="text" placeholder="Enter Post Title..." name="title" class="medium" />
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Content</label>
                </td>
                <td>
                    <textarea class="tinymce2" name="body" height="400px" width="400px"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Save" />
                </td>
            </tr>
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