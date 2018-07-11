
<?php
require_once"connection.php";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<!--if for assistance : lincolnkeronei95@gmail.com-->


<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kisumu County: Document Repository.</title>
	<meta name="description" content="Kisumu County" />
	<meta name="keywords" content="Kisumu County Inventory Repo" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- food icons -->
	<link rel="stylesheet" type="text/css" href="css/organicfoodicons.css" />
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="css/taxed.css" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
	 
</head>

<body>
	
	
	
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="moh-logo">
				<div class="moh-icon"><img src="moh" height="100px" width="130px"/></div>
				<h2 class="moh-heading">MOH</h2>
			</div>
			<div class="bp-header__main">
				<!--span class="bp-header__present">Blueprint <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span-->
				<h1 class="bp-header__title">Kisumu County Government Repository</h1>
					<h2 class="bp-header__">Department of Health</h2>
				<nav class="bp-nav">
					<!--a class="bp-nav__item bp-icon bp-icon--prev" href="/" data-info=""><span>Previous Blueprint</span></a-->
					<!--a class="bp-nav__item bp-icon bp-icon--next" href="" data-info="next Blueprint"><span>Next Blueprint</span></a-->
					<a class="bp-nav__item bp-icon bp-icon--next" onclick=javascript:fd(); href="" data-info="Login to the Repo"><span>Login to the Repository</span></a>
					<!--a class="bp-nav__item bp-icon bp-icon--archive" href="http://tympanus.net/codrops/category/blueprints/" data-info="Blueprints archive"><span>Go to the archive</span></a-->
				</nav>
			</div>
			
			<script>function fd(){window.alert("Oops!,You dont have an active session");}</script>
			
			
		</header>
		<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
					
				<?php
				$queryMainMenu = "select * from departments";
				
				
					
$query = mysqli_query($conn, $queryMainMenu);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

//loop through the fetched data and list them on the layout tables;
while ($row = mysqli_fetch_array($query))
		{
		
				?>
					
					
					<li class="menu__item"  role="menuitem"><a class="menu__link" data-submenu="submenu-1"  aria-owns="submenu-1"  contextmenu="Teizer" id="<?php echo $row['id']; ?>" href="#" ><?php  echo $row['name'];?></a></li>
					
					
				<?php
		  }
		
		?>
				
			<!-- This is the submenu that provides alternatives one the documents have been reached-->		
					
				</ul>
				<!-- Submenu 1 -->
				<ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu" aria-label="Docs">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="55">All Documents</a></li>
					<li class="menu__item"  role="menuitem"><a  class="menu__link" href="56">Archived Documents</a></li>
				
				</ul>
	
			
				
			</div>
		</nav>
		
	
		
		
		<div class="content">
			
			<p class="info">Please select a Department to preview info &amp; Documents</p>
			
			<!-- Ajax loaded content here -->
			
	
			
			
	</div>
		
		
		
		
	</div>
	<!-- /view   Keep this in mind that it has to be replaced by Bootstrap CDN for easy upgrade,-->
	<script src="js/classie.js"></script>
	<script src="js/dummydata.js"></script>
	<script src="js/main.js"></script>
	
	<script src="js/jQuery.js"></script>
	<script>
		
		
		(function() {
			
		// this self proclaimed funcion is used as a test just to make sure jquery  is loaded. TEST PURPOSES ONLY!
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
            //var tookTime = endingTime - startingTime;
            //window.alert("jQuery is loaded, after " + tookTime + " milliseconds!");
        });
    });
})();
		
		
	(function() {
		

		
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDocData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
			closeMenuCtrl.focus();
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
			openMenuCtrl.focus();
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		//var desc = document.querySelector('.in');
		function loadDocData(ev, departmentId) {
			ev.preventDefault();

			//window.alert("Here is the received parameter!" + departmentId);
			
			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				
				
				var description;
				var profilePhoto;
				var headName;
				var Name;
				
				 $.ajax({                                      
  url: 'test.php', type: "POST", data: ({identity:departmentId}), dataType: 'json', success: function(list)        
  {

//first load the documents for the particular selected department



				 $.ajax({                                      
  url: 'department_info.php', type: "POST", data: ({specific:departmentId}), dataType: 'json', success: function(data)        
  {

	// then proceed to fetch the infor for the particulart department.
		 
		for (var i in data)
    {
      var row = data[i];
      
     // console.log(row);
			//iterate through the receiced info and dont refresh as far as the department is selected.
     Name = row[1];
		 
		 profilePhoto = row[3];
		 
		 description = row[2];
		 
		 headName = row[4];
		 
		 
		 	classie.remove(gridWrapper, 'content--loading');
		
			//this wrapper puts in place the info for particlar department.
			gridWrapper.innerHTML = '<div class = "inner" ><div class = "description" ><h3> '+ Name+' Directory </h3><p class="desc_text"> '+description+'</p></div><div class ="figu"><figure> <img class = "profile"  src = "'+profilePhoto+'" > <figcaption class = "uname"><b>'+headName+'</b></figcaption></figure></div> </div> <ul class="products">'  + callMe(list) + '<ul>';
				
		 
		}

   
	}
	});   
				
	
  
  } 
});
				
				
			
				//console.log(loadData());
			},
			
			700);
		}
		
		
		function callMe(dat){
		 var vname;
		 
		 var things = [];
		 
		 var icon;
		 
		 var finalIcon;
		 
		 var link;
		 
		 var sizeFile;
		 
		 var bytex = "bytes";
		 
		 var kb = " Kb";
		 
		 var Mb = " Mb";
		 
		 var Gb = " Gb";
		 
		 
	
		 
		for (var i in dat)
    {
      var row = dat[i];
      
      //console.log(row);
			
     vname = row[2];
		 
		 icon = row[5];
		 
		 link = row[1];
		 
		 sizeFile = row[4];
		 
		 
		 //this is a simple check to present doc sizes in human readeable format instead of junk of bytes
		 if(sizeFile<1024){
    sizeFile =sizeFile+bytex;    
      }else if
      
    ((sizeFile>=1024)&&(sizeFile<1048576)){
       sizeFile = Math.round((sizeFile)/1024) +kb;
    }else if
    ((sizeFile >= 1048576)&&(sizeFile<1073741824)){
      
      sizeFile =  Math.round((sizeFile)/1048576)+Mb;
    }else if(sizeFile >=1073741824){
      sizeFile = "Large File";
    }
		
		//This one check for specific format of file, and asigns the particular icon.
		if(icon=="docx"){
			finalIcon = "word";
		}else
		if(icon =="pdf"){
			finalIcon = "pdf";
		}else{
			finalIcon = "file";
		}
		
		 
		 things.push("<li class=\"product\"><a href=\"uploads/"+link+"\"> <p class=\"names\"><img class = \"myimage\" height=\"180\"; width =\"175\"  src = "+finalIcon+"> "+vname+" . "+sizeFile+"</p></a></li>");
      
		
		}
		
		 //console.log(things);
		 
		 if(things ==[]){
			//things.push();
			return "<li class=\"product\"> <p><img class = \"myimage\" height=\"180\"; width =\"175\"  src = \"word\">Sorry,No files here yet</p></li>";
		 }else{
		 
		return things ;
		 }
		
		}
		}
		
		

		
	
	)();
	</script>
</body>

</html>
