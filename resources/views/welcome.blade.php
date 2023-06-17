<x-base-layout>
    <div class="flex justify-center text-white">
       <h1>Futebol Total</h1>
    </div>

    <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">

            <form action="{{route('find.team')}}" method="POST" class="flex m-3 p-3 text-center">
                @csrf
                <input name="search" type="text" placeholder="search teams" class="p-3">

                <button class="btn btn-success" type="submit">
                    Teams
                </button>
            </form>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">

            <form action="{{route('find.player')}}" method="POST" class="flex m-3 p-3 text-center">
                @csrf
                <input name="search" type="text" placeholder="search players" class="p-3">

                <button class="btn btn-success" type="submit">
                    Players
                </button>
            </form>

        </div>
    </div>

    <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            <div class="flex items-center gap-4">

            </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>

</x-base-layout>
