<input type="hidden" name="rol" id="rol" value="<?php echo $_SESSION['rol']; ?>">
<aside class="main-sidebar sidebar-open">

	<section class="sidebar">

		<!--Recursos Humanos-->
		<ul class="sidebar-menu">

			<?php if ($_SESSION['rol'] == "Administrador") { ?>
				<li class="header">MENÚ DE NAVEGACIÓN</li>
			<?php } ?>

			<!--Mantencion-->
			<li class="treeview">
				<a href="#">
					<i class="fa fa-wrench"></i>
					<span>Mantención</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>

				<ul class="treeview-menu mantenedor-scroll">

					<!-- Submódulo: Mantenimiento -->
					<li class="treeview">
						<a href="#">
							<i class="fa fa-cogs"></i>
							<span>Mantenimiento</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu mantenedor-scroll">
							<!-- Creación de OT -->
							<li class="header" style="font-weight:bold; color:#fff; margin:5px 10px;">Creación de OT</li>
							<li><a href="reporteFalla"><i class="fa fa-file-text-o"></i> Reporte de Falla OT</a></li>
							<li><a href="preventivaOT"><i class="fa fa-shield"></i> Preventiva OT</a></li>
							<li><a href="otInterna"><i class="fa fa-clipboard"></i> OT Interna</a></li>
							<li><a href="servicioExternoOt"><i class="fa fa-truck"></i> Servicio Externo OT</a></li>

							<!-- Acciones de la OT -->
							<li class="header" style="font-weight:bold; color:#fff; margin:10px 10px 5px;">Acciones de la OT</li>
							<li><a href="asignarTareasPendientes"><i class="fa fa-user-plus"></i> Asignar Tareas Pendientes</a></li>
							<li><a href="editarOt"><i class="fa fa-pencil-square-o"></i> Editar OT</a></li>
							<li><a href="terminarTareaOt"><i class="fa fa-check-circle"></i> Terminar Tarea OT</a></li>
						</ul>
					</li>

					<!-- Submódulo: Control -->
					<li class="treeview">
						<a href="#">
							<i class="fa fa-sliders"></i>
							<span>Control</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu mantenedor-scroll">
							<li><a href="registroKM"><i class="fa fa-tachometer"></i> Registro de Km</a></li>
							<li><a href="reporteFalla"><i class="fa fa-exclamation-circle"></i> Reporte de Falla</a></li>
							<li><a href="editarKM"><i class="fa fa-pencil"></i> Editar Km Máquina</a></li>
						</ul>
					</li>

					<!-- Submódulo: Consultas -->
					<li class="treeview">
						<a href="#">
							<i class="fa fa-search"></i>
							<span>Consultas</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu mantenedor-scroll">
							<li class="header" style="font-weight:bold; color:#fff; margin:5px 10px;">Consultas Generales</li>
							<li><a href="ordenTrabajo"><i class="fa fa-file-text-o"></i> Orden de Trabajo</a></li>
							<li><a href="repuestosOt"><i class="fa fa-cubes"></i> Repuestos</a></li>
							<li><a href="listaOT"><i class="fa fa-list"></i> Lista de OTs</a></li>

							<!-- Informes -->
							<li class="header" style="font-weight:bold; color:#fff; margin:10px 10px 5px;">Informes</li>
							<li><a href="tareasAsignadas"><i class="fa fa-tasks"></i> Tareas Asignadas</a></li>
						</ul>
					</li>

					<!-- Submódulo: Mantenedor -->
					<li class="treeview">
						<a href="#">
							<i class="fa fa-database"></i>
							<span>Mantenedor</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu mantenedor-scroll">
							<li><a href="campania"><i class="fa fa-bullhorn"></i> Campaña</a></li>
							<li><a href="pauta_mantencion"><i class="fa fa-wrench"></i> Pauta de Mantención</a></li>
							<li><a href="sistemaMaquina"><i class="fa fa-cogs"></i> Sistema de la Máquina</a></li>
							<li><a href="subsistemaMaquina"><i class="fa fa-cog"></i> Subsistema de la Máquina</a></li>
							<li><a href="tipoTareaMantencion"><i class="fa fa-tasks"></i> Tipo Tarea Mantención</a></li>
							<li><a href="nivelCriticidad"><i class="fa fa-exclamation-triangle"></i> Nivel de Criticidad</a></li>
							<li><a href="secuenciaPauta"><i class="fa fa-list-ol"></i> Secuencia de Pauta</a></li>
							<li><a href="tipoDetencionProgramada"><i class="fa fa-calendar-times-o"></i> Detención Programada</a></li>
							<li><a href="modificacionDetencion"><i class="fa fa-edit"></i> Modificación de Detención</a></li>
							<li><a href="categoriaPautaInspeccion"><i class="fa fa-clipboard"></i> Categoría Pauta Inspección</a></li>
							<li><a href="conductor"><i class="fa fa-id-card-o"></i> Conductores</a></li>
							<li><a href="maquina"><i class="fa fa-truck"></i> Máquinas</a></li>
							<li><a href="personalTecnico"><i class="fa fa-user"></i> Personal Técnico</a></li>
						</ul>
					</li>

				</ul>
			</li>


			<!--Configuraciones-->
			<li class="treeview">
				<a href="#">
					<i class="fa fa-cog"></i>
					<span>Configuraciones</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu mantenedor-scroll">
					<li><a href="actualizacionDatos"><i class="fa fa-key"></i>Actualizar Mis Datos</a></li>
					<li><a href="usuario"><i class="fa fa-bell-o"></i>Gestión de Usuarios</a></li>
				</ul>
			</li>
			<li><a href="salir"><i class="fa fa-sign-out text-red"></i> <span>Cerrar Sesión</span></a></li>
		</ul>

	</section>
</aside>

<style>
	.ui-autocomplete {
		height: 280px;
		overflow-y: scroll;
		overflow-x: hidden;
	}

	.ui-autocomplete {
		z-index: 2147483647;
	}

	.mantenedor-scroll {
		max-height: 300px;
		overflow-y: auto;
		scrollbar-width: thin;
		scrollbar-color: hsl(0, 0.60%, 35.10%);
	}

	.mantenedor-scroll {
		max-height: 300px;
		overflow-y: auto;
		scrollbar-width: none;
	}

	.mantenedor-scroll::-webkit-scrollbar {
		width: 0px;
		background: transparent;
	}

	.user-panel-custom {
		text-align: center;
		padding: 15px 10px;
	}

	.user-panel-custom .user-name {
		margin: 0;
		font-weight: 700;
		font-size: 14px;
		color: #ffffff;
		word-break: break-word;
	}

	.user-panel-custom .user-status {
		font-size: 12px;
		margin-top: 5px;
		color: #b8c7ce;
	}

	.sidebar-collapse .user-panel-custom {
		display: none !important;
	}
</style>