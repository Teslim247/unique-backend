<?php
session_start();
include_once("header.php");
try{$vendor_id=$_SESSION['vendor_session'];}
catch(PDOException $e){
			echo $e->getMessage();
		}
?>
                <div class="content">
                    <div id="project-dashboard" class="page-layout simple right-sidebar tabbed">

                        <div class="page-content-wrapper">

                            <!-- HEADER -->
                            <div
                                class="page-header bg-primary text-auto d-flex flex-column justify-content-between px-6 pt-4 pb-0">

                                <div class="row no-gutters align-items-start justify-content-between flex-nowrap">

                                    <div>
                                        <span class="h2">Welcome back, 	<?php 
			// get vendor name
			try{
				
				$vendor_id=$_SESSION['vendor_session'];
				
			$stmt = $db_con->prepare("SELECT * FROM vendor WHERE vendor_id=:vendor_id");
			$stmt->execute(array(":vendor_id"=>$vendor_id));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			echo $row['vendor_name'];
		//$ty= $row['profilepix'];
			}
			
			catch(PDOException $e){
			echo $e->getMessage();
		}
	
			
			?></span>
                                    </div>

                                    <button type="button" class="sidebar-toggle-button btn btn-icon d-block d-xl-none"
                                            data-fuse-bar-toggle="dashboard-project-sidebar"
                                            aria-label="Toggle sidebar">
                                        <i class="icon icon-menu"></i>
                                    </button>
                                </div>

                                <div class="row no-gutters align-items-center project-selection">

                                    <div class="selected-project h6 px-4 py-2">ACME Corp. Backend App</div>

                                    <div class="project-selector">
                                        <button type="button" class="btn btn-icon">
                                            <i class="icon icon-dots-horizontal"></i>
                                        </button>
                                    </div>

                                </div>

                            </div>
                            <!-- / HEADER -->

                            <!-- CONTENT -->
                            <div class="page-content">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link btn active" id="home-tab" data-toggle="tab"
                                           href="#home-tab-pane" role="tab"
                                           aria-controls="home-tab-pane" aria-expanded="true">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link btn" id="budget-summary-tab" data-toggle="tab"
                                           href="#budget-summary-tab-pane"
                                           role="tab" aria-controls="budget-summary-tab-pane">Budget Summary</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link btn" id="team-members-tab" data-toggle="tab"
                                           href="#team-members-tab-pane"
                                           role="tab" aria-controls="team-members-tab-pane">Team Members</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                         aria-labelledby="home-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row">

                                            <!-- WIDGET 1 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget1 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">

                                                            <select class="h6 custom-select">
                                                                <option selected="" value="today">Today</option>
                                                                <option value="yesterday">Yesterday</option>
                                                                <option value="tomorrow">Tomorrow</option>
                                                            </select>

                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div
                                                        class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">

                                                        <div class="title text-primary">25</div>

                                                        <div class="sub-title h6 text-muted">DUE TASKS</div>

                                                    </div>

                                                    <div
                                                        class="widget-footer p-4 bg-faded row no-gutters align-items-center">

                                                        <span class="text-muted">Completed:</span>

                                                        <span class="ml-2">7</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 1 -->

                                            <!-- WIDGET 2 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget2 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Overdue</span>
                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>
                                                    </div>

                                                    <div
                                                        class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-danger">4</div>
                                                        <div class="sub-title h6 text-muted">TASKS</div>
                                                    </div>

                                                    <div
                                                        class="widget-footer p-4 bg-faded row no-gutters align-items-center">
                                                        <span class="text-muted">Yesterday's:</span>
                                                        <span class="ml-2">2</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 2 -->

                                            <!-- WIDGET 3 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget3 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Issues</span>
                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div
                                                        class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-warning">32</div>
                                                        <div class="sub-title h6 text-muted">OPEN</div>
                                                    </div>

                                                    <div
                                                        class="widget-footer p-4 bg-faded row no-gutters align-items-center">
                                                        <span class="text-muted">Closed today:</span>
                                                        <span class="ml-2">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 3 -->
											
											
											

                                            <!-- WIDGET 4 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget4 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Features</span>
                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div
                                                        class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-info">42</div>
                                                        <div class="sub-title h6 text-muted">PROPOSALS</div>
                                                    </div>

                                                    <div
                                                        class="widget-footer p-4 bg-faded row no-gutters align-items-center">
                                                        <span class="text-muted">Implemented:</span>
                                                        <span class="ml-2">8</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 4 -->
											
											
											
											                      <!-- WIDGET 6 -->
                                            <div class="col-12 col-lg-6 p-3">

                                                <div class="widget widget6 card">

                                                    <div
                                                        class="widget-header px-4 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Task Distrubition</span>
                                                        </div>

                                                        <div class="">
                                                            <select id="widget6-option-select" class="h6 custom-select">
                                                                <option selected="" value="TW">This Week</option>
                                                                <option value="LW">Last Week</option>
                                                                <option value="2W">2 Weeks Ago</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="widget-content">

                                                        <div class="row no-gutters">

                                                            <div class="col-12">

                                                                <div id="widget6-main-chart" class="p-4">
                                                                    <svg></svg>
                                                                </div>

                                                            </div>

                                                            <div class="divider col-12"></div>

                                                            <div id="added-tasks"
                                                                 class="col-6 d-flex flex-column align-items-center justify-content-center py-4">

                                                                <div class="count h2">594</div>

                                                                <div class="count-title">Tasks Added</div>

                                                            </div>

                                                            <div id="completed-tasks"
                                                                 class="col-6 d-flex flex-column align-items-center justify-content-center py-4">

                                                                <div class="count h2">287</div>

                                                                <div class="count-title">Tasks Completed</div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 6 -->

                                            <!-- WIDGET 7 -->
                                            <div class="col-12 col-lg-6 p-3">

                                                <div class="widget widget-7 card">

                                                    <div
                                                        class="widget-header px-4 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Quotes request</span>
                                                        </div>

                                                        <div class="">
                                                            <select class="h6 custom-select">
                                                                <option selected="" value="today">Today</option>
                                                                <option value="yesterday">Yesterday</option>
                                                                <option value="tomorrow">Tomorrow</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="widget-content p-4">
