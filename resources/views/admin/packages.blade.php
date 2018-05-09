@extends('admin.master')
@section('title', 'Packages')
@section('Title', 'Packages')
@section('packages')
<table class="table table-bordered" >

	<tr style="background: #428bca;color: white;font-size: 20px;"">
		<th  style="text-align: center;">#</th>
		<th  style="text-align: center;">Source</th>
		<th  style="text-align: center;">Name</th>
		<th  style="text-align: center;">Limit Features</th>
		<th  style="text-align: center;">Limit Domain</th>
		<th  style="text-align: center;">Limit Users</th>
		<th  style="text-align: center;">Limit Level</th>
		<th  style="text-align: center;">Using App</th>
	</tr>
<?php
$data = DB::Connection('mysql2')->select('SELECT * FROM packages ');
foreach ($data as $key => $value) {
	?>
	<tr style="font-size: 22px;">
					<td style="text-align: center;">{{$key+1}}</td>
					<td style="text-align: center;">{{$value->db_source}}</td>
					<td style="text-align: center;">{{$value->name}}</td>
					<td style="text-align: center;">{{$value->limit_features}}</td>
					<td style="text-align: center;">{{$value->limit_domain}}</td>
					<td style="text-align: center;">{{$value->limit_users}}</td>
					<td style="text-align: center;">{{$value->limit_level}}</td>
					<td style="text-align: center;">{{$value->using_app}}</td>

				</tr>
	<?php }?>
	</table>
	@stop