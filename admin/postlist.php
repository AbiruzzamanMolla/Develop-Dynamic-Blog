<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">

				<?php if(isset($_GET['del'])){
					$delid = $_GET['del'];
					$delq = "DELETE FROM tbl_post WHERE id = '$delid'";
					$deldata = $db->delete($delq);
					if($deldata){
						echo "<span class='success'>Successfully Post deleted!</span>
						<script>
							var timer = setTimeout(function() {
								window.location='postlist.php'
							}, 3000);
						</script>";
					} else {
						echo "<span class='error'>Opps!Post not deleted.</span>";
					}
				} ?>
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">No. </th>
							<th width="20%">Post Title</th>
							<th width="25%">Description</th>
							<th width="10%">Category</th>
							<th width="10$">Image</th>
							<th width="10%">Tags</th>
							<th width="10$">Author</th>
							<th width="10%">Date</th>
							<th width="05%">Action</th>
						</tr>
					</thead>
					<tbody><?php
					$query = "SELECT tbl_post.*, tbl_category.name FROM tbl_post INNER JOIN tbl_category ON tbl_post.catid = tbl_category.id ORDER BY tbl_post.id DESC";
					$post = $db->select($query);
					if($post){
						while($result = $post->fetch_assoc()){
					?>
						<tr class="odd gradeX">
							<td><?php echo $result['id']; ?></td>
							<td><a href="../post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></td>
							<td><p><?php echo $fm->textShorten($result['body'], 80); ?></p></td>
							<td><?php echo $result['name']; ?></td>
							<td><img src="../admin/<?php echo $result['image']; ?>" height="40px" width="60px" alt="preview"></td>
							<td><?php echo $result['tags']; ?></td>
							<td><?php echo $result['author']; ?></td>
							<td><?php echo $fm->formatData($result['date']); ?></td>
							<td><a href="editpost.php?id=<?php echo $result['id']; ?>">Edit</a> || <a onlick="return confirm('Are you sure want to delete?'); " href="?del=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>
						<?php } } ?>
					</tbody>
				</table>
	
               </div>
            </div>
        </div>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
	</script>
	<?php include "inc/footer.php"; ?>