<?php
													
																try{
					//$vendor = $_GET['vendor'];
				//$vendor_id=urldecode($vendor);
				  
		 // $vendor_id= pack("H*",bin2hex($vendor));
				$vendor_prod=$vendor_id;
			$stmtps = $db_con->prepare("SELECT * FROM quote WHERE vendor=:vendor_prod LIMIT 6");
			$stmtps->execute(array(":vendor_prod"=>$vendor_prod));
									function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}

			while ($rowps = $stmtps->fetch(PDO::FETCH_ASSOC)){
													
							
													
													echo'
                                                        <div
                                                            class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Quote requested</div>

                                                                <div>
                                                                    <span class="text-muted">';
						$afo=$rowps['date'];
														echo get_time_ago( strtotime("$afo")  );	

														/* $mydate='07/11/2017 23:40';echo time_ago($mydate);*/	echo'</span>

                                                                    <span>, from '; echo $rowps['uname']; echo'</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>';
																}}
														catch(PDOException $e){
			echo $e->getMessage();
		}
				
										?>
                                                   <!--     <div
                                                            class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Coffee Break</div>

                                                                <div>
                                                                    <span class="text-muted">10:30 AM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        

                                                        <div
                                                            class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Lunch</div>

                                                                <div>
                                                                    <span class="text-muted">12:10 PM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Dinner with David</div>

                                                                <div>
                                                                    <span class="text-muted">17:30 PM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Jane's Birthday Party</div>

                                                                <div>
                                                                    <span class="text-muted">19:30 PM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Overseer's Retirement Party</div>

                                                                <div>
                                                                    <span class="text-muted">21:30 PM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div> -->

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 7 -->

                                            <!-- WIDGET 5 -->
                                            <div class="col-12 p-3">

                                                <div class="widget widget5 card">

                                                    <div
                                                        class="widget-header px-4 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
														<?php

														?>
                                                            <span class="h6">Github Issues </span>
                                                        </div>

                                                        <div>

                                                            <button type="button"
                                                                    class="widget5-option-change-btn btn btn-link"
                                                                    data-interval="TW">
                                                                This Week
                                                            </button>

                                                            <button type="button"
                                                                    class="widget5-option-change-btn btn btn-link"
                                                                    data-interval="LW">
                                                                Last Week
                                                            </button>

                                                            <button type="button"
                                                                    class="widget5-option-change-btn btn btn-link"
                                                                    data-interval="2W">
                                                                2 WEEKS AGO
                                                            </button>

                                                        </div>
                                                    </div>

                                                    <div class="widget-content p-4">

                                                        <div class="row">

                                                            <div class="col-12 col-lg-6">

                                                                <div id="widget5-main-chart">
                                                                    <svg></svg>
                                                                </div>

                                                            </div>

                                                            <div class="col-12 col-lg-6">

                                                                <div id="widget5-supporting-charts" class="row">

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-created-chart">
                                                                            <div class="h6 text-muted">CREATED</div>
                                                                            <div class="h2 count">48</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-closed-chart">
                                                                            <div class="h6 text-muted">CLOSED</div>
                                                                            <div class="h2 count">26</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-re-opened-chart">
                                                                            <div class="h6 text-muted">RE-OPENED</div>
                                                                            <div class="h2 count">2</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-wont-fix-chart">
                                                                            <div class="h6 text-muted">WON'T FIX</div>
                                                                            <div class="h2 count">4</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-needs-test-chart">
                                                                            <div class="h6 text-muted">NEED'S TEST</div>
                                                                            <div class="h2 count">8</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-fixed-chart">
                                                                            <div class="h6 text-muted">FIXED</div>
                                                                            <div class="h2 count">14</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 5 -->

                      
                                        </div>
                                        <!-- / WIDGET GROUP -->
                                    </div>
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
                                    <div class="tab-pane fade" id="budget-summary-tab-pane" role="tabpanel"
                                         aria-labelledby="budget-summary-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row">

                                            <!-- WIDGET 8 -->
                                            <div class="col-12 col-lg-6 p-3">

                                                <div class="widget widget8 card">

                                                    <div
                                                        class="widget-header px-4 row no-gutters align-items-center justify-content-between">
                                                        <div class="col">
                                                            <span class="h6">Budget Distribution</span>
                                                        </div>
                                                    </div>

                                                    <div class="widget-content row">

                                                        <div class="col-12">

                                                            <div id="widget8-main-chart" class="p-4">
                                                                <svg></svg>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 8 -->

                                            <!-- WIDGET 9 -->
                                            <div class="col-12 col-lg-6 p-3">

                                                <div class="widget widget9 card">

                                                    <div
                                                        class="widget-header px-4 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Spent</span>
                                                        </div>

                                                        <div class="">
                                                            <select id="widget9-option-select" class="h6 custom-select">
                                                                <option selected="" value="TW">This Week</option>
                                                                <option value="LW">Last Week</option>
                                                                <option value="2W">2 Weeks Ago</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="widget-content">

                                                        <div id="widget9-weeklySpent"
                                                             class="budget-item p-4 row no-gutters align-items-center">

                                                            <div class="col-12 col-sm-auto p-2">

                                                                <div class="item-title text-muted">WEEKLY SPENT</div>

                                                                <div class="pt-2 h2">
                                                                    <span class="text-muted">$</span>
                                                                    <span class="item-value">3,630.15</span>
                                                                </div>

                                                            </div>

                                                            <div class="chart-wrapper col-12 col-sm">
                                                                <svg></svg>
                                                            </div>
                                                        </div>

                                                        <div id="widget9-totalSpent"
                                                             class="budget-item p-4 row no-gutters align-items-center">

                                                            <div class="col-12 col-sm-auto p-2">

                                                                <div class="item-title text-muted">TOTAL SPENT</div>

                                                                <div class="pt-2 h2">
                                                                    <span class="text-muted">$</span>
                                                                    <span class="item-value">34,758.34</span>
                                                                </div>
                                                            </div>

                                                            <div class="chart-wrapper col-12 col-sm">
                                                                <svg></svg>
                                                            </div>
                                                        </div>

                                                        <div id="widget9-remaining"
                                                             class="budget-item p-4 row no-gutters align-items-center">

                                                            <div class="col-12 col-sm-auto p-2">

                                                                <div class="item-title text-muted">REMAINING</div>

                                                                <div class="pt-2 h2">
                                                                    <span class="text-muted">$</span>
                                                                    <span class="item-value">89.241,66</span>
                                                                </div>

                                                            </div>

                                                            <div class="chart-wrapper col-12 col-sm">
                                                                <svg></svg>
                                                            </div>

                                                        </div>

                                                        <div class="divider w-100 my-2"></div>

                                                        <div id="widget9-total-budget" class="p-4">

                                                            <div class="item-title text-muted">TOTAL BUDGET</div>

                                                            <div class="pt-2 h2">
                                                                <span class="text-muted">$</span>
                                                                <span class="item-value">124.000,00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 9 -->

                                            <!-- WIDGET 10 -->
                                            <div class="col-12 p-3">

                                                <div class="widget widget10 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h5">Budget Details</span>
                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div class="widget-content p-4">

                                                        <table class="table table-responsive">

                                                            <thead>
                                                                <tr>

                                                                    <th>
                                                                        Budget Type
                                                                    </th>

                                                                    <th>
                                                                        Total Budget
                                                                    </th>

                                                                    <th>
                                                                        Spent ($)
                                                                    </th>

                                                                    <th>
                                                                        Spent (%)
                                                                    </th>

                                                                    <th>
                                                                        Remaining ($)
                                                                    </th>

                                                                    <th>
                                                                        Remaining (%)
                                                                    </th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td>
                                            <span class="badge badge-primary">
                                                Wireframing
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-bold">
                                                $14,880.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $14,000.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-success">
                                                %94.08
                                            </span>

                                                                        <i class="icon icon-trending-up text-success s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $880.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                %5.92
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>
                                            <span class="badge badge-success">
                                                Design
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-bold">
                                                $21,080.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $17,240.34
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-success">
                                                %81.78
                                            </span>

                                                                        <i class="icon icon-trending-up text-success s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $3,839.66
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                %18.22
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>
                                            <span class="badge badge-warning">
                                                Coding
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-bold">
                                                $34,720.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $3,518.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-danger">
                                                %10.13
                                            </span>

                                                                        <i class="icon icon-trending-down text-danger s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $31,202.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                %89.87
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>
                                            <span class="badge badge-info">
                                                Marketing
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-bold">
                                                $34,720.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $0.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-info">
                                                %0.00
                                            </span>

                                                                        <i class="icon icon-minus text-info s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $34,720.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                %100.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>
                                            <span class="badge badge-danger">
                                                Extra
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-bold">
                                                $18,600.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $0.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="text-info">
                                                %0.00
                                            </span>

                                                                        <i class="icon icon-minus text-info s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                $34,720.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                    <td>
                                            <span class="">
                                                %100.00
                                            </span>

                                                                        <i class="icon  s-4"></i>

                                                                    </td>

                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 10 -->
                                        </div>
                                        <!-- / WIDGET GROUP -->
                                    </div>
                                    <div class="tab-pane fade" id="team-members-tab-pane" role="tabpanel"
                                         aria-labelledby="team-members-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row">

                                            <!-- WIDGET 1 -->
                                            <div class="col-12">

                                                <div class="card">

                                                    <div
                                                        class="widget-header px-4 py-6 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h5">Team Members</span>
                                                        </div>

                                                        <div>
                                                            <span class="badge badge-danger">20 members</span>
                                                        </div>

                                                    </div>

                                                    <div class="divider"></div>

                                                    <div class="widget-content">

                                                        <table class="table table-responsive">

                                                            <thead>
                                                                <tr>

                                                                    <th>

                                                                    </th>

                                                                    <th>
                                                                        Name
                                                                    </th>

                                                                    <th>
                                                                        Position
                                                                    </th>

                                                                    <th>
                                                                        Office
                                                                    </th>

                                                                    <th>
                                                                        E-Mail
                                                                    </th>

                                                                    <th>
                                                                        Phone
                                                                    </th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/james.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Jack Gilbert</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Design Manager</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Johor Bahru</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>jgilbert48@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+16 298 032 7774</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/katherine.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Kathy Anderson</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Recruiting Manager</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Solţānābād</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>kanderson49@mail.com.br</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+23 572 311 1136</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/andrew.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Mark Turner</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Recruiting Manager</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Neftegorsk</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>mturner4a@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+01 139 803 9263</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/jane.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Kathryn Martinez</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Director of Sales</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Palekastro</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>kmartinez4b@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+25 467 022 5393</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/alice.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Annie Gonzales</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Actuary</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Candon</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>agonzales4c@mail.edu</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+99 891 619 7138</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/vincent.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Howard King</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Human Resources</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Bergen op Zoom</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>hking4d@mail.gov</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+46 984 348 1409</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/joyce.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Elizabeth Dixon</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Electrical Engineer</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Písečná</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>edixon4e@mail.gov</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+33 332 067 9063</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/danielle.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Dorothy Morris</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Office Assistant</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Magsaysay</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>dmorris4f@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+05 490 958 6120</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/carl.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Mark Gonzales</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Quality Control</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Matsue-shi</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>mgonzales4g@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+03 168 394 9935</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/profile.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Catherine Rogers</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Programmer Analyst</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Kangar</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>crogers4h@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+86 235 407 5373</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/garry.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Ruth Grant</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Community Outreach</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Beaune</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>rgrant4i@mail.pl</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+36 288 083 8460</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/james.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Phyllis Gutierrez</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Administrative Assistant</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Shlissel’burg</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>pgutierrez4j@mail.net</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+52 749 861 9304</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/alice.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Lillian Morris</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Media Planner</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Berlin</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>lmorris4k@mail.de</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+59 695 110 3856</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/vincent.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Jeremy Anderson</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Systems Engineer</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Lũng Hồ</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>janderson4l@mail.uk</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+40 384 115 1448</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/carl.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Arthur Lawrence</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Nurse Practicioner</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Sarkanjut</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>alawrence4m@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+36 631 599 7867</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/andrew.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>David Simmons</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Social Worker</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Ushumun</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>dsimmons4n@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+01 189 681 4417</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/danielle.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Daniel Johnston</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Help Desk</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>São Carlos</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>djohnston4o@mail.gov</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+60 028 943 7919</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/joyce.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Ann King</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Internal Auditor</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Liren</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>aking4p@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+91 103 932 6545</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/james.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Phillip Franklin</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>VP Accounting</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Soba</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>pfranklin4q@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+25 820 986 7626</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar"
                                                                             src="../assets/images/avatars/garry.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Gary Gonzalez</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Speech Pathologist</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Gangkou</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>ggonzalez4r@mail.cc</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>+10 862 046 7916</span>

                                                                    </td>

                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- WIDGET 1 -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- / CONTENT -->

                        </div>
