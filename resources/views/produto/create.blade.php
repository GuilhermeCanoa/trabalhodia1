@extends ('welcome')

@section ('content')

<form action="{{route('produto.store')}}" method="POST">

	{{csrf_field()}}

		<div id="cadastro-produto" class="container">

			<br><br>
			<center> <h2> <strong> CADASTRO DE PRODUTO <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </strong> </h2> </center>
			<hr style="margin-top: 20px; 
					   margin-bottom: 20px; 
					   border-top: 2px solid black; 
			   		   width: 50%;">

		  	<div class="form-group">
		    	<label for="inputNomeProduto"> Nome </label>
		    	<div class="input-group">
		    		<div class="input-group-addon">@</div>
		    		<input type="text" class="form-control" id="inputNomeProduto" placeholder="Nome do produto" autofocus name="nome">
		  		</div>
		  	</div>

		  	<div class="form-group">
	    		<label for="inputAmount"> Valor </label>
	    		<div class="input-group">
	      			<div class="input-group-addon">$</div>
	      			<input type="text" class="form-control" id="inputAmount" placeholder="Preço" name="preco">
	      			<div class="input-group-addon">.00</div>
	    		</div>
	  		</div>

	  		<div class="form-group">
	    		<label for="inputAmount"> Descricao </label>
	    		<div class="input-group">
	    			<div class="input-group-addon">D</div>
	      			<input type="text" class="form-control" id="inputAmount" placeholder="Descricao" name="descricao">
	      		
	    		</div>
	  		</div>

		  	<div class="form-group">
		    	<label for="inputFile"> File input </label>
		    	<input type="file" id="inputFile">
		    	<p class="help-block"> Selecione a imagem do produto. </p>
		  	</div>

		  	<button type="submit" class="btn btn-default"> Cadastrar </button>

		</div>

	</form>
@stop