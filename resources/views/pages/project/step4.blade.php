<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Step 4 - Ranking
</h2>
<!-- New Table -->
<div class="w-2/3 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>

                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Alternative Name</th>
                    <th class="px-4 py-3">Total Score</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($project->alternatives as $alternative)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            {{ $alternative->name }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ number_format((($alternative->c1 - $data['min']['c0']) / 100 / ($data['max']['c0'] - $data['min']['c0']) / 1000) * (1000 * $project->criterias[0]->weight), 2) + number_format((($alternative->c2 - $data['min']['c1']) / 100 / ($data['max']['c1'] - $data['min']['c1']) / 1000) * (1000 * $project->criterias[1]->weight), 2) + number_format((($alternative->c4 - $data['min']['c3']) / 100 / ($data['max']['c3'] - $data['min']['c3']) / 1000) * (1000 * $project->criterias[3]->weight), 2) + number_format((($alternative->c4 - $data['min']['c3']) / 100 / ($data['max']['c3'] - $data['min']['c3']) / 1000) * (1000 * $project->criterias[3]->weight), 2) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
