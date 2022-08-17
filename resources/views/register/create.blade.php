<x-layout>
    <section class="px-6 py-8 flex justify-center items-center">
        <main class="max-w-lg max-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">
                Register!
            </h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name"
                    >
                    name
                    </label>

                    <input class="border border-gray-400 py-2 w-96"
                           type="text"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           required>


                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 py-2 w-full"
                           type="text"
                           id="username"
                           name="username"
                           value="{{ old('username') }}"
                           required>

                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                    Email
                    </label>

                    <input class="border border-gray-400 py-2 w-96"
                           type="email"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required>

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                    password
                    </label>

                    <input class="border border-gray-400 py-2 w-full"
                           type="password"
                           id="password"
                           name="password"
                           required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-16 ">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>

            </form>

        </main>
    </section>
</x-layout>

