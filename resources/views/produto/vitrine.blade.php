@extends ('welcome')
@section ('content')
	<div class="container">
		<div class="row">
			@foreach ($produtos as $produto)
				<div class="col-xs-12 col-sm-3 produ">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="img-produtos">
										<img src="img/produtos/CafeteiraDolceGusto2.jpg" alt="Nome do Produto" style="width: 100%">
									</div>
								</div>
								<div class="col-md-12">							
									<center><h3><b><a href="{{ route('produto.show', $produto->id) }}" title="">{{str_limit($produto->nome_produto, 17)}}</a></b></h3></center>
									<center><strong style="font-size: 35px;color:purple"> {{$produto->preco_produto}} </strong></center>
									<button type="button" class="btn btn-success btn-block"> COMPRAR </button>
								</div>
							</div>
						</div>				
					</div>					
				</div>	
			@endforeach
		</div>
	</div>
@stop