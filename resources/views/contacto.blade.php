<div class="section contacto">
				
			<div class="conformcontacto">
				<h1 class="portadatitulo">Contactenos</h1>
				<form class="ctp-5" action="{{route('contacto-guardar')}}" id="form-general"  method="POST" autocomplete="off">
					@csrf
				<h4 class="mb-3">¡{{$data ?? 'Solicite ahora y reciba asesoría gratis'}}!</h4>
					<div class="row">
						<div class="col-xl-12">
						<input type="hidden" name="tipo" value="{{$data ?? 'Solicite ahora y reciba asesoria gratis'}}">
						@error('nombre')
						<small class="form-text text-muted text-left">{{ $message }}</small>
						@enderror	
							<div class="form-group">
								<input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Nombre" required>
							</div>
						</div>
						<div class="col-xl-6">
						@error('telefono')
						<small class="form-text text-muted text-left">{{ $message }}</small>
						@enderror
							<div class="form-group">
								<input type="number" name="telefono" class="form-control" id="telefono" aria-describedby="telefono" placeholder="Teléfono" required>
							</div>
						</div>
						<div class="col-xl-6">
						@error('correo')
						<small class="form-text text-muted text-left">{{ $message }}</small>
						@enderror
							<div class="form-group">
						  		<input type="email" name="correo" class="form-control" id="correoelectronico" aria-describedby="correoelectronico" placeholder="Correo electrónico" required>
							</div>
						</div>
						<div class="col-xl-12">
						@error('mensaje')
						<small class="form-text text-muted text-left">{{ $message }}</small>
						@enderror
							<div class="form-group">
								<textarea name="mensaje" id="mensaje"   rows="4" placeholder="Mensaje" class="form-control" ></textarea>
							</div>
						</div>
						<div class="col-xl-12">
							<button type="submit" class="btn btn-info w-100">Solicitar ahora</button>
						</div>
					</div>
				</form>
			</div>
			<div class="row text-center">
					<div class="col-xl-6"><i class="fas fa-phone-square-alt"></i> (+57) 319 783 5853</div>
					<div class="col-xl-6"><i class="fas fa-envelope-square"></i> info@landpag.com</div>
			</div>
		</div>