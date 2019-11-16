<div class="section servicios">
	<div class="inner h-100">
		<section class="h-100">
				<div class="row h-30">
					<div class="col-12 text-center mb-2">
							<h1 class="portadatitulo mt-4">Nuestros <span class="color-blue">servicios</span></h1>
							<p class="ns-p">En landpag buscamos lo mejor para nuestros clientes cada uno de sus proyectos son especiales y muy importantes.
									Garantizamos que nuestros sitios web son adaptables a cualquier pantalla y que solo pagaran por lo que realmente necesitan.</p>
					</div>
				</div>
				<div class="row h-70 text-center sp-5">
					<div class="col-md-3 mv-card">
						<div class="card" style="width: 18rem;">
								<img src="{{ asset('assets/img/card1.svg') }}" class="card-img-top cardservicios" alt="Desarrollo y diseño web">
								<div class="card-body">
							  <h5 class="card-title">Desarrollo y diseño web</h5>
							  <p class="card-text txt-just">Todas nuestras paginas web desde las de aterrizaje hasta las tiendas online se crean con alta calidad.</p>
							  	<form action="{{route('contacto-tipo')}}"  method="POST" autocomplete="off">
									@csrf
									<input type="hidden" name="tipo" value="Desarrollo y diseño web">
									<button type="submit" class="btn btn-info">Solicitar</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 mv-card">
							<div class="card" style="width: 18rem;">
									<img src="{{ asset('assets/img/card2.svg') }}" class="card-img-top cardservicios" alt="Gestión de bases de datos">
								<div class="card-body">
								  <h5 class="card-title">Gestión de bases de datos</h5>
								  <p class="card-text txt-just">Nuestras estructuras de bases de datos ayudan a escalar y a  mejorar el análisis de los datos.</p>
								  	<form action="{{route('contacto-tipo')}}"  method="POST" autocomplete="off">
										@csrf
										<input type="hidden" name="tipo" value="Gestión de bases de datos">
										<button type="submit" class="btn btn-info">Solicitar</button>
									</form>
								</div>
							</div>
					</div>
					<div class="col-md-3 mv-card">
							<div class="card" style="width: 18rem;">
									<img src="{{ asset('assets/img/card3.svg') }}" class="card-img-top cardservicios" alt="Correos corporativos">
								<div class="card-body">
								  <h5 class="card-title">Correos corporativos</h5>
								  <p class="card-text txt-just">Un correo corporativo habla mucho de tu empresa y nuestros paquetes ayudan a no gastar tanto para lograrlo.</p>
								  	<form action="{{route('contacto-tipo')}}"  method="POST" autocomplete="off">
										@csrf
										<input type="hidden" name="tipo" value="Correos corporativos">
										<button type="submit" class="btn btn-info">Solicitar</button>
									</form>
								</div>
							</div>
					</div>
					<div class="col-md-3 mv-card">
							<div class="card" style="width: 18rem;">
									<img src="{{ asset('assets/img/card4.svg') }}" class="card-img-top cardservicios" alt="Posicionmiento web">
								<div class="card-body">
								  <h5 class="card-title">Posicionamiento web</h5>
								  <p class="card-text txt-just">Estar en los primeros puestos en las búsquedas, le facilitara la comprobación de su potencial en Internet. </p>
								  	<form  action="{{route('contacto-tipo')}}"  method="POST" autocomplete="off">
										@csrf
										<input type="hidden" name="tipo" value="Posicionamiento web">
										<button type="submit" class="btn btn-info">Solicitar</button>
									</form>
								</div>
							</div>
					</div>
				</div>
		</section>
	</div>
</div>