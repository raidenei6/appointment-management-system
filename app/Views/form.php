<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      width: 350px;
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
    }

    .form-wrapper {
      display: flex;
      width: 700px;
      transition: transform 0.5s ease;
    }

    form {
      width: 350px;
      padding: 30px;
    }

    h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background: #45a049;
    }

    .toggle {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: #333;
      cursor: pointer;
    }
  </style>
</head>
<body>

    <div class="container">
    <div class="form-wrapper" id="formWrapper">
      <!-- Login Form -->
      <form method="post" action="<?= base_url('login') ?>">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div class="toggle" onclick="switchForm()">Don't have an account? Register</div>
      </form>


      <form method="post" action="<?= base_url('register') ?>">
          <h2>Register</h2>
          <input type="text" name="name" placeholder="Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit">Register</button>
          <div class="toggle" onclick="switchForm()">Already have an account? Login</div>
      </form>
    </div>
    </div>

      <script>
      let isLogin = true;
      function switchForm() {
        const wrapper = document.getElementById('formWrapper');
        if (isLogin) {
          wrapper.style.transform = 'translateX(-350px)';
        } else {
          wrapper.style.transform = 'translateX(0)';
        }
        isLogin = !isLogin;
      }
    </script>
  
</body>
</html>