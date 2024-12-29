<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f4f4f4;
    }
    .container {
      display: flex;
      width: 600px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .left-side {
      padding: 30px;
      width: 50%;
    }
    .right-side {
      background-image: url('<?php echo base_url("assets/images/cake.jpg"); ?>');
      background-size: cover; 
      background-repeat: no-repeat; 
      background-position: center; 
      width: 50%;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .right-side h2 {
      color: #fff;
      text-shadow: 2px 2px 5px #333;
    }
    h2 {
      margin-bottom: 20px;
      color: #333;
      text-align: center;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    button {
      background-color: #ff5858;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    button:hover { 
      background-color: #f08080;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .footer {
      margin-top: 20px;
      font-size: 14px;
      color: #777;
    }
    .error-message {
      color: red;
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left-side">
      <h2>Login</h2>
      <?php if ($this->session->flashdata('error')): ?>
        <p class="error-message"><?php echo $this->session->flashdata('error'); ?></p>
      <?php endif; ?>
      <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
      <div class="footer">Don't have an account? 
        <a href="<?php echo site_url('signup'); ?>">Sign up</a>
      </div>
    </div>
    <div class="right-side">
      <h2>Welcome Back!</h2>
      <p>Please enter your credentials to continue.</p>
    </div>
  </div>
</body>
</html>
