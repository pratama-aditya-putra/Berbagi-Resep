<html>
<head>
    <title>Admin - Login</title>
      <link rel="icon" href="<?php echo base_url('images/favicon.png')?>">
    <style>
    body {
 background-image: url("<?php echo base_url('images/page-bg.jpg') ?>");
 background-color: #cccccc;
}
        .page {
            padding-left: 37%;
            padding-top: 10%;
        }
    </style>
</head>
<body>
    <div class="page">
        <div style="border:solid; border-color:white; width:35%; padding:20px; text-align:center;">
            <h1>Login Admin</h1>
            <hr>
            <form action="<?php echo base_url('login/login_action'); ?>" method="post"  class="form">
                <?php echo form_open('login');?>
                <table  style="text-align:center; margin-left:60px;">
                <tr>
                <td>Username</td>
                <?php echo form_error('username');?>
                </tr>
                <tr>
                <td><input type="text" name="username" value="<?php echo set_value('username'); ?>" maxlength="15" style="margin-bottom:20px;"></td>
                </tr>
                <tr><?php echo form_error('password');?>
                    <td>Password</td>
                </tr>
                <tr>
                <td><input type="password" name="password"  maxlength="15"  style="margin-bottom:20px;"></td>
                </tr>
                <tr style="text-align:right;">
                <td><input type="submit" value="Login"></td> </tr>
                </table>
            </form>
        </div>
    </div>
    </body>
</html>