 


 <div class="sidebar">
              <div class="widget stay-on-collapse" id="widget-welcomebox">
                                <div class="widget-body welcome-box tabular">
                                   <div class="tabular-row">
                                      <div class="tabular-cell welcome-avatar">
                                         <img style="width: 98px;height: 100px;border-radius: 50%;margin-left: 27px;" src="/userimages/<?=session('image');?>">
                                         </div>
                                        
                                      </div><br>
                                       <div class="tabular-cell welcome-options">
                                        <p> <span class="welcome-text">Welcome</span>
                                         <a href="#" class="name"><?=session('username');?></a></p>
                                        </div> 
                                   </div>
                                </div>
	 <div class="widget stay-on-collapse" id="widget-sidebar">
      <nav role="navigation" class="widget-body">
	     <ul class="acc-menu">
		
		<li><a href="/Admin"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
		<li class="nav-separator">Categories</li>
		<li><a href="javascript:;"><i class="fa fa-flask"></i><span>Farm House</span></a>
			<ul class="acc-menu">
				<li><a href="/FarmHouse/Add">Add</a></li>
				<li><a href="/FarmHouse/Manage">Manage</a></li>
			</ul>
		</li>
			
		<li><a href="javascript:;"><i class="fa fa-flask"></i><span>Transport</span></a>
			<ul class="acc-menu">
				<li><a href="/Transport/Add">Add</a></li>
				<li><a href="/Transport/Details">Manage</a></li>
			</ul>
		</li>
		
		<li><a href="javascript:;"><i class="fa fa-flask"></i><span>Cattering</span></a>
			<ul class="acc-menu">
				<li><a href="/Cattering/Add">Add</a></li>
				<li><a href="/Cattering/Manage">Manage</a></li>
			</ul>
		</li>
		<li class="nav-separator">Packages</li>
		<li><a href="javascript:;"><i class="fa fa-flask"></i><span>Packages</span></a>
			<ul class="acc-menu">
				<li><a href="/FarmHouse/Packages/Add">Add</a></li>
				<li><a href="/FarmHouse/Packages/Manage">Manage</a></li>
			</ul>
		</li>
			
	
		
	</ul>
</nav>
    </div>
</div>