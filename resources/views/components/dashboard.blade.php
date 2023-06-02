<div class="bg-gray-200 p-6 lg:p-8">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 ml-2 rounded"
        style="float: right; margin-top: 10px;"> Add Project </button>
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
