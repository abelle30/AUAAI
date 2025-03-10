
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		background-color: #ffffff;
	}
	.nav-avatar {
	width: 34px;
	height: 34px;
	margin: -7px 5px 0 0;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
nav#sidebar {
    height: calc(100%);
    position: fixed;
  top:-10px;
    left: 0;
    width: 250px;
    background-color: #ffff;
    z-index: 9990;
}
.bg-dark {
    background-color: #fff;
}

a.nav-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    border: 1px solid rgba(0,0,0,.125);
    background-color: #ffffff;
    color: #000;
    font-weight: 600;
}
a.navlogo-item {
  position: relative;
  display: block;
  padding: .75rem 1.25rem;
  margin-bottom: -1px;
  border: 1px solid rgba(0,0,0,.125);
  background-color: #023e72;
  color: #fff;
  font-weight: 600;
}
a.nav-item:hover, .nav-item.active {
    background-color: #000000ad;
    color: #fffafa;
}

</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
			<a href="admindashboard" class="navlogo-item "><center> <img src="resources/images/adulogoadmin.png" class="nav-avatar" /></i></span> Dashboard</a></center> 
			
				
				<a href="admindashboard" class="nav-item nav-gallery"><span class='icon-field'> <img src="resources/images/user1.png " class="nav-avatar" /></i></span>   <?php echo "Hello!"  ?> <br></a>
				<a href="admindashboard" class="nav-item nav-gallery"><span class='icon-field'><i class="fa fa-home"></i></span> Dashboard</a>
				<a href="alumnicolleges" class="nav-item nav-gallery"><span class='icon-field'><i class="fa fa-user-cog"></i></span> Manage Alumni </a>
				<a href="managenews" class="nav-item nav-alumni"><span class='icon-field'><i class="fa fa-newspaper"></i></span> Manage News</a>
				<a href="manageannouncement" class="nav-item nav-alumni"><span class='icon-field'><i class="fa fa-newspaper"></i></span> Manage Announcement</a>
				<a href="manageprograms" class="nav-item nav-jobs"><span class='icon-field'><i class="fa fa-calendar"></i></span> Manage Programs</a>
				<a href="manageevents" class="nav-item nav-jobs"><span class='icon-field'><i class="fa fa-calendar"></i></span> Manage Events</a>
				<a href="userloginlog" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-cogs"></i></span> User Login Log</a>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				
		
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
