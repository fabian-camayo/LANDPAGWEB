<div class="section inicio">
			<ul class="rslides">
				<li>
					<div class="banner banner1">
					</div>
				</li>
				<li>
					<div class="banner banner2">
					</div>
				</li>
				<li>
					<div class="banner banner3">
					</div>
				</li>
				<li>
					<div class="banner banner4">
					</div>
				</li>
				<li>
					<div class="banner banner5">
					</div>
				</li>
			</ul>
			<div class="patterndot"></div>
			<div class="bannerln"></div>
			<div class="portada animated bounceInDown">
					<h6>Paginas web desde $400.000</h6>
					<h1 class="portadatitulo">DESARROLLO WEB PROFESIONAL</h1>
					<form  action="{{route('contacto-tipo')}}"  method="POST" autocomplete="off">
					@csrf
					<input type="hidden" name="tipo" value="Paginas web desde $400">
					<button type="submit" class="btn btn-info">Contactanos</button>
					</form>
			</div>
</div>