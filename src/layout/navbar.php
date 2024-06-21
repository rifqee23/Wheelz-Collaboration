<?php
session_start();

?>

<header class="fixed z-50 flex flex-wrap w-full py-4 text-sm sm:justify-start sm:flex-nowrap bg-primary dark:bg-neutral-800">
  <nav class="max-w-[115rem]  items-center w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
    <a class="flex-none" href="index.php"><img class="w-72" src="./asset/logo.png" alt="" /></a>
    <div class="flex flex-row items-center gap-10 mt-5 text-2xl text-white sm:justify-end sm:mt-0 sm:ps-5">
      <a class="font-medium" href="index.php" aria-current="page">Home</a>
      <a class="font-medium hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="#about">About</a>
      <a class="font-medium hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="forum.php">Discussion</a>

      <a class="font-medium hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="car.php">Car</a>
      <a class="font-medium hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="#contact">Contact</a>

      <?php if (!isset($_SESSION['user'])) : ?>
        <button class="px-10 py-2 font-bold rounded-lg bg-secondary hover:opacity-75">
          <a href="login.php">Login</a>
        </button>
      <?php else : ?>
        <!-- <button class="px-10 py-2 font-bold rounded-lg bg-secondary hover:opacity-75"></button> -->

        <div class="relative inline-flex hs-dropdown">
          <button id="hs-dropdown-with-header" type="button" class="inline-flex items-center px-4 py-3 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm hs-dropdown-toggle gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            <?php echo 'Hi, ' . $_SESSION['user']['nama']; ?>
            <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m6 9 6 6 6-6" />
            </svg>
          </button>

          <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700" aria-labelledby="hs-dropdown-with-header">
            <div class="px-5 py-3 -m-2 bg-gray-100 rounded-t-lg dark:bg-neutral-700">
              <p class="text-sm text-gray-500 dark:text-neutral-400">
                Signed in as
              </p>
              <p class="text-sm font-medium text-gray-800 dark:text-neutral-300">
                <?php echo $_SESSION['user']['email'] ?>
              </p>
            </div>
            <div class="py-2 mt-2 first:pt-0 last:pb-0">
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="logout.php" data-hs-overlay="#hs-vertically-centered-modal">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                  <path d="M9 12h12l-3 -3" />
                  <path d="M18 15l3 -3" />
                </svg>
                Logout
              </a>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </nav>
</header>