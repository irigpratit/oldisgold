<?php
include('navbar.php');
?>
<div class="type-1">
<div class="type-1" id="menu-list">
  <br>
      <div class="panel panel-default">
        <div class="panel-heading"><strong><h2>Upload Files</strong></h2> <small>Book pictures upload</small></div>
        <div class="panel-body">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
          <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
            <div class="form-horizontal">
              <div class="form-group">
                <input type="file" name="files[]" id="js-upload-files" multiple>
                <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
              </div>
            </div>
         

          <div class="upload-drop-zone" style="margin-left:45%;" id="drop-zone">
            Drag and drop files here
          </div>

       
  
    </div> 

				<a href="#" class="btn btn-1">
                    <span class="txt">View Previously added books </span>
                    <span class="round"><i class="fa fa-chevron-right"></i></span>
                </a>
              </div>
          
           </form>
      </div>

<?php 
include('footer.php');
?>