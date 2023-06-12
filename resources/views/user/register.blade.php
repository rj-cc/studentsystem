@include('partials.header')
    <title>Student Registration</title>
</head>
<body class="bg-gray-100">
    <header class="max-w-lg mx-auto">
        <a href="#"><h1 class="py-8 max-w-lg mx-auto text-4xl text-gray-700 text-white font-bold text-center">Student Registration</h1></a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <h3 class="font-bold text-2xl">Welcome to Student System</h3>
        <p class="text-gray-600 pt-2 mb-6">Register an account</p>
        <form action="/store" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">First Name</label>
                <input id="first_name" name="first_name" type="text" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last Name</label>
                <input id="last_name" name="last_name" type="text" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                <select name="gender" id="gender" class="px-2 text-gray-700 text-sm font-bold bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400">
                    <option selected>Select your gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                <input id="email" name="email" type="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                <input id="password" type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400">
            </div>
            <input type="submit" class="bg-gray-600 hover:bg-gray-700 text-white py-2 font-bold shadow-lg hover:shadow-xl rounded" value="Sign up">
        </form>
    </main>
@include('partials.footer')
