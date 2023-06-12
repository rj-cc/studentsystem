@include('partials.header')
    <title>Student Data</title>
</head>
<body class="bg-gray-100">
    <x-nav />
    <x-messages />
    <header class="max-w-lg mx-auto">
        <a href="#"><h1 class="py-8 max-w-lg mx-auto text-gray-700 text-4xl text-white font-bold text-center">Student List</h1></a>
    </header>

    <section>
        <div class="overflow-x-auto relative">
            <table class="mx-auto text-sm text-center text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">First Name</th>
                        <th scope="col" class="py-3 px-6">Last Name</th>
                        <th scope="col" class="py-3 px-6">Gender</th>
                        <th scope="col" class="py-3 px-6">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr class="bg-gray-800 text-white border-b">
                        <td class="py-4 px-6">{{$student->first_name}}</td>
                        <td class="py-4 px-6">{{$student->last_name}}</td>
                        <td class="py-4 px-6">{{$student->gender}}</td>
                        <td class="py-4 px-6">{{$student->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@include('partials.footer')
