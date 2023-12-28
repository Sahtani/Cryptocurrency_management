<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&family=Inter:wght@100&family=Ruda&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&family=Inter:wght@100&family=Ruda&display=swap" rel="stylesheet">


</head>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            fontFamily: {
                'Saira': ['Saira Condensed', 'sans-serif']

            },
            extend: {
                colors: {
                    'dark': '#1e1b4b',
                    'secondary': '#312e81',
                    'blueText': '#1e40af',
                    'primary': '#1d4ed8',
                    'blutextbtn': '#2563eb',
                    'blueText2': '#3b82f6',
                    'background': '#60a5fa',
                    'btn': '#93c5fd',
                },

            },
        },
    }
</script>

<body class="bg-blueText2 h-screen mt-36">
    <div class="border-2 border-dark bg-white md:m-auto md:mt-12 md:w-1/2 grid grid-cols-1 md:grid mx-2 md:grid-cols-2 md:gap-10 rounded-lg mt-12">
        <img class=" md:m-auto md:ml-4" src="<?= BASE_URL_ASSETS ?>img/undraw_engineering_team_a7n2.svg" alt="signup">
        <div class="flex flex-col items-center   md:w-full mt-10  ">
            <h1 class="text-2xl font-bold  text-center mt-3">Sign up</h1>
            <form action="<?= BASE_URL ?>/user/Usersignup" method="post" class="flex flex-col mt-4 gap-4 w-full">
                <div class="mx-4">
                    <input class="border-2 border-dark px-2 py-2   w-full  " type="text" id="fisrtname" name="firstname" required placeholder="First Name">
                </div>
                <div class="mx-4">
                    <input class="border-2 border-dark w-full px-2 py-2  " type="text" id="lastname" name="lastname" required placeholder="Last Name">
                </div>
                <div class="mx-4">
                    <input class="border-2 border-dark  w-full px-2 py-2" type="email" id="username" name="email" required placeholder="E-mail">
                </div>
                <div class="mx-4">
                    <input class="border-2 border-dark   w-full px-2 py-2" type="password" id="password" name="password" required placeholder="Password">
                </div>
                <p class="text-black     text-center mb-1">
                    Alreadt Have an account? <a href="<?= BASE_URL ?>/user/log_in" class="font-bold">LogIn</a></p>
                <div class="mx-4">
                    <button class="px-4 py-3 text-white w-full  bg-dark mb-5" name="submit" type="submit">Sign Up</button>
                </div>
            </form>
            <p class="text-red-500 text-center mb-2">
                <?= $this->view_data["error"]; ?>
            </p>

        </div>
    </div>



</body>

</html>