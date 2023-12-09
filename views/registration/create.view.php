<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>PHP Project</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" />
  <link rel="stylesheet" href="./style.css" />
  <style>
  * {
    font-family: 'Poppins';
  }

  body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    overflow-y: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #dde5f4;
    height: 100vh;
  }

  .screen-1 {
    background: #f1f7fe;
    padding: 2em;
    display: flex;
    flex-direction: column;
    border-radius: 30px;
    box-shadow: 0 0 2em #e6e9f9;
    gap: 2em;
  }

  .screen-1 .logo {
    margin-top: -3em;
  }

  .screen-1 .email {
    background: white;
    box-shadow: 0 0 2em #e6e9f9;
    padding: 1em;
    display: flex;
    flex-direction: column;
    gap: 0.5em;
    border-radius: 20px;
    color: #4d4d4d;
    margin-top: -3em;
  }

  .screen-1 .email input {
    outline: none;
    border: none;
  }

  .screen-1 .email input::-moz-placeholder {
    color: black;
    font-size: 0.9em;
  }

  .screen-1 .email input:-ms-input-placeholder {
    color: black;
    font-size: 0.9em;
  }

  .screen-1 .email input::placeholder {
    color: black;
    font-size: 0.9em;
  }

  .screen-1 .email ion-icon {
    color: #4d4d4d;
    margin-bottom: -0.2em;
  }

  .screen-1 .password {
    background: white;
    box-shadow: 0 0 2em #e6e9f9;
    padding: 1em;
    display: flex;
    flex-direction: column;
    gap: 0.5em;
    border-radius: 20px;
    color: #4d4d4d;
  }

  .screen-1 .password input {
    outline: none;
    border: none;
  }

  .screen-1 .password input::-moz-placeholder {
    color: black;
    font-size: 0.9em;
  }

  .screen-1 .password input:-ms-input-placeholder {
    color: black;
    font-size: 0.9em;
  }

  .screen-1 .password input::placeholder {
    color: black;
    font-size: 0.9em;
  }

  .screen-1 .password ion-icon {
    color: #4d4d4d;
    margin-bottom: -0.2em;
  }

  .screen-1 .password .show-hide {
    margin-right: -5em;
  }

  .screen-1 .login {
    padding: 1em;
    background: #3e4684;
    color: white;
    border: none;
    border-radius: 30px;
    font-weight: 600;
  }

  .screen-1 .footer {
    display: flex;
    font-size: 0.7em;
    color: #5e5e5e;
    gap: 14em;
    padding-bottom: 10em;
  }

  .screen-1 .footer span {
    cursor: pointer;
  }

  button {
    cursor: pointer;
  }
  </style>
</head>

<body>
  <!-- partial:index.partial.html -->
  <form action="/signup" method="post" style="min-width: 800px">

    <div class="screen-1" style="padding-top: 200px">


      <div class="email" style="margin-bottom: 2rem">
        <label for="name">Name</label>
        <div class="sec-2">
          <ion-icon name="mail-outline" style="visibility: hidden"></ion-icon>
          <input type="text" name="name" placeholder="John Doe" value="<?= $_POST['name'] ?? '' ?>" />
        </div>
      </div>
      <div class="email">
        <label for="username">Username</label>
        <div class="sec-2">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="text" name="username" placeholder="john_doe123" autocomplete="off"
            value="<?= $_POST['username'] ?? '' ?>" />
        </div>
      </div>
      <div class="password" style="margin-top: -1rem">
        <label for="password">Password</label>
        <div class="sec-2">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input class="pas" type="password" name="password" placeholder="············" value="" />
        </div>
      </div>
      <button class="login">Signup</button>
      <div class="footer"><a class="login" href="http://localhost:3000/login"
          style="font-size: 1rem; text-decoration: none;background-color: #2e849a;color:white;padding: 0.7rem;border-radius: 30px;text-align: center;margin:auto">Login</a>
      </div>
      <ul style="list-style: none">
        <?php if (isset($errors['name'])) : ?>
        <li style="color: tomato" class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></li>
        <?php endif; ?>


        <?php if (isset($errors['username'])) : ?>
        <li style="color: tomato" class="text-red-500 text-xs mt-2"><?= $errors['username'] ?></li>
        <?php endif; ?>

        <?php if (isset($errors['password'])) : ?>
        <li style="color: tomato" class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
        <?php endif; ?>
      </ul>

    </div>
  </form>

  <!-- partial -->
</body>

</html>