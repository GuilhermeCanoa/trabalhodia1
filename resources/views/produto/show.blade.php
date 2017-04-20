@extends ('welcome')
@section ('content')

<section style="margin-bottom: -40px;">
	<div class="container" style="margin-top: 40px;">
		<div class="row">
			<div class="container">
				<div class="col-sm-6">
					<div style="border: black double 10px; padding: 10px; border-radius: 14px;">
						<center><img src="img/produtos/CafeteiraDolceGusto2.jpg" alt="Nome do Produto" style="padding: 5px; width: 85%; border-radius: 14px;"></center>
					</div>
				</div>
				<div class="col-sm-6">
					<h1><strong> {{$produto->nome_produto}}</strong></h1>
					<h1 style="color: purple;"> {{$produto->preco_produto}} </h1>
					<div style="margin-top: 30px;">
						<label for="descricao"> {{$produto->descricao_produto}}</label>
						<div style="padding: 0px; height: 50px; position: relative;">
							<div style="position: absolute;">
							</div>
						</div>
						<button type="button" class="btn btn-lg btn-success btn-block" style="width: 50%;"> COMPRAR </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop