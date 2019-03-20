

<div class="jumbotron">

<div class="container addNeedHeader" align="center">

<h3>Add Your Need Here</h3>


<div id="add_need_content_container">


               <div id="status-overlay" style="display: none"></div>
<br>
<div id="add_need_content_container" >
	<form action="" method="POST" class="form-group" name="addneed">
		  <label class="edit_element edit_branch input-element">
            <span style="font-size:16px; display:block;padding-bottom:5px;" class="input-label">Please Choose The Category</span>

            <select class="input-dropdown-field input-field branchselect form-control" id="styled" name="category">
 
            <option value="HigherEducation">Higher Education</option>
            <option value="Career">Career</option>
            <option value="Relocation">Relocation</option>
            <option value="Fund Raising">Fund Raising</option>
            <option value="Other">Other</option>

              <option label=" "></option>
               
            

            </select>

        </label>
        <br>
        <br>
                <div id="need_content_container" align="center">

					<textarea name="need" id="styled"  placeholder="Add Your Need Here Please" class="form-control"></textarea>
						<?php echo form_error('need','<div class="text-danger">','</div>'); ?>
					<br>
				

					<input type="submit" class="btn btn-info" name="sub" value="Post" id="sub">
					<a class="btn btn-warning" id="need_discard_btn" href="<?php echo base_url();?>needs" style="color: white;text-decoration:none;">Discard</a></div>
				</div>
			</div>

		</form>
</div>
</div>

</div>
<style type="text/css">

body
{

	background-color: #ecf0f1;
}
textarea#styled {
	width: 700px;
	height: 180px;
	border: 3px solid #cccccc;
	padding: 5px;
	background-position: bottom right;
	background-repeat: no-repeat;
}

	/*@media only screen and (max-width: 1200px) { 


 
	}*/



	@media only screen and (max-width: 900px) { 

textarea#styled {
	width: 350px;
	height: 180px;
	border: 3px solid #cccccc;
	padding: 5px;
	background-position: bottom right;
	background-repeat: no-repeat;
}
 
	}




</style>


<script type="text/javascript">
$(document).ready(function () {

        $("#addneed").submit(function (e) {

            //stop submitting the form to see the disabled button effect
            e.preventDefault();

            //disable the submit button
            $("#sub").attr("disabled", true);

            //disable a normal button
            // $("#btnTest").attr("disabled", true);

            return true;

        });
    });
</script>
</script>