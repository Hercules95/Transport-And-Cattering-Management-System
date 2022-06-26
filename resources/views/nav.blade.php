 <div class="sidebar">
                            
									 <div class="widget stay-on-collapse" id="widget-sidebar">
    								  <?php if(session('username') == "admin"):?>
										@include('managernav')
										<?php else:?>
										@include('farmnav')
									
										<?php endif?>
 							   </div>
</div>