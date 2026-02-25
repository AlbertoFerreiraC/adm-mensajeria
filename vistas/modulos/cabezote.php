<header class="main-header">

	<a href="#" class="logo logo-usuario">

		<span class="logo-lg usuario-header">
			<?php echo strtoupper($_SESSION["nombre"]); ?>

			<small class="usuario-status">
				<i class="fa fa-circle text-success"></i> EN SESIÓN
			</small>
		</span>

	</a>

	<nav class="navbar navbar-static-top" role="navigation">

		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

	</nav>

</header>

<style>
	@media (min-width:200px) {
		.logo-lg img {
			padding: 3px 50px 10px 50px;
		}
	}

	@media (min-width:1025px) {
		.logo-lg img {
			padding: 10px 10px 0px 10px;
		}
	}

	.logo-usuario {
		background-color: #1f2d3d !important;
		color: #ffffff !important;

		height: 50px !important;
		padding: 0 !important;

		display: flex !important;
		align-items: center !important;
		/* centra vertical */
		justify-content: center !important;
		/* centra horizontal */

		line-height: normal !important;
		/* elimina el line-height heredado */
	}

	.logo-usuario .logo-lg {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		line-height: 1.1;
		margin: 0 !important;
	}

	.usuario-header {
		font-weight: 700;
		font-size: 13px;
		letter-spacing: 1px;
	}

	.usuario-status {
		font-size: 10px;
		margin-top: 2px;
		color: #b8c7ce;
	}

	.usuario-status i {
		font-size: 7px;
		margin-right: 3px;
	}
</style>