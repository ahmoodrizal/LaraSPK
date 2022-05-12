<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Step 1 - Mencari Value Min & Max
</h2>
<!-- New Table -->
<div class="w-2/3 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Criteria Code</th>
                    <th class="px-4 py-3">Criteria Name</th>
                    <th class="px-4 py-3">Min</th>
                    <th class="px-4 py-3">Max</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($project->criterias as $criteria)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            C{{ $loop->index + 1 }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $criteria->name }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $data['min']['c' . $loop->index] }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $data['max']['c' . $loop->index] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
