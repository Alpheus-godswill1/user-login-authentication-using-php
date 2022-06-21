<?php session_start();?>
<?php include "./config.php";?>
<?php include "./header.php";?>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="./function.php" method="POST">
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="username">Username</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="cus_name" type="text" required="" value="<?php if(isset($_COOKIE['UName'])) echo $_COOKIE['UName'];?>" placeholder="User Name" aria-label="username">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password">Password</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="cus_pass" type="password" required="" value="<?php if(isset($_COOKIE['passIN']))echo $_COOKIE['passIN'] ;?>" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="login_in">Login</button>
          <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
            Forgot Password?
          </a>
        </div>
        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="./register.php">
          Not registered ?
        </a>
        <label for="checkbox">
          <input type="checkbox" name="remind" class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" value="" > keep me signed in?
        </label>
      </form>

    </div>
  </div>
</div>
</body>

</html>
