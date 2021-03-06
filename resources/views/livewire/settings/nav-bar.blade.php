<div class="bg-white rounded-t">
    <nav class="flex flex-col sm:flex-row">
        <a href="{{ route('settings.general') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none {{ $page == 'general' ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }} ">
            General
        </a>
        <a href="{{ route('settings.notifications') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none  {{ $page == 'notifications' ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }}">
            Notifications
        </a>
        <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
            Advanced
        </button>
        
    </nav>
</div>
