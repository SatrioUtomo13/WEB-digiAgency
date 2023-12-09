@extends('layouts.main')

@section('content')
    {{-- === JUMBOTRON === --}}
    <section class="w-full h-fit min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white">
        <div class="flex flex-col justify-center space-y-7 px-2 relative h-screen">
            <span class="font-bilbo text-5xl">Creative Thinking</span>

            <span class="font-montserrrat font-bold text-4xl">Strategic Thinking, Tangible Result for Business</span>

            <p class="text-lg leading-relaxed">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita repellendus nobis eveniet, quaerat possimus dolor.</p>

            <button class="w-fit px-10 py-4 font-bold rounded-full absolute bottom-5 bg-gradient-to-r from-teal-400 to-cyan-500">Explore Now</button>
        </div>
    </section>
@endsection