<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>
    <main class="mt-6">
        <style>
            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                /* Minimum 200 piksel genişliğinde ve ekrana sığdığı kadar genişlikte sütunlar oluşturur */
                gap: 15px;
                /* Ögeler arasında 15 piksel boşluk bırakır */
            }

            /* İkonların üzerine gelince animasyonla büyüme efekti */
            .main-icon-without-slide:hover img {
                transform: scale(1.1);
                /* 1.1 oranında büyütme */
                transition: transform 0.3s ease;
                /* 0.3 saniyede geçiş */
            }
        </style>
        <div class="grid gap-15 lg:grid-cols-3 lg:gap-5">
            <div>
                <a href="{{ route('admin.users.index') }}"
                    class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                    <div class="main-icon-without-slide icon-png-container pd-lv4" data-type="img" data-id="681494"
                        data-premium="">
                        <img src="https://bothwellphil.co.uk/wp-content/uploads/2012/05/members-group.jpg" width="256"
                            height="256" alt="" title="" class="img-small">
                    </div>


                    <div class="pt-3 sm:pt-5">
                        <h2 class="text-xl font-semibold text-black dark:text-white">Users</h2>

                        <p class="mt-4 text-sm/relaxed">
                            <br>
                            You can edit users informations.You can delete,update or register a member here.
                        </p>
                    </div>
                </a>
            </div>


            <a href="{{ route('admin.posts.index') }}"
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                <div class="main-icon-without-slide icon-png-container pd-lv4" data-type="img" data-id="3161837"
                    data-premium="">
                    <img src="https://media.istockphoto.com/id/1401607744/vector/megaphone-loudspeaker-speaker-social-media-advertising-and-promotion-symbol-marketing.jpg?s=612x612&w=0&k=20&c=6mn25IhbAK4vCNpDwo2hySPhOO0hWwkkFDCaYw9tLLs="
                        width="128" height="128" alt="" title="" class="img-small">
                </div>


                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white"> Announcements</h2>

                    <p class="mt-4 text-m/relaxed">
                        You can upload a announcement here.
                        Also you can update and delete.
                    </p>
                </div>
            </a>

            <a href="{{ route('admin.product.index') }}"
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                <div class="main-icon-without-slide icon-png-container pd-lv4" data-type="img" data-id="2982808"
                    data-premium="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAJcH9p3Sd2VBR4igrnsuHd-1lm76IFccJqg&s"
                        width="64" height="64" alt="" title="" class="img-small">
                </div>

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Products</h2>

                    <p class="mt-4 text-m/relaxed">
                        You can add, edit and delete products.
                    </p>
                </div>
            </a>
        </div>
        <div id="social-media-box"
            class="bg-white p-4 shadow-lg rounded-lg w-60 h-auto overflow-y-auto cursor-pointer hidden">
            <div class="flex justify-center space-x-4">
                <a href="https://twitter.com/your_twitter_account" target="_blank" rel="noopener noreferrer"
                    class="text-blue-500 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 15c4.97 0 8.187-3.518 11.122-7.414C15.933 6.324 12.634 4 9 4c-1.308 0-2.536.452-3.542 1.267a1 1 0 01-1.425-1.4C4.212 2.94 6.48 2 9 2c4.57 0 8.424 3.575 8.424 8 0 .203-.006.407-.018.61A5.92 5.92 0 0020 13c-.048 3.39-2.587 8-8 8-1.922 0-3.704-.684-5.09-1.823a1 1 0 01-.157-1.4c.294-.386.58-.79.855-1.212C3.313 17.55 3.623 17 4 17zM4 15a1 1 0 011-1h.001M4 15c4.97 0 8.187-3.518 11.122-7.414C15.933 6.324 12.634 4 9 4c-1.308 0-2.536.452-3.542 1.267a1 1 0 01-1.425-1.4C4.212 2.94 6.48 2 9 2c4.57 0 8.424 3.575 8.424 8 0 .203-.006.407-.018.61A5.92 5.92 0 0020 13c-.048 3.39-2.587 8-8 8-1.922 0-3.704-.684-5.09-1.823a1 1 0 01-.157-1.4c.294-.386.58-.79.855-1.212C3.313 17.55 3.623 17 4 17zM4 15a1 1 0 011-1h.001" />
                    </svg>
                </a>
                <a href="https://facebook.com/your_facebook_account" target="_blank" rel="noopener noreferrer"
                    class="text-blue-500 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10V4a2 2 0 00-2-2H5a2 2 0 00-2 2v6m0 0h9m-9 0a2 2 0 012-2h7a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10zm7 4h4m-4 0a2 2 0 002 2h4a2 2 0 002-2m-2 2v4m0-4h4m-4 0a2 2 0 012-2h4a2 2 0 012 2" />
                    </svg>
                </a>
                <!-- Add more social media icons as needed -->
            </div>
        </div>

    </main>
    <div class="nav fixed bottom-1 left-6">
    </div>

    <div class="fixed bottom-6 right-6">
        <div id="draggable-message-box" class="draggable bg-white p-4 shadow-lg rounded-lg w-16 h-16 cursor-pointer">
            <svg class="w-4 h-4 text-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    d="M3.02832 10L10.2246 14.8166C10.8661 15.2443 11.1869 15.4581 11.5336 15.5412C11.8399 15.6146 12.1593 15.6146 12.4657 15.5412C12.8124 15.4581 13.1332 15.2443 13.7747 14.8166L20.971 10M10.2981 4.06879L4.49814 7.71127C3.95121 8.05474 3.67775 8.22648 3.4794 8.45864C3.30385 8.66412 3.17176 8.90305 3.09111 9.161C3 9.45244 3 9.77535 3 10.4212V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V10.4212C21 9.77535 21 9.45244 20.9089 9.161C20.8282 8.90305 20.6962 8.66412 20.5206 8.45864C20.3223 8.22648 20.0488 8.05474 19.5019 7.71127L13.7019 4.06879C13.0846 3.68116 12.776 3.48735 12.4449 3.4118C12.152 3.34499 11.848 3.34499 11.5551 3.4118C11.224 3.48735 10.9154 3.68116 10.2981 4.06879Z"
                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <div id="message-box" class="bg-white p-4 shadow-lg rounded-lg w-60 h-60 overflow-y-auto cursor-pointer hidden">
            @foreach ($messages as $message)
                <div class="message border-b border-gray-200 mb-4 pb-4">
                    <p><strong>Name:</strong> <span class="text-xs">{{ $message->name }}</span></p>
                    <p><strong>Email:</strong> <span class="text-xs">{{ $message->email }}</span></p>
                    <p><strong>Message:</strong> <span class="text-xs">{{ $message->message }}</span></p>
                    <p><strong>Created At:</strong> <span class="text-xs">{{ $message->created_at }}</span></p>

                    <!-- Cevap Formu -->
                    <form class="response-form mt-4" method="POST"
                        action="{{ route('admin.reply', ['message' => $message->id]) }}">
                        @csrf
                        <textarea name="reply" rows="3" class="w-full border rounded-md p-2"
                            placeholder="Your reply here..."></textarea>
                        <button type="submit"
                            class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Reply</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        // Mesaj kutusu ve mesaj ikonunu alma
        const messageBox = document.getElementById('message-box');
        const messageIcon = document.getElementById('draggable-message-box');

        // Mesaj ikonuna tıklanınca mesaj kutusunu gösterme işlevi
        messageIcon.addEventListener('click', () => {
            messageBox.classList.toggle('hidden');
        });

        // Mesaj kutusuna tıklandığında küçültme işlevi
        messageBox.addEventListener('click', (e) => {
            if (!e.target.closest('.message')) {
                messageBox.classList.add('hidden');
            }
        });

        // JavaScript kullanarak mesaj kutusunu sürükleyebilme
        const draggableMessageBox = document.getElementById('draggable-message-box');

        // Başlangıç konumu
        let initialX;
        let initialY;
        let offsetX = 0;
        let offsetY = 0;
        let isDragging = false;

        // Fare tuşuna basılırsa sürükleme işlemi başlar
        draggableMessageBox.addEventListener('mousedown', (e) => {
            isDragging = true;
            initialX = e.clientX - offsetX;
            initialY = e.clientY - offsetY;
        });

        // Fare hareket ettirilirse kutu da hareket eder
        draggableMessageBox.addEventListener('mousemove', (e) => {
            if (isDragging) {
                offsetX = e.clientX - initialX;
                offsetY = e.clientY - initialY;
                draggableMessageBox.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
            }
        });

        // Fare tuşu bırakılırsa sürükleme işlemi sona erer
        draggableMessageBox.addEventListener('mouseup', () => {
            isDragging = false;
        });

        // Mesaj kutusunu büyütme işlevi
        draggableMessageBox.addEventListener('click', () => {
            if (messageBox.classList.contains('w-60')) {
                messageBox.classList.remove('w-60', 'h-60', 'overflow-hidden');
                messageBox.classList.add('w-auto', 'h-auto');
            } else {
                messageBox.classList.remove('w-auto', 'h-auto');
                messageBox.classList.add('w-60', 'h-60', 'overflow-hidden');
            }
        });

        // Sayfayı yeniden gönderme işlevi
        const refreshForm = document.getElementById('refresh-form');
        refreshForm.addEventListener('submit', (e) => {
            e.preventDefault();
            window.location.reload();
        });
    </script>
</x-app-layout>