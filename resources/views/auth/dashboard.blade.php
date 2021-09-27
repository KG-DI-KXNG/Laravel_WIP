@extends("layouts.app")


@section("content")

    <h1 class="text-6xl text-black-400 text-center">Dashboard</h1>

    <!-- component -->
<section class="max-w-7xl ml-60 mx-auto px-4 sm:px-6 lg:px-4 mb-12">
    <article>
        <!-- <h2 class="text-2xl font-extrabold text-gray-900">BLOG</h2> -->
        <section class="mt-6 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">
            <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                style="background-image: url('https://images.unsplash.com/photo-1623479322729-28b25c16b011?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1740&q=80');">
                <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                    <h3 class="text-center">
                        <a class="text-white text-2xl font-bold text-center" href="/courses">
                            <span class="absolute inset-0"></span>
                            Courses
                        </a>
                    </h3>
                </div>
            </article>
            <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                style="background-image: url('https://images.unsplash.com/photo-1569012871812-f38ee64cd54c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');">
                <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                    <h3 class="text-center">
                        <a class="text-white text-2xl font-bold text-center" href="/mycourses">
                            <span class="absolute inset-0"></span>
                            My courses
                        </a>
                    </h3>
                </div>
            </article>
        </section>
    </article>
</section>

@endsection
