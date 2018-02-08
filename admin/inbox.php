<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<?php
if(!isset($_GET['seen']) || $_GET['seen'] == null){
} else {
	$seen = $_GET['seen'];
	$query = "UPDATE tbl_contect SET status = '1' WHERE id = '$seen'";
	$seen = $db->update($query);
}
?>
<div class="grid_10">
		<div class="box round first grid">
				<h2>Inbox</h2>
				<div class="block">
						<table class="data display datatable" id="example">
						<?php
						if(!isset($_GET['showmsg']) || $_GET['showmsg'] == null){
                  } else {
										echo "<b>Message Deleted Successfully!<br>";
									}
						?>
	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Name</th>
			<th>Mail</th>
			<th>Message</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php
		$query = "SELECT * FROM tbl_contect WHERE status = '0' ORDER BY id DESC";
		$category = $db->select($query);
		if($category){
			$i = 0;
			while($result = $category->fetch_assoc()){
				$i++;
?>
		<tr class="odd gradeX">
			<td><?php echo $result['id']; ?></td>
			<td><?php echo $result['firstname']; ?> <?php echo $result['lastname']; ?></td>
			<td><?php echo $result['email']; ?></td>
			<td><?php echo $fm->textShorten($result['body']); ?></td>
			<td><?php echo $fm->formatData($result['date']); ?></td>
			<td><a href="viewmsg.php?msgid=<?php echo $result['id']; ?>">View</a> || <a href="msgreply.php?msgid=<?php echo $result['id']; ?>">Reply</a> || <a href="?seen=<?php echo $result['id']; ?>">Seen</a></td>
		</tr>
<?php } } ?>
	</tbody>
</table>
</div>
</div>
<div class="box round first grid">
				<h2>Seen Inbox</h2>
				<div class="block">
					<table class="data display datatable" id="example">
		<tr>
			<th>Serial No.</th>
			<th>Name</th>
			<th>Mail</th>
			<th>Message</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
<?php
		$query = "SELECT * FROM tbl_contect WHERE status = '1' ORDER BY id DESC";
		$category = $db->select($query);
		if($category){
			$i = 0;
			while($result = $category->fetch_assoc()){
				$i++;
?>
		<tr class="odd gradeX">
			<td><?php echo $result['id']; ?></td>
			<td><?php echo $result['firstname']; ?> <?php echo $result['lastname']; ?></td>
			<td><?php echo $result['email']; ?></td>
			<td><?php echo $fm->textShorten($result['body']); ?></td>
			<td><?php echo $fm->formatData($result['date']); ?></td>
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