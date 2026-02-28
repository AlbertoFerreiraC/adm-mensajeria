<input type="hidden" name="rol" id="rol" value="<?php echo $_SESSION['rol']; ?>">

<div class="content-wrapper dashboard-wrapper">

  <section class="content-header">
    <h1>Panel Principal</h1>
    <p class="subtitulo">Resumen general del sistema de mensajería</p>
  </section>

  <section class="content">

    <div class="dashboard-card">

      <div class="dashboard-body">

        <!-- ===== TARJETAS KPI ===== -->
        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="kpi-card kpi-blue">
              <h3 id="kpiTotal">0</h3>
              <p>Total Conversaciones</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="kpi-card kpi-green">
              <h3 id="kpiContactos">0</h3>
              <p>Contactos Únicos</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="kpi-card kpi-purple">
              <h3 id="kpiHoy">0</h3>
              <p>Conversaciones Hoy</p>
            </div>
          </div>

        </div>

        <!-- ===== TABLA ===== -->
        <div class="tabla-container">
          <h4>Últimas Conversaciones</h4>

          <div class="table-responsive">
            <table id="tablaConversaciones" class="tabla-modern">
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Contacto</th>
                  <th>Número</th>
                  <th>Entrada</th>
                  <th>Respuesta</th>
                  <th>Secuencia</th>
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

  /* ===== TABLA ===== */
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

  /* ===== RESPONSIVE FIX ===== */
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
</style>

<script src="vistas/js/inicio.js"></script>