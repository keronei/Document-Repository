<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Directory Contents</title>
  <link rel="stylesheet" href="modifier.css">
  <script src=".modifier.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    
    <script src="js/croppie.js"></script>
		<script src="js/croppie.min.js"></script>
		<link rel="stylesheet" type="css" href="css/croppie.css" />
    <!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>

  <div id="container">
  
  <h2 style="margin-left:90px;margin-right:90px;">Kisumu County Government Health Department Inventory | Admin Pane</h2>
    
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-failed" data-toggle="modal" data-target="#add_new_record_modal">+ department</button>
            </div>
        </div>
    </div>
    
    
    <!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <form action="" method="post">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">New Department</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">Department Name</label>
                    <input type="text" id="dpt_name" placeholder="Name of Department" class="form-control" required/>
                </div>

                <div class="formhead">
                    <label for="dpt_description">Department Description</label>
                    <input type="text" id="dpt_description" placeholder="Brief description pertaining department..."   class="form-control" required size="35"/>
                </div>

                <div class="form-group" >
                    <label for="email">Head of Department</label>
                    <input type="text" id="dpt_head" placeholder="Full names of head of department" class="form-control" required/>
                    <img class="col-sm-2" src="profile" id="pic" class="img-responsive img-circle">
                    <input type="file" class="fa fa-camera" name="file" id="profile-img"  required>
                    
    
                     
                        <script type="text/javascript">
      //Croppie library for profile resizing
      
    function readURL(input) {
      
       var el = document.getElementById('pic');
var vanilla = new Croppie(el, {
    viewport: { width: 150, height: 150,type: 'circle' },
    boundary: { width: 250, height: 250 },
	
	
	 showZoomer: true,
    enableResize: true,
    enableOrientation: true,
    mouseWheelZoom: 'ctrl',
	enforceBoundary:true
  

  
});
      
      
       //createCrop();
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
              
              
  vanilla.bind({
  
    url:  $('#pic').attr('src', e.target.result),
    orientation: 1
});
              
               
                
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
      console.log("onChange");
        readURL(this);
       
    });
      
function createCrop(){
  var el = document.getElementById('pic');
var vanilla = new Croppie(el, {
    viewport: { width: 150, height: 150,type: 'circle' },
    boundary: { width: 250, height: 250 },
	
	
	 showZoomer: true,
    enableResize: true,
    enableOrientation: true,
    mouseWheelZoom: 'ctrl',
	enforceBoundary:true
  

  
});
vanilla.bind({
  
    url: $('#pic').attr('src'),
    orientation: 1
});
//on button click

  
   function ro(deg){
    rotate(deg);
  }

function fix(){

vanilla.result('blob').then(function(blob) {
    // do something with cropped blob
    
    console.log(blob);
}



);

}
  
}
    
    </script>
    
                     
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="trys" onclick=javascript:fix();>+ Department</button>
            </div>
        </div>
    </div>
  </form>
</div>
<!-- // Modal -->
    
 
    <table class="sortable">
      <thead>
        <tr>
          <th>File name</th>
          <th>Date added</th>
          <th>Type</th>
          <th>Size <small></small></th>
          <th>Valid till</th>
          <th>Action</th>
          
      
        </tr>
      </thead>
      <tbody>
        
        <?php
    require_once"connection.php";
    ?>
      <?php
      $heldVar;
      
      //fetch and initialize data from database---
      
    
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM uploads_';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

//loop through the fetched data and list them on the layout tables;
while ($row = mysqli_fetch_array($query))
		{
      $name = $row['file_name'];
		
      $date_ = date('F d, Y', strtotime($row['date_added']));
      
      $sizeFile = $row['size'];
      
      $downloadLink = $row['path'];
      
      $extn = $row['kind'];
      
      $doc_id = $row['id'];
      
      $validity_ = date('F d, Y', strtotime($row['validity']));
      
      
    if($sizeFile<1024){
    $sizeFile =$sizeFile." bytes";    
      }elseif
      
    (($sizeFile>=1024)&&($sizeFile<1048576)){
       $sizeFile = round(($sizeFile)/1024) . " Kb";
    }elseif
    (($sizeFile >= 1048576)&&($sizeFile<1073741824)){
      
      $sizeFile =  round(($sizeFile)/1048576)." Mb";
    }elseif($sizeFile >=1073741824){
      $sizeFile = "GB";
    }
      
      //switch file extension to determine readable format
      
                switch ($extn){
            case "png": $extn="PNG Image"; break;
            case "jpg": $extn="JPEG Image"; break;
            case "svg": $extn="SVG Image"; break;
            case "gif": $extn="GIF Image"; break;
            case "ico": $extn="Windows Icon"; break;
            
            case "txt": $extn="Text File"; break;
            case "log": $extn="Log File"; break;
            case "htm": $extn="HTML File"; break;
            case "php": $extn="PHP Script"; break;
            case "js": $extn="Javascript"; break;
            case "css": $extn="Stylesheet"; break;
            case "pdf": $extn="PDF Document"; break;
            
            case "zip": $extn="ZIP Archive"; break;
            case "bak": $extn="Backup File"; break;
            
            default: $extn=strtoupper($extn)." File"; break;
          }
          
          
          
         // $sizeInMbs = round(($sizeFile)/1024);
        
          
      
		/*	echo '<tr>
					<td> <a href ='.$row['file_name'].'</td>
				
					<td> '. date('F d, Y', strtotime($row['date_added'])) . '</td>
					<td>'.$row['size'].' mb</td>
				</tr>';
        
      */
    //$deleteCall = deleteFromFolder($downloadLink);
    
    ?>
          
  <tr class=' $class '>
            <td><a href='uploads/<?php echo$downloadLink; ?>' > <?php echo $name; ?> </a></td>
            <td><?php echo $date_; ?></td>
            <td><?php echo $extn; ?></td>
            <td><?php echo $sizeFile;?></td>
            <td><?php echo $validity_; ?> </td>
           <td id='<?php echo$doc_id; ?>'><form action="" method="post"> <input type='text' hidden='true' value='<?php echo $downloadLink; ?>' name='find'/><input type='submit' id = 'key' value='Remove'> </form></td>
          </tr> 
      
          <?php
          
         
          }
      
       
    

          
     
      
        function deleteFromFolder($link){
          
  
          //procedure to delete from folder
      $dir = "uploads";
      $dirHandler = opendir($dir);
      while($file = readdir($dirHandler)){
        if($file==$link){
          //pass precise path 
          unlink($dir."/".$file);
          
        }
      }closedir($dirHandler);
      
          

          
          
        }
        
      
        
          
         
          
          
          
          //upload code
          //require_once"connection.php";