<script>
var d = new Date(<?php echo time() * 1000 ?>);

function updateClock() {
  // Increment the date
  d.setTime(d.getTime() + 1000);

  // Translate time to pieces
  var currentHours = d.getHours();
  var currentMinutes = d.getMinutes();
  var currentSeconds = d.getSeconds();

  // Add the beginning zero to minutes and seconds if needed
  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

  // Determine the meridian
  var meridian = (currentHours < 12) ? "am" : "pm";

  // Convert the hours out of 24-hour time
  currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
  currentHours = (currentHours == 0) ? 12 : currentHours;

  // Generate the display string
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + meridian;

  // Update the time
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

window.onload = function() {
  updateClock();
  setInterval('updateClock()', 1000);
}
</script>
                        <aside class="page-sidebar" data-fuse-bar="dashboard-project-sidebar"
                               data-fuse-bar-media-step="lg"
                               data-fuse-bar-position="right">
                            <!-- WIDGET GROUP -->
                            <div class="widget-group">

                                <!-- NOW WIDGET -->
                                <div class="widget widget-now">

                                    <div
                                        class="widget-header row no-gutters align-items-center justify-content-between pl-4 py-4">

                                        <div class="h6" ><?php echo date("l")  ?>,</div><div id="clock" class="h6">&nbsp;</div>

                                        <button type="button" class="btn btn-icon" aria-label="Options">
                                            <i class="icon icon-dots-vertical"></i>
                                        </button>
                                    </div>

                                    <div
                                        class="widget-content d-flex flex-column align-items-center justify-content-center p-4 pb-6">
                                        <div class="month text-muted"><?php echo date("F")  ?></div>
                                        <div class="day text-muted"><?php echo date("d")  ?></div>
                                        <div class="year text-muted"><?php echo date("Y") ?></div>
                                    </div>

                                </div>
                                <!-- / NOW WIDGET -->

                                <div class="divider"></div>

                                <!-- WEATHER WIDGET -->
                                <div class="widget widget-weather">

                                    <div
                                        class="widget- header row no-gutters align-items-center justify-content-between pl-4 py-4">

                                        <div class="row no-gutters align-items-center">
                                            <i class="icon-map-marker mr-2"></i>
                                            <span class="h6">Abuja</span>
                                        </div>

                                        <button type="button" class="btn btn-icon" aria-label="Options">
                                            <i class="icon icon-dots-vertical"></i>
                                        </button>

                                    </div>

                                    <div class="d-flex flex-column align-items-center justify-content-center p-4 pb-8">

                                        <div
                                            class="today-weather row no-gutters align-items-center justify-content-center">
                                            <i class="icon-weather-pouring s-10 mr-4"></i>
                                            <span class="h1">22</span>
                                            <span class="h1 text-muted">&deg;</span>
                                            <span class="h1 text-muted">C</span>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-center justify-content-between p-4">

                                        <div class="row no-gutters align-items-center">
                                            <i class="icon-weather-windy icon mr-2 s-5"></i>
                                            <span>12</span>
                                            <span class="text-muted ml-1">KMH</span>
                                        </div>

                                        <div class="row align-items-center">
                                            <i class="icon-compass-outline icon mr-2 s-5"></i>
                                            <span>NW</span>
                                        </div>

                                        <div class="row no-gutters align-items-center">
                                            <i class="icon-umbrella icon mr-2 s-5"></i>
                                            <span>98%</span>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-center justify-content-between p-4">

                                        <span class="">Sunday</span>

                                        <div class="row no-gutters align-items-center">
                                            <i class="mr-4 icon-weather-pouring"></i>
                                            <span class="h5">21</span>
                                            <span class="h5 text-muted">&deg;</span>
                                            <span class="h5 text-muted">C</span>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-center justify-content-between p-4">

                                        <span class="">Sunday</span>

                                        <div class="row no-gutters align-items-center">
                                            <i class="mr-4 icon-weather-pouring"></i>
                                            <span class="h5">19</span>
                                            <span class="h5 text-muted">&deg;</span>
                                            <span class="h5 text-muted">C</span>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-center justify-content-between p-4">

                                        <span class="">Tuesday</span>

                                        <div class="row no-gutters align-items-center">
                                            <i class="mr-4 icon-weather-partlycloudy"></i>
                                            <span class="h5">24</span>
                                            <span class="h5 text-muted">&deg;</span>
                                            <span class="h5 text-muted">C</span>
                                        </div>

                                    </div>
                                </div>
                                <!-- / WEATHER WIDGET -->

                                <div class="divider"></div>
                            </div>
                            <!-- / WIDGET GROUP -->
                        </aside>
                    </div>

                    <script type="text/javascript" src="../assets/js/apps/dashboard/project.js"></script>
                </div>

            </div>

            <div class="quick-panel-sidebar" fuse-cloak data-fuse-bar="quick-panel-sidebar"
                 data-fuse-bar-position="right">
                <div class="list-group" class="date">

                    <div class="list-group-item subheader">TODAY</div>

                    <div class="list-group-item two-line">

                        <div class="text-muted">

                            <div class="h1"> Monday</div>

                            <div class="h2 row no-gutters align-items-start">
                                <span> 12</span>
                                <span class="h6">th</span>
                                <span> Jun</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Events</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Group Meeting</h3>

                            <p>In 32 Minutes, Room 1B</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Public Beta Release</h3>

                            <p>11:00 PM</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Dinner with David</h3>

                            <p>17:30 PM</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Q&A Session</h3>

                            <p>20:30 PM</p>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Notes</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Best songs to listen while working</h3>

                            <p>Last edit: May 8th, 2015</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Useful subreddits</h3>

                            <p>Last edit: January 12th, 2015</p>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Quick Settings</div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Notifications</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Cloud Sync</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Retro Thrusters</h3>
                        </div>

                        <div class="secondary-container">

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>

<!-- Mirrored from fuse-bootstrap4-material.withinpixels.com/vertical-layout-below-toolbar-left-navigation/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 09:20:54 GMT -->
</html>