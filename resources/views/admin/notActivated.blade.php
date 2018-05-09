@extends('admin.master')
@section('title', 'Not Activated')
@section('Title', 'Not Activated')
@section('notActivated')
<style>
div.container {
	width: 100%;
}
#submitShowTable{
	float: right;
}
</style>


<div class="container">
	<form method="get" action="">
		<div class="form-group">
			<label for="sel1" style="font-size: 23px;">Select Packages</label>
			<select class="form-control" id="sel1" name="packages" >
<?php $listPackages = DB::Connection('mysql2')->select('select * from packages');
foreach ($listPackages as $key => $value) {

	?>
										<option <?php if (isset($_GET['packages'])) {

		if ($_GET['packages'] == $value->Id) {
			echo "selected";
		}
	}?>>{{$value->Id}}</option>
	<?php }?>
</select>
				<p></p>
				<input type="submit" class="btn btn-info" value="Search" id="submitShowTable">

			</div>

		</form>

	</div>
	<p></p>
<?php
if (isset($_GET['packages'])) {
	$packages = $_GET['packages'];
} else {

	$packages = 0;
}
?>
<table id="tableIS" class="table table-bordered" style="display: block;">

		<tr style="background: #428bca;color: white;font-size: 20px;"">
			<th class="col-xs-1"  style="text-align: center; ">#</th>
			<th class="col-xs-1" style="text-align: center;">User Name</th>
			<th class="col-xs-2" style="text-align: center;">Full Name</th>
			<th class="col-xs-1" style="text-align: center;">Email</th>
			<th class="col-xs-1" style="text-align: center;">Mobie</th>
			<th class="col-xs-3" style="text-align: center;">Company</th>
			<th class="col-xs-3" style="text-align: center;">Address</th>
		</tr>
<?php
if ($packages == 0) {
	$data = DB::Connection('mysql2')->select('select * from customers where checked=? and username=?', array(0, ''));
} else {
	$data = DB::Connection('mysql2')->select('select * from customers where  checked=? and package_id= ? and username=?', array(0, $packages, ''));
}

foreach ($data as $key => $value) {
	?>
	<tr style="font-size: 22px;">
									<td style="text-align: center;">{{$key+1}}</td>
									<td style="text-align: center;">{{$value->username}}</td>
									<td style="text-align: center;">{{$value->first_name." ".$value->last_name}}</td>
									<td style="text-align: center;">{{$value->email}}</td>
									<td style="text-align: center;">{{$value->mobile}}</td>
									<td style="text-align: center;">{{$value->company}}</td>
									<td style="text-align: center;">{{$value->address}}</td>
								</tr>
	<?php }?>
		</table>
		@stop