if(isset($_FILES['filefield'])){
$file=$_FILES['filefield'];
$upload_directory='uploads/';
$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
$allowed_extensions=explode(',',$ext_str);
$max_file_size = 10485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character

//get unmodified name for readebility purposes

$file_name = $file['name'];

//get the date uploaded, for future purpose of archiving

$dur=date("Y/m/d");

$validity = $_POST['validity'];

$dpt = $_POST['dpt'];

//check validity of file formats


if (!in_array($ext, $allowed_extensions) ) {
echo "only".$ext_str." files allowed to upload"; // exit the script by warning



} /* check file size of the file if it exceeds the specified size warn user */

//get size of file,
$size_ = $file['size'];



if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning

}

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

//$path=md5(microtime()).'.'.$ext;

//rename the file to remove white spaces but leave it still readable.
$refined_path = preg_replace('/\s+/','_',$file_name);

if(move_uploaded_file($file['tmp_name'],$upload_directory.$refined_path)){

//mysql_connect("localhost","root","unlock");

//mysql_select_db("kisumu");

echo "its name is ".$file_name;

$uploadx = "INSERT INTO uploads_ (path,file_name,date_added,size,kind,validity,department_id) VALUES ('$refined_path','$file_name','$dur','$size_','$ext','$validity','$dpt')";

//$resl=$conn->query("INSERT INTO uploads_(path) VALUES ('$path')");

if ($conn->query($uploadx) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $uploadx . "<br>" . $conn->error;
}


echo"Your File Successfully Uploaded";


}

else{

echo "The file cant moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning

}

}elseif(isset($_POST['find'])){
  
  $pathVar = $_POST['find'];
  
  deleteFromFolder($pathVar);
                        //remove info from database as well
          $queryDeletion = "Delete from uploads_ where path = '$pathVar'";
   
         if ($conn->query($queryDeletion) === TRUE) {
              echo "Omitted successfully";
    
             } else {
                 echo "Error: " . $queryDeletion. "<br>" . $conn->error;
                   }
        }
  
  


/*



*/

function updatedb($pathto){



//mysql_query("INSERT INTO uploads_(path) VALUES ( '$path')");

//$connect = new mysqli("localhost","root","unlock","kisumu");




//if(mysql_query($conn,$uploadx)){
 
 //echo "saved as $path";
 
//}
//else{
 //echo "not inserted".mysql_error();
}
//}

  
  
  //if (isset($_POST['find'])){
    
    //$identity=$_POST['find'];
    //if
    //(deleteFromFolder($identity)){
    
    //deleteFromDB($identity);
    //}
   // else echo "Removed Successfully";
 //   }      
      ?>
          
        
      </tbody>
    </table>
  
  
    
  </div>

<script language="javascript">
function myfunc(element) {
  el = document.getElementById(element);
  el.innerHTML = el.innerHTML + "hello world!";
  
  
  
  
  

}
</script>
  
  <div id="uploader">
  
    
<form action="" method="post" enctype="multipart/form-data">
<label>Upload File


<script>
  
  (function() {
    var startingTime = new Date().getTime();
    // Load the script
    var script = document.createElement("SCRIPT");
    script.src = 'js/jquery-1.11.3.min.js';
    script.type = 'text/javascript';
    document.getElementsByTagName("head")[0].appendChild(script);

    // Poll for jQuery to come into existance
    var checkReady = function(callback) {
        if (window.jQuery) {
            callback(jQuery);
        }
        else {
            window.setTimeout(function() { checkReady(callback); }, 20);
        }
    };

    // Start polling...
    checkReady(function($) {
        $(function() {
            var endingTime = new Date().getTime();
            var tookTime = endingTime - startingTime;
            
             window.alert("Admin Reminder: documents will be archived automatically when validity date elapses.");
            //window.alert("jQuery is loaded, after " + tookTime + " milliseconds!");
        });
    });
})();
      
     
   
  
</script>

<input id="filefield" type="file" name="filefield" />

</label>

<label>
  
  Valid till:
  <input id = "validity" type="date" name="validity" required  placeholder="yyyy/mm/dd" data-date-inline-picker= "true"/>
  
  Select Department:
  <select name="dpt" >
			  <?php
			  $area="select * from departments";
	          $resl=$conn->query($area);
	          //$subjt=mysqli_fetch_array($resl);
			  //$rows=mysqli_num_rows($resl);
			  while($subjt=mysqli_fetch_array($resl)) {
			 echo"<option value='".$subjt['id']."'>".$subjt['name']."</option>";
				   }
					   ?>
        </select>

<input id="Upload" type="submit" name="Upload" value="Upload" />

<!-- This hidden input will force the  PHP max upload size. it may work on all servers. -->

<input type="hidden" name="MAX_FILE_SIZE" value="100000" />

</label>

</form>
  </div>
  
  
</body>

</html>