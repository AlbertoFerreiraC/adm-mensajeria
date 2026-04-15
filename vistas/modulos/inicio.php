<input type="hidden" name="rol" id="rol" value="<?php echo $_SESSION['rol']; ?>">

<div class="content-wrapper dashboard-wrapper">

  <section class="content-header">
    <h1>Panel de Pedidos</h1>
    <p class="subtitulo">Gestión y seguimiento de pedidos</p>
  </section>

  <section class="content">

    <div class="dashboard-card">

      <div class="dashboard-body">

        <!-- ===== KPI CARDS ===== -->
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="kpi-card kpi-blue">
              <h3 id="kpiTotal">0</h3>
              <p>Total</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="kpi-card kpi-yellow">
              <h3 id="kpiPendiente">0</h3>
              <p>Pendientes</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="kpi-card kpi-green">
              <h3 id="kpiConcretado">0</h3>
              <p>Concretados</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="kpi-card kpi-red">
              <h3 id="kpiNoConcretado">0</h3>
              <p>No concretados</p>
            </div>
          </div>

        </div>

        <div class="row" style="margin-bottom:15px;">

          <div class="col-md-3">
            <label>Estado</label>
            <select id="filtroEstado" class="form-control">
              <option value="pendiente">Pendiente</option>
              <option value="concretado">Concretado</option>
              <option value="rechazado">Rechazado</option>
            </select>
          </div>

          <div class="col-md-3">
            <label>Desde</label>
            <input type="date" id="fechaDesde" class="form-control">
          </div>

          <div class="col-md-3">
            <label>Hasta</label>
            <input type="date" id="fechaHasta" class="form-control">
          </div>

          <div class="col-md-3" style="margin-top:25px;">
            <button class="btn btn-primary btn-block" id="btnFiltrar">
              Filtrar
            </button>
          </div>

        </div>

        <div class="tabla-container">

          <h4>Listado de Pedidos</h4>

          <div class="table-responsive">
            <table id="tablaPedidos" class="tabla-modern">
              <thead>
                <tr>
                  <th>Fecha Lev.</th>
                  <th>Fecha Proc.</th>
                  <th>N° Contacto</th>
                  <th>Contacto</th>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Estado</th>
                  <th>Acción</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>

        </div>

      </div>

    </div>

  </section>

</div>

<div id="modalEstado" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar Estado</h4>
      </div>

      <div class="modal-body">

        <input type="hidden" id="idPedido">

        <div class="form-group">
          <label>Nuevo Estado</label>
          <select id="nuevoEstado" class="form-control">
            <option value="concretado">Concretado</option>
            <option value="rechazado">Rechazado</option>
          </select>
        </div>

        <div class="form-group">
          <label>Observación</label>
          <textarea id="observacion" class="form-control"></textarea>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-success" id="btnGuardarEstado">Guardar</button>
      </div>

    </div>

  </div>
</div>


<style>
  /* ===== FONDO GENERAL ===== */
  .dashboard-wrapper {
    background: linear-gradient(135deg, #141e30, #243b55);
    min-height: 100vh;
    padding: 20px;
  }

  /* ===== TITULO ===== */
  .content-header h1 {
    color: #ffffff;
    font-weight: 700;
    font-size: 28px;
    margin-bottom: 5px;
  }

  .subtitulo {
    color: #d9ecff;
    font-size: 14px;
    margin-bottom: 20px;
  }

  /* ===== CARD PRINCIPAL ===== */
  .dashboard-card {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
    padding: 20px;
  }

  /* ===== KPI CARDS ===== */
  .kpi-card {
    padding: 18px;
    border-radius: 14px;
    color: white;
    text-align: center;
    margin-bottom: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transition: 0.3s;
  }

  .kpi-card:hover {
    transform: translateY(-5px);
  }

  .kpi-blue {
    background: linear-gradient(90deg, #00c6ff, #0072ff);
  }

  .kpi-green {
    background: linear-gradient(90deg, #00b09b, #96c93d);
  }

  .kpi-purple {
    background: linear-gradient(90deg, #8e2de2, #4a00e0);
  }

  .kpi-card h3 {
    font-size: 26px;
    margin: 0;
  }

  .kpi-card p {
    margin: 5px 0 0 0;
    font-size: 14px;
  }

  .tabla-container {
    margin-top: 20px;
  }

  .tabla-container h4 {
    margin-bottom: 15px;
    font-weight: 600;
  }

  .tabla-modern {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
  }

  .tabla-modern thead {
    background: #243b55;
    color: white;
  }

  .tabla-modern th,
  .tabla-modern td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #eee;
  }

  .tabla-modern tbody tr:hover {
    background-color: #f4f9ff;
  }

  @media (max-width: 768px) {
    .dashboard-wrapper {
      padding: 10px;
    }

    .dashboard-card {
      padding: 15px;
    }

    .kpi-card h3 {
      font-size: 20px;
    }

    .tabla-modern {
      font-size: 12px;
    }
  }

  .kpi-yellow {
    background: linear-gradient(90deg, #f7971e, #ffd200);
  }

  .kpi-red {
    background: linear-gradient(90deg, #ff416c, #ff4b2b);
  }
</style>

<script src="vistas/js/inicio.js"></script>