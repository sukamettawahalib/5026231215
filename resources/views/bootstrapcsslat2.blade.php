<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Cek Dong!</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <style>
      body {
        background-color: #f8f9fa;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          "Helvetica Neue", Arial, sans-serif;
      }
      .status-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 16px;
        background-color: #f5f5f5;
        max-height: 24px;
      }
      .left-status {
        flex: 1;
      }
      .right-status img {
        flex: 1;
        text-align: right;
      }
      .status-bar img {
        width: 100%;
        height: auto;
        max-width: 100%;
        display: block;
      }
      .login-container {
        max-width: 400px;
        margin: auto;
        padding-top: 50px;
      }
      .logo {
        text-align: center;
        margin-bottom: 20px;
      }
      .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 12px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
      }
      .input-group-text {
        background: #ffffff;
        border: 1px solid #ced4da;
        border-radius: 8px 0 0 8px;
        padding: 10px;
      }
      .input-group-text img {
        width: 20px;
        height: 20px;
      }
      .error-msg {
        color: red;
        font-size: 12px;
        margin-top: 5px;
      }
      .btn-dark {
        border-radius: 20px;
        padding: 10px;
        font-weight: bold;
        background-color: black;
      }
      .footer-bar {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: rgb(186, 185, 185);
        color: white;
        text-align: center;
        padding: 15px 0;
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <div class="status-bar">
      <div class="left-status"></div>
      <div class="right-status">
        <img src="{{ asset('images/StatusBar.png') }}" alt="Status Icons" class="w-full h-auto block" />
      </div>
    </div>
    <div class="container login-container">
      <div class="logo">
        <img src="{{ asset('images/Logo CekDong 1.png') }}" alt="Cek Dong!" width="120" />
      </div>
      <form>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <img src="{{ asset('images/user-icon.png') }}" alt="User" />
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <img src="{{ asset('images/key-icon.png') }}" alt="Lock" />
              </span>
            </div>
            <input
              type="password"
              class="form-control"
              placeholder="Password"
            />
          </div>
          <small class="error-msg">Wrong Password!</small>
        </div>
        <button
          type="submit"
          class="btn btn-dark mx-auto d-block"
          style="width: 40%"
        >
          Login
        </button>
      </form>
      <div class="text-center mt-3">
        <a href="#" class="d-block text-dark">Forgot Password</a><br />
        <a href="#" class="d-block text-dark text-line">Login As Teknisi</a>
      </div>
    </div>
    <div class="footer-bar">
      Don't have an account yet?
      <a href="#" class="font-weight-bold">Create New</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
