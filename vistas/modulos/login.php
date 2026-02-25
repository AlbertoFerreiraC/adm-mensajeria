<style>
  body {
    background: linear-gradient(135deg, #141e30, #243b55);
    font-family: 'Montserrat', sans-serif;
  }

  .login-box {
    margin: 8% auto;
    width: 380px;
  }

  .login-box-body {
    background: rgba(255, 255, 255, 0.08);
    padding: 45px 35px;
    border-radius: 18px;
    backdrop-filter: blur(12px);
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.6);
    color: #ffffff;
  }

  .login-logo {
    text-align: center;
    margin-bottom: 30px;
  }

  .login-logo b {
    font-size: 34px;
    color: #00c6ff;
    letter-spacing: 3px;
  }

  .login-logo p {
    font-size: 13px;
    color: #d0e6ff;
    margin-top: 8px;
  }

  .form-control {
    background: transparent;
    border: none;
    border-bottom: 2px solid #00c6ff;
    border-radius: 0;
    color: #ffffff;
    font-size: 14px;
  }

  .form-control:focus {
    border-bottom: 2px solid #00ffcc;
    box-shadow: none;
  }

  .form-control::placeholder {
    color: #cccccc;
  }

  .form-control-feedback {
    color: #00c6ff;
  }

  .btn-login {
    background: linear-gradient(90deg, #00c6ff, #0072ff);
    border: none;
    border-radius: 25px;
    padding: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    transition: 0.3s ease;
    color: white;
  }

  .btn-login:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(0, 198, 255, 0.6);
  }
</style>


<div class="login-box">

  <div class="login-logo">
    <b>MENSAJERÍA</b>
    <p>Sistema de Gestión Inteligente</p>
  </div>

  <div class="login-box-body">

    <form id="formLogin">

      <div class="form-group has-feedback">
        <input type="text"
          class="form-control"
          placeholder="Usuario"
          name="codigoLogin"
          id="codigoLogin"
          autocomplete="off"
          required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <br>

      <div class="form-group has-feedback">
        <input type="password"
          class="form-control"
          placeholder="Contraseña"
          name="passLogin"
          id="passLogin"
          autocomplete="off"
          required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <br><br>

      <button type="button"
        class="btn btn-login btn-block"
        id="ingresarLogin">
        INGRESAR
      </button>

    </form>

  </div>

</div>
