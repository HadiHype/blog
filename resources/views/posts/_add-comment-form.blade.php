@auth
    <x-panel>
        <form method="POST" action="/posts/{{$post->slug}}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{auth()->id()}}" alt="" width="40" height="40" class=" rounded-full">
                <h2 class="ml-4">
                    Do you want to participate?
                </h2>


            </header>

            <div class="mt-6">
                <textarea cols="10" rows="5" name="body" class="w-full text-sm focus:outline-none focus:ring" placeholder="Quick, Think of something to say!" required></textarea>

                @error('body')
                <span class="text-xs">{{$message}}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">

                <x-form.button> Post </x-form.button>

            </div>

        </form>

    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">
            Register
        </a>
        or
        <a href="/login" class="hover:underline">
            Login in to comment
        </a>
    </p>
@endauth
