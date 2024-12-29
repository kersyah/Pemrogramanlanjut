<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            width: 400px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Signup</h2>
        <?php echo form_open('signup/register'); ?>
            <input type="text" name="nama" placeholder="Name" value="<?php echo set_value('nama'); ?>">
            <?php echo form_error('nama', '<div class="error">', '</div>'); ?>

            <input type="text" name="telp" placeholder="Phone" value="<?php echo set_value('telp'); ?>">
            <?php echo form_error('telp', '<div class="error">', '</div>'); ?>

            <input type="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
            <?php echo form_error('email', '<div class="error">', '</div>'); ?>

            <input type="password" name="password" placeholder="Password">
            <?php echo form_error('password', '<div class="error">', '</div>'); ?>

            <textarea name="alamat" placeholder="Address"><?php echo set_value('alamat'); ?></textarea>
            <?php echo form_error('alamat', '<div class="error">', '</div>'); ?>

            <button type="submit">Sign Up</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
