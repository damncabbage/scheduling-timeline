<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editing - This Ain't A Website</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/screen.css">
	<link rel="stylesheet" href="css/controls.css">
</head>
<body>

	<div id="cms-toolbox">
		<div class="contents">
			<div class="scheduling">

				<ul class="date-selection">
					<li class="button prev"><a href="#">&laquo;</a></li>
					<li class="zoom-control time"><a href="#">9:00am</a></li>
					<li class="zoom-control day"><a href="#">26th</a></li>
					<li class="zoom-control month selected"><a href="#">July</a></li>
					<li class="zoom-control year selected"><a href="#">2011</a></li>
					<li class="button next"><a href="#">&raquo;</a></li>
				</ul>

				<div class="timeline-container">
					<div class="rail zoom-month">
						<a class="snapshot now" href="#" style="left: 90px;">2010-08-10 10:00am</a>
						<a class="snapshot future" href="#" style="left: 150px">2010-08-12 10:00am</a>
						<?php 
							for ($ii = 1; $ii <= 30; $ii++ ) {
								$sLast = ($ii == 30 ? 'last' : '');
								/*? >
								<div class="period <?php echo $sLast; ?>"><span class="title"><?php echo $ii; ?></span></div>
								< ?php*/
							}
						?>
						<div class="control"></div>
					</div>
				</div>

			</div>
		</div>
		<ul class="tabs">
			<li class="scheduling"><a href="#scheduling">Scheduling</a></li>
		</ul>
	</div>


	<div class="container">
		
		<div class="heading">
			<div class="cms-module-placement" id="cms-module-placement-heading">
				<div class="edit-control">Heading</div>
				<h1>This Ain't a Website</h1>
				<h2>It's a Goddamn Mock-Up</h2>
			</div>
		</div>

		<div class="body">
			<div class="cms-module-placement" id="cms-module-placement-body">
				<div class="edit-control">Body</div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
				ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
				laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
				voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
				non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
				totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
				vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
				aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
				Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
				sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
				voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
				laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
				qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum
				fugiat quo voluptas nulla pariatur?</p>

				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
				deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
				non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum
				et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
				cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat
				facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
				
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet
				ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur
				a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
				doloribus asperiores repellat.</p>

				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
				totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
				vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
				aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
				Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
				sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
				voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
				laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
				qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum
				fugiat quo voluptas nulla pariatur?</p>
			</div>
		</div>

		<div class="sidebar">
			<div class="cms-module-placement" id="cms-module-placement-sidebar">
				<div class="edit-control">Sidebar</div>

				<h3>It's All Happening</h3>
				<p>Consider the following links:</p>
				<ul>
					<li><a href="http://robhoward.id.au">RobHoward.id.au</a></li>
					<li><a href="http://github.com/damncabbage">GitHub/damncabbage</a></li>
					<li><a href="http://twitter/damncabbage">@damncabbage</a></li>
					<li><a href="http://zombo.com">Zombo Com</a></li>
				</ul>

				<p>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
				voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
				anim id est laborum.</p>
			</div>
		</div>

	</div>

	<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="js/dragdealer.js"></script>
	<script type="text/javascript" src="js/controls.js"></script>
</body>
</html>
