<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Step 4 - Ranking
</h2>
<!-- New Table -->
<div class="w-full lg:w-2/3 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap" id="myTable" name="myTable">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Rank</th>
                    <th class="px-4 py-3">Alternative Name</th>
                    <th class="px-4 py-3">Total Score</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @forelse ($project->alternatives as $alternative)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            {{ $loop->index + 1 }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $alternative->name }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $alternative->result }}
                        </td>
                    </tr>
                @empty
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm text-center" colspan="2">No Alternative Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
