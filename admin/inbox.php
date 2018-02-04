<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="grid_10">
		<div class="box round first grid">
				<h2>Inbox</h2>
				<div class="block">
						<table class="data display datatable" id="example">
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
			<td><a href="viewmsg.php?msgid=<?php echo $result['id']; ?>">View</a> || <a href="">Reply</a> || <a href="">Seen</a></td>
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
		<tr class="odd gradeX">
			<td>01</td>
			<td>Internet</td>
			<td>Internet</td>
			<td>Internet</td>
			<td>Internet</td>
			<td><a href="">Delete</a></td>
		</tr>
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