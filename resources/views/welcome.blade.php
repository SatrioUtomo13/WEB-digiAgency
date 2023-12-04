<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Createve</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&family=Montserrat:wght@100;400;500;700&display=swap" rel="stylesheet">
</head>
<body class="h-[2000px]">
    <nav class="bg-transparent text-white flex justify-between px-2 py-5 fixed top-0 left-0 right-0 z-10">
        <a href="" class="font-montserrrat font-medium text-2xl">Createve</a>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </nav>

    {{-- === JUMBOTRON === --}}
    <section class="w-full h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white flex flex-col justify-center space-y-7 px-2 relative">

        <span class="font-bilbo text-5xl">Creative Thinking</span>

        <div class="flex flex-col font-montserrrat font-bold text-4xl">
            <span>Strategic Thinking,</span>
            <span>Tangible Result for</span>
            <span>Business</span>
        </div>

        <p class="text-lg leading-relaxed">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita repellendus nobis eveniet, quaerat possimus dolor.</p>

        <button class="bg-red-500 w-fit px-10 py-5 rounded-full absolute bottom-5 bg-gradient-to-r from-teal-400 to-cyan-500">Explore Now</button>

    </section>
</body>
</html>