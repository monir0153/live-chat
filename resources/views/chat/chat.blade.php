<div class="flex h-full">
    <!-- Left Sidebar - User List -->
    <div class="w-1/4 bg-white border-r border-gray-200 flex flex-col">
        <!-- Header -->
        <div class="p-4 border-b border-gray-200 bg-blue-600 text-white">
            <h1 class="text-xl font-semibold">Chat App</h1>
            <p class="text-sm opacity-80">Welcome, {{ Auth::user()->name }}</p>
        </div>

        <!-- Search -->
        <div class="p-3 border-b border-gray-200">
            <div class="relative">
                <input type="text" placeholder="Search users..."
                    class="w-full p-2 pl-8 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

        <!-- User List -->
        <div class="flex-1 overflow-y-auto">
            @foreach ($users as $user)
                <div class="flex items-center p-3 border-b border-gray-200 hover:bg-gray-50 cursor-pointer"
                    onclick="userShow({{ $user }})">
                    <div class="relative">
                        <img src="https://i.pravatar.cc/300" alt="{{ $user->name }}" class="w-10 h-10 rounded-full">
                        <span
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></span>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium">{{ $user->name }}</h3>
                        <p class="text-xs text-gray-500 truncate max-w-xs">Last message preview...</p>
                    </div>
                    <div class="ml-auto text-xs text-gray-500">2 min</div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Right Side - Chat Area -->
    <div class="flex-1 flex flex-col">
        <!-- Top Bar - User Info -->
        <div class="p-4 border-b border-gray-200 bg-white flex items-center">
            <img src="https://i.pravatar.cc/300" alt="Current chat user" class="w-10 h-10 rounded-full">
            <div class="ml-3">
                <h3 class="font-medium" id="user-name">John Doe</h3>
                <p class="text-xs text-gray-500">Online</p>
            </div>
            <div class="ml-auto flex space-x-2">
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                </button>
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                </button>
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Messages Area -->
        <div class="flex-1 p-4 max-h-[70vh] overflow-y-auto bg-gray-50" id="messagesArea">
            <p class="text-center">click user to show data</p>
        </div>

        <!-- Message Input -->
        <div class="p-3 border-t border-gray-200 bg-white">
            <form action="{{ route('messages.send') }}" method="POST" class="flex items-center">
                @csrf
                <input type="hidden" id="reciverId" name="receiver_id" value="">
                <button type="button" class="p-2 rounded-full hover:bg-gray-100">
                    <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                        </path>
                    </svg>
                </button>
                <input type="text" name="message" placeholder="Type a message..."
                    class="flex-1 mx-2 p-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let messagesData = [];
        let currentReceiverId = document.getElementById('receiverId')?.value;
        Echo.private('message.{{ Auth::id() }}')
            .listen('MessageEvent', (data) => {
                console.log(data)
                if (data.sender_id == currentReceiverId || data.receiver_id == currentReceiverId) {
                    messagesData.push(data);
                }
            });
    });

    function userShow(user) {
        document.getElementById('user-name').innerText = user.name
        document.getElementById('reciverId').value = user.id;
        fetch(`messages/${user.id}`).then(response => response.json())
            .then(data => {
                if (data.status == true) {
                    messagesData = data.messages;
                    renderMessages();
                }

            });
    }

    function renderMessages() {
        const messagesArea = document.getElementById('messagesArea');
        messagesArea.innerHTML = '';
        messagesData.forEach(message => {
            let time = new Date(message.created_at);
            let options = {
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            };
            time = time.toLocaleString('en-US', options);
            messagesArea.innerHTML += `<div class="flex ${message.sender_id == {{ Auth::id() }} ? 'justify-end' : ''} mb-4">
                <div class="ml-3">
                    <div class="${message.sender_id == {{ Auth::id() }} ? 'bg-blue-500 text-white' : 'bg-white'} p-3 rounded-lg rounded-tl-none shadow-sm max-w-xs lg:max-w-md">
                        <p>${message.content}</p>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">${time}</p>
                </div>
            </div>`

        });
        messagesArea.scrollTop = messagesArea.scrollHeight;
    }
</script>
