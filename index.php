<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Invoice</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> 
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	
</head>
<body>
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-12">
									<div class="invoice-title">
										<i class="fa fa-clock-o pull-left icon-clock" aria-hidden="true"></i>
										<h2>Invoice</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<form>
								  	<div class="form-group">
								  		<div class="col-sm-12">
											<div class="col-sm-3">
												<label for="sel1"></label>
												<select class="form-control" id="sel1">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label for="exampleInputEmail2"></label>
												<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
											  	<div class="checkbox">
												    <label>
												      	<input type="checkbox"> Send later
												    </label>
												</div>
										  	</div>
											<div class="col-sm-4 col-sm-offset-2 text-right">
										  		<small>BALANCE DUE</small>
										  		<h1>den35.000,00</h1>
										  	</div>
									  	</div>
										<div class="col-sm-12">
											<div class="col-sm-3">
												<label for="ex1">Billing address</label>
	        									<textarea class="form-control" rows="4" id="ex1" placeholder="Ceko Trade Ct"></textarea>
											</div>
											<div class="col-sm-2">
												<label for="sel1">Terms</label>
												<select class="form-control" id="sel1">
												    <option>Net 15</option>
												    <option>Net 10</option>
												    <option>Net 5</option>
												    <option>Net 1</option>
												</select>
											</div>
											<div class="col-sm-2">
												<label for="ex1">Invoice date</label>
	        									<input class="form-control" id="ex1" type="text" placeholder="07.02.2017">
											</div>
											<div class="col-sm-2">
												<label for="ex1">Due date</label>
	        									<input class="form-control" id="ex1" type="text" placeholder="22.02.2017">
											</div>
										</div>
									</div><!-- /form-group -->
								</form>
							</div> <!-- /row-->
						</div><!-- /panel-heading -->	
						<div class="panel-body">
							<div class="tabele-responsive">
								<table class="table table-condensed table-bordered" id="main-table">
									<thead>
										<tr>
											<th></th>
											<th>#</th>
											<th class="first">PRODUCT/SERVICE</th>
											<th>DESCRIPTION</th>
											<th>QTY</th>
											<th>RATE</th>
											<th>AMOUNT</th>
											<th></th>
										</tr>
									</thead>
									<tbody id="table-body">
										<div id="table-row-wrapper">
											<tr>
												<td><i class="fa fa-th" aria-hidden="true"></i></td>
												<td>1</td>
												<td>Services:Business Software</td>
												<td></td>
												<td>1</td>
												<td>15000</td>
												<td>15000</td>
												<td>
									        	<a href="#" class="btn btn-link btn-link-color btn-link-padding"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</td>
											</tr>
										</div>
										<tr>
											<td><i class="fa fa-th" aria-hidden="true"></i></td>
											<td>2</td>
											<td>
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group dropdown combobox">
															<input class="form-control" type="text">
															<div class="input-group-btn">
																<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button>
																<ul class="dropdown-menu">
																	<li><a href="#">Item One</a></li>
																	<li><a href="#">Item Two</a></li>
																	<li><a href="#">Item Three</a></li>
																	<li><a href="#">Item Four</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												<div class="col-sm-12">
													<input class="form-control" type="text">
												</div>
											</td>
											<td>1</td>
											<td>20000</td>
											<td>20000</td>
											<td>
												<a href="#" class="btn btn-link btn-link-color btn-link-padding"><i class="fa fa-trash" aria-hidden="true"></i></a>
											</td>
										</tr>
										<tr>
											<td><i class="fa fa-th" aria-hidden="true"></i></td>
											<td>3</td>
											<td></td>
											<td  colspan="4"></td>
											<td>
												<a href="#" class="btn btn-link btn-link-color btn-link-padding"><i class="fa fa-trash" aria-hidden="true"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div> <!--end div tabele-responsive  -->
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<button type="button" class="btn btn-default btn-sm" id="add-line">Add lines</button>
								    	<button type="button" class="btn btn-default btn-sm" id="clear-all-rows">Clear all lines</button>
  										<button type="button" class="btn btn-default btn-sm">Add subtotal</button>
									</div>
									<div class="form-group">
										<label for="ex2">Message displayed on invoice</label>
	        							<textarea class="form-control" rows="4" id="ex2"></textarea>
									</div>
									<div class="form-group">
										<label for="ex3">Statement memo</label>
	        							<textarea class="form-control" rows="4" id="ex3"></textarea>
									</div>
								</div>
								<div class="col-sm-3 col-sm-offset-5">
									<table class="table table-clear">
										<tbody>
											<tr>
												<td class="text-right"><strong>Subtotal</strong></td>
												<td class="text-right"><strong>den35.000,00</strong></td>                 
											</tr>
											<tr>
												<td class="text-left">
													<select class="form-control" id="sel4">
													    <option><strong>Discaunt percent</strong></option>
													    <option>20</option>
													    <option>30</option>
													    <option>40</option>
													</select>
												</td>
												<td class="text-right"><strong>den0,00</strong></td>                      
											</tr>
											<tr>
												<td class="text-right"><strong>Total</strong></td>
												<td class="text-right"><strong>den35.000,00</strong></td>                 
											</tr>
											<tr>
												<td class="text-right"><strong>Balance due</strong></td>
												<td class="text-right"><strong>den35.000,00</strong></td>                
											</tr>                                  
										</tbody>
									</table>
								</div>
							</div><!--/end of row -->
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<label for="ex">Attachements Maximum size:25MB</label>
		        						<textarea class="form-control text-center" cols="70" rows="3" id="ex5" placeholder="Drag/Drop files here or click the icon"></textarea>
		        						<span class="text-center">Show existing</span>
									</div>
								</div>
							</div>
						</div><!--/panel-body -->
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-4">
									<button type="button" class="btn btn-default">Cancel</button>
									<button type="button" class="btn btn-default">Clear</button>
								</div>
								<div class="col-sm-4">
									<p><a href="#">Print or Preview</a> | <a href="#">Customise</a></p>
								</div>
								<div class="col-sm-4">
									<button type="button" class="btn btn-default pull-left">Save</button>
									<div class="input-group dropdown combobox">
										<input class="form-control" type="text">
										<div class="input-group-btn">
											<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button>
											<ul class="dropdown-menu dropdown-menu-left">
												<li><a href="#">Save and send</a></li>
												<li><a href="#">Item Two</a></li>
												<li><a href="#">Item Three</a></li>
												<li><a href="#">Item Four</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /panel-footer-->
					</div> <!-- /panel -->
				</div>
			</div><!-- /row -->
		</div><!-- /container-fluid -->
	</section>
</body>
</html>