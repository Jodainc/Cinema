@extends('layouts.admin')
<?php  	$user=  Session::has('message') ?>
<?php $var = 'test'; ?>
{{ $user }}

	

@if (Session::has('message')) {
	<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<strong>Well done!</strong> {{Session::get('message')}}
	</div>
}
@endif



@section('content')

<table class="table">
	<thead>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Operacion</th>
	</thead>
	@foreach($users as $user)
	<tbody>
		<td>{{$user -> name}}</td>
		<td>{{$user -> email}}</td>
		<td>
		 {!!link_to_route('usuario.edit', $title = 'culo', $parameters = $user->id, ['class'=>'btn btn-primary'])!!}
		</td>
	</tbody>
   @endforeach
</table>

@stop