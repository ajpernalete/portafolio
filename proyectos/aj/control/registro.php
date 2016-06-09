							


							<form  action="control/usuario/insertarusuario.php"  method="post">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="panel-title text-center"><h4>REGISTRARSE</h4></div>
									</div>
									<div class="panel-body modal-body">
										<div class="form-group">
											<label for="ubicacion">Ubicacion</label>
											<select name="ubicacion" class="form-control" id="sel1">
												<?php include("ubicacionselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="sexo">Sexo</label>
											<select name="sexo" class="form-control" id="sel1">
												<?php include("sexoselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="nombre">Nombre</label>
											<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduce tu nombre" required>
										</div>
										<div class="form-group">
											<label for="apellido">Apellido</label>
											<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Introduce tu apellido" required>
										</div>
										<div class="form-group">
											<label for="clave">Contraseña</label>
											<input type="password" class="form-control" name="clave" id="clave" placeholder="Contraseña" required>
										</div>
										<div class="form-group">
											<label for="clave">Confirme su Contraseña</label>
											<input type="password" class="form-control" name="clave" id="clave" placeholder="Confirme su Contraseña" required>
										</div>
										<div class="form-group">
											<label for="correo">Correo</label>
											<input type="email" class="form-control" name="correo" id="correo" placeholder="Introduce tu correo: ejemplo@dominio.com" required>
										</div>
										<div class="form-group">
											<label for="cedula">Teléfono</label>
											<input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Introduce tu teléfono" required>
										</div>
										<div class="form-group">
											<label for="direccion">Direccion</label>
											<textarea class="form-control" rows="4" name="direccion" id="direccion" placeholder="Introduce tu direccion" required></textarea> 
										</div>
									</div>
									<div class="panel-footer text-center"> 
										<button type="submit" class="btn btn-primary">Enviar</button>
										<button type="reset" class="btn btn-danger">Borrar</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button> 
									</div> 
								</div>
							</form>