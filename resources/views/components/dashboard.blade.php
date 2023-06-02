<div class="bg-gray-200 p-6 lg:p-8">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 ml-2 rounded"
        style="float: right; margin-top: 10px;" id="openModalButton"> Add Project </button>
    <table class="min-w-full divide-y divide-gray-300">
        <thead>
            <tr>
                <th class="py-3 px-4 text-left text-gray-600">No</th>
                <th class="py-3 px-4 text-left text-gray-600">Project Name</th>
                <th class="py-3 px-4 text-left text-gray-600">Domain Name</th>
                <th class="py-3 px-4 text-left text-gray-600">Date</th>
                <!-- <th class="py-3 px-4 text-left text-gray-600">Developer</th> -->
                <th class="py-3 px-4 text-left text-gray-600">API Key</th>
                <th class="py-3 px-4 text-left text-gray-600">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example project rows -->
            @foreach ($projects as $project)
                <tr class="bg-gray-300">
                    <td class="py-4 px-6 text-gray-600">{{ $project->id }}</td>
                    <td class="py-4 px-6 text-gray-600">{{ $project->project_name }}</td>
                    <td class="py-4 px-6 text-gray-600">{{ $project->domain_name }}</td>
                    <td class="py-4 px-6 text-gray-600">{{ $project->created_at }}</td>
                    <td class="py-4 px-6 text-gray-600">{{ $project->project_api_key }}<button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 ml-2 rounded">Copy</button>
                    </td>
                    <td class="py-4 px-6">
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">Delete</button>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 ml-2 rounded"><a
                                href="{{ route('logs') . '/' . $project->project_api_key }}">Logs</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="myModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">

        <div class="bg-white p-6 lg:p-8">
            <form action="{{ route('project.create') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="project_name" class="block text-gray-600">Project Name</label>
                    <input type="text" id="project_name" name="project_name"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="domain_name" class="block text-gray-600">Domain Name</label>
                    <input type="text" id="domain_name" name="domain_name"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="api_key" class="block text-gray-600">Telegram API Key</label>
                    <input type="text" id="api_key" name="api_key"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="channel_id" class="block text-gray-600">Telegram Channel ID</label>
                    <input type="text" id="channel_id" name="channel_id"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded">Submit</button>
            </form>
            <button id="closeModalButton"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                X
            </button>
        </div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const openModalButton = document.getElementById("openModalButton");
        const closeModalButton = document.getElementById("closeModalButton");
        const modal = document.getElementById("myModal");

        openModalButton.addEventListener("click", function() {
            modal.classList.remove("hidden");
        });

        closeModalButton.addEventListener("click", function() {
            modal.classList.add("hidden");
        });
    });
</script>
