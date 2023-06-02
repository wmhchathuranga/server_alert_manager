<div class="bg-gray-200 p-6 lg:p-8">
    <form class="mb-4">
        <div class="flex mb-2">
            <div class="mr-2">
                <label for="filter_project" class="block text-gray-600">Filter by Project</label>
                <input type="text" id="filter_project" name="filter_project"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div>
                <label for="filter_severity" class="block text-gray-600">Filter by Severity Level</label>
                <select id="filter_severity" name="filter_severity"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">All</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
        </div>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded">Filter</button>
    </form>

    <table class="min-w-full divide-y divide-gray-300">
        <thead>
            <tr>
                <th class="py-3 px-4 text-left text-gray-600">Log ID</th>
                <th class="py-3 px-4 text-left text-gray-600">Project ID</th>
                <th class="py-3 px-4 text-left text-gray-600">Severity Level</th>
                <th class="py-3 px-4 text-left text-gray-600">Message Content</th>
                <th class="py-3 px-4 text-left text-gray-600">Generated Time</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example log rows -->
            @foreach ($logs as $log)
                <tr class="bg-gray-300">
                    <td class="py-4 px-6 text-gray-600">{{ $log->id }}</td>
                    <td class="py-4 px-6 text-gray-600">{{ $log->project_id }}</td>
                    <td class="py-4 px-6 text-gray-600">{{ $log->severity_level }}</td>
                    <td class="py-4 px-6 text-gray-600">{{ $log->msg_content }}</td>
                    <td class="py-4 px-6 text-gray-600">{{ $log->created_at }}</td>
                </tr>
            @endforeach
            {{-- {{ $logs->links() }} --}}
        </tbody>
    </table>
</div>
