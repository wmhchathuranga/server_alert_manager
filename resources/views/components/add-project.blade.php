
<div class="bg-gray-200 p-6 lg:p-8">
    <form action="/add_project" method="POST">
        @csrf
        <div class="mb-4">
            <label for="project_name" class="block text-gray-600">Project Name</label>
            <input type="text" id="project_name" name="project_name" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="domain_name" class="block text-gray-600">Domain Name</label>
            <input type="text" id="domain_name" name="domain_name" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="api_key" class="block text-gray-600">Telegram API Key</label>
            <input type="text" id="api_key" name="api_key" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="channel_id" class="block text-gray-600">Telegram Channel ID</label>
            <input type="text" id="channel_id" name="channel_id" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded">Submit</button>
    </form>
</div>