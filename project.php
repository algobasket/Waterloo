<?php include 'header.php';?>
<!-- banner -->
	<div class="banner1">
		<h3>Create Project</h3>
	</div>
<!-- //banner -->
<!-- gallery -->
	<div class="gallery">
		<h4>To save the selections you make you have to click on the save button after every selection you make. When you finished your project you can download all selections.</h4>
		
		<br>
		<span id="result"></span>
		<table class="table">
			<tr>
		      <td>
		      	<h4>Name of the Project:</h4><br>
		      	<input type="text" id="projectName" class="form-control input-lg" placeholder="Your Project Name" required/>
		      </td>		
			</tr>
			<tr>
		      <td>
		      	<h4><br>Reference of the Project:</h4><br>
		      	<input type="text" id="projectReference" class="form-control input-lg" placeholder="Project Reference" required/>
		      </td>		
			</tr>
			<tr>
		      <td>
		      	<h4><br>Your Name:</h4><br>
		      	<?php print_r($_SESSION['sess']);?>
		      </td>		
			</tr>
			<tr>
		      <td>
		      	<br>
		      	<button class="btn btn-success btn-block" onclick="createProjectPopup()" type="button">Save & Next</button>
		      </td>		
			</tr>
		</table>
		
		
	</div>
<br><br>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirmation</h4>
      </div>
      <div class="modal-body">
        <p>Do you want to save your selections?</p>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" onclick="createProject()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- footer -->
	<?php include 'footer.php' ;?>