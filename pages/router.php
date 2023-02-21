<?php 
	if(isset($_GET['page']) && $_GET['page'] != '')
	{
		if($_GET['page'] == 'templates')
		{
			include('pages/templates.php');
		}
		elseif ($_GET['page'] == 'letters') {
			include('pages/letters.php');
		}
		elseif ($_GET['page'] == 'profile') {
			include('pages/profile.php');
		}
		elseif ($_GET['page'] == 'd') {
			include('');
		}
		elseif ($_GET['page'] == 'e') {
			include('');
		}
	}
	?>