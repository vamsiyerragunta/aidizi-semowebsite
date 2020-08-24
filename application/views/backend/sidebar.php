<aside class="left-sidebar">
	<?php $stockout = $this->medicine_model->GetStockOutproduct();
		$sortstock = $this->medicine_model->Getshortproduct();
	?>
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<li class="nav-devider"></li>
				<?php if($this->session->userdata('user_type') =='SALESMAN'){ ?>					
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Customer </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Customer/Create">Add Customer </a></li>
								<li><a href="<?php echo base_url();?>Customer/View">Manage Customer</a></li>
								<li><a href="<?php echo base_url();?>Customer/Regular">Regular Customer</a></li>
								<li><a href="<?php echo base_url();?>Customer/Wholesale">Wholesale Customer</a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-handshake-o"></i><span class="hide-menu">Supplier </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Supplier/Create">Add Supplier </a></li>
								<li><a href="<?php echo base_url();?>Supplier/View">Manage Supplier</a></li>
								<li><a href="<?php echo base_url();?>Supplier/Balance">Supplier Balance</a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-bar-chart-o"></i><span class="hide-menu">Report </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Sales/Today_counter_report">Today's Report </a></li>
							</ul>
						</li>
						<?php } elseif($this->session->userdata('user_type') =='ADMIN' || $this->session->userdata('user_type') =='MANAGER') {?>
						<li> <a href="<?php echo base_url(); ?>dashboard/Dashboard" ><i class="fa fa-dashboard"></i><span class="hide-menu">Dashboard </span></a></li>
						<li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Gunny Bags Deamand</span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>GunnyBagsDemand/Update">Update</a></li>
								<li><a href="">Reports</a></li>
							</ul>
						</li>
						<!--li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-pencil-square-o"></i><span class="hide-menu">Indent</span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Indent/Create">Create Indent</a></li>
								<li><a href="<?php echo base_url()?>Indent/Create_dispatch">Create Dispatch</a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-handshake-o"></i><span class="hide-menu">Jute Commissioner </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Jutecommissioner/manageIndent">Manage Indent</a></li>
								<li><a href="<?php echo base_url();?>Jutecommissioner/CreateMillOrder">Create Mill Order</a></li>
								<li><a href="<?php echo base_url();?>Jutecommissioner/ManageOrder">Manage Order</a></li>
								<li><a href="<?php echo base_url();?>Jutecommissioner/AddJuteMill">Add Jute Mill </a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Jute Millers </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Customer/Create">Manage Order </a></li>
								<li><a href="<?php echo base_url();?>Customer/View">Create Consinment</a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-truck"></i><span class="hide-menu">Logistics </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Customer/Create">Create Agency </a></li>
								<li><a href="<?php echo base_url();?>Customer/Create">Create Truck </a></li>
								<li><a href="<?php echo base_url();?>Customer/Create">Track</a></li>
								<li><a href="<?php echo base_url();?>Customer/Create">Manage </a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-building-o"></i><span class="hide-menu"> Buffer Godowns </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>invantory/Stock_short">Manage Godowns<span class="label label-rouded label-info pull-right"><?php echo count($sortstock); ?></span></a></li>
								<li><a href="<?php echo base_url();?>invantory/Stock">Manage Stock </a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Accounts </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Customer/Balance">Customer Balance</a></li>
								<li><a href="<?php echo base_url();?>Supplier/Balance">Supplier Balance</a></li>
								<li><a href="<?php echo base_url()?>accounts/Payment">Payment</a></li>
								<li><a href="<?php echo base_url()?>accounts/closing">Closing</a></li>
								<li><a href="<?php echo base_url()?>accounts/Report"> Closing Report</a></li>
								<li><a href="<?php echo base_url()?>accounts/bank">Manage Bank</a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-adjust"></i><span class="hide-menu">Dispute Settlement</span></a>
							<ul aria-expanded="false" class="collapse">
								<li> <a  href="<?php echo base_url();?>sales/Purchase_Return" >Purchase Return </a></li>
								<li> <a  href="<?php echo base_url();?>sales/Sales_Return" >Sales Return </a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-bar-chart-o"></i><span class="hide-menu">Audit and Reports </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url();?>Sales/Today_report">Today's Report </a></li>
								<li><a href="<?php echo base_url();?>Sales/Sales_report">Sales Report</a></li>
								<li><a href="<?php echo base_url();?>Sales/Counter_report">Counter Report</a></li>
								<li><a href="<?php echo base_url();?>Sales/Sales_Return_Report">Sales Return Report</a></li>
								<li><a href="<?php echo base_url();?>Sales/Purchase_report">Purchase Report</a></li>
								<li><a href="<?php echo base_url();?>Sales/Purchase_Return_report">Purchase Return Report</a></li>
								<li><a href="<?php echo base_url();?>Sales/Today_report">Audit </a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
							<i class="	fa fa-bitcoin"></i><span class="hide-menu">Blockchain </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?php echo base_url()?>help/phone_book">Dashboard </a></li>					<li><a href="<?php echo base_url()?>help/doctor">Create Netwrok </a></li>
								<li><a href="<?php echo base_url()?>help/police">Trigger Order Node</a></li>
								<li><a href="<?php echo base_url()?>help/hospital">Add Organization(s) </a></li>
								<li><a href="<?php echo base_url()?>help/doctor">Form Consortium </a></li>
								<li><a href="<?php echo base_url()?>help/doctor">Form Channel </a></li>
								<li><a href="<?php echo base_url()?>help/doctor">Smart Contract</a></li><li><a href="<?php echo base_url()?>help/doctor">Add Pear </a></li>
								<li><a href="<?php echo base_url()?>help/doctor">Manage Ledger</a></li>
								<li><a href="<?php echo base_url()?>help/ambulance">Manage Certificates </a></li>
								<li><a href="<?php echo base_url()?>help/fire_service">Manage Applications</a></li>
								
							</ul>
						</li-->
						<li> <a class="has-arrow waves-effect waves-dark" href="" aria-expanded="false">
							<i class="	fa fa-child"></i><span class="hide-menu">Help </span></a>
						</li>	
						<li> <a href=""><i class="fa fa-gear"></i><span class="hide-menu">Settings </span></a></li>
					<?php } ?>
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>		
