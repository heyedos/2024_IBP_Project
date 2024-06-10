<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Announcements') }}
        </h2>
        <!-- Yeni Post Oluşturma Butonu -->

        <!-- Geri Dön Butonu -->

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h1>Announcements</h1>
                        <a href="{{ route('posts.create') }}"
                            class="btn btn-primary">{{ __('Create Announcements') }}</a>
                    </div>
                    <hr />
                    <a href="{{ url()->previous() }}" class="btn btn-secondary ml-auto">{{ __('Go Back') }}</a>
                    <hr />

                    <!-- Arama Formu -->
                    <form action="{{ route('posts.search') }}" method="GET" class="mt-3">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Search for posts...">
                            <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
                        </div>
                    </form>

                    <ul class="list-group mt-3">
                        @foreach ($posts as $post)
                            <li class="list-group-item mt-4">
                                <div>
                                    <h3>{{ $post->title }}</h3>
                                    <p>{{ $post->content }}</p>
                                </div>
                                <div>
                                    <!-- Post Düzenleme Butonu -->
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                                    <!-- Post Silme Butonu -->
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>