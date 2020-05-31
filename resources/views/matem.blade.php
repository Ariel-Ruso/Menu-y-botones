<?php
$itemA = rand(1,20);
$itemB = rand(1,9);
$suma= 0;
$resul=0;

?>

@extends ('admin.template.main')

@section ('title', 'Sumas')


@section ('contents')

<h1 align="center">Sumando </h1><th>

<form action="sumar" method="POST">
	
	<table class="table">
  	<thead>
    <tr>
      <th scope="col">Elemento A</th>
      <th scope="col">Elemento B</th>
      <th scope="col">Resultado</th>    
      <tr>

      <th scope="row"> {{ $itemA }} </th>   
    	<th scope="row">{{ $itemB }}</th>   
    	<th scope="row">
    		<input type="integer" name="resul">	</input>
    	</th> 

    </tr>
</table>

	<button class="btn btn-primary" type="submit"> Comprobar</button>    

	<?php
	$itemA;
	$itemB;

	$suma=  $itemA + $itemB;
	//$resul= $_POST['resul'];
	?>

	  </thead>
</form>





