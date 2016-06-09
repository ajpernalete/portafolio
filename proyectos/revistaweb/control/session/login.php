
							<form  action="control/session/validar.php"  method="post">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="panel-title text-center"><h4>Login</h4></div>
									</div>
									<div class="panel-body modal-body">
										<div class="form-group">
											<label for="correo">Correo</label>
											<input type="email" class="form-control" name="correo" id="correo" placeholder="Introduce tu correo: ejemplo@dominio.com" required>
										</div>
										<div class="form-group">
											<label for="clave">Contraseña</label>
											<input type="password" class="form-control" name="clave" id="clave" placeholder="Contraseña" required>
										</div>
									</div>
									<div class="panel-footer text-center"> 
										<button type="submit" class="btn btn-primary">Enviar</button>
										<button type="reset" class="btn btn-danger">Borrar</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button> 
									</div> 
								</div>
							</form>