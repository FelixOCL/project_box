<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Project Box</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="./js/jquery-2.1.4.min.js"></script>		
		<script>
		var test = "hello world";		
		
		$(document).ready(function() 
		{
//THIS SUB FUNCTION IS FOR SHOWING THE DIALOGUE TO ADD A PROJECT BOX
			$('nav img').click(function () 
			{

				var titre = $(this).attr('title');
				
				if(titre === "Add a Project")
				{
					showDialogue();
				}
				else 
				{
					alert(titre);
				}
				
			});
		
		
//THIS SUBFUNCTION IS ACTUALLY FOR SAVING THE DATA, BUT SOMETHING GOES WRONG AS I ALWAYS RECEIVE BACK Error with statu 500.
//But i can't figure out what it is.
			$('#addProject').click(function (event) 
			{
				event.preventDefault();
				var dataProject = $('form[name="frmAddProject"]').serialize();

//				$('form[name="frmAddProject"]').preventDefault();
				$.ajax({
			   	url: "./php/add_box.php",
			   	data: dataProject,
			   	dataType: "html",
			   	type: "GET",
			      success: function(data) 
			      {
			         if(data == 1)
			         {
							alert("réusssi");
			         }
			      },
			      error: function(jqxhr, errorThrown) 
			      {
		         
			         $('#error').text("ERROR : " + jqxhr.status + " " + errorThrown);
			         $('#error').toggle();
						//$('#error').animate({width: 'toggle'}).delay(5000).hide(1);
			      }
			   })
//alert("WORKED THROUGH!");
				
		return false;
			});		
		});
		
		function showDialogue()
		{
			$('#hidden_bg').toggle();
			$('#input_dialogue').toggle();
		}
		</script>
	</head>
	<body>
		<header>
			Welcome to my Project Box
		</header>
		<nav>
			<img src="./img/addBox.png" title="Add a Project">
			<img src="#" title="remove">
		</nav>

<!--
	inivisible background
-->
	<div id="hidden_bg" class="hide">
		
	</div>
<!--
	End of Inivisible background
-->


<!--
	input the name of a box
-->

	
	<div id="input_dialogue" class="hide">
		<h3>Add project Box</h3>
		<hgroup>
			<form name="frmAddProject">
			<label>Title</label>
			<input id="txtBox" name="txtBox">

		</hgroup>
		<hgroup>

			<label>Description</label>
			<input id="txtDetail" name="txtDetail">

		</hgroup>
				<button id="addProject">
					Add
				</button>
			</form>
	</div>


<!--
	end of name input box
-->


		<div id="error" class="hide"></div>
		<div class="footerholder">
			<footer>
				Drag and Drop Pages to add to Current Project Box
			</footer>
		</div>
	</body>
</html>