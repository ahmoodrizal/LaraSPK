<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Step 2 - Normalisasi Matriks
</h2>
<!-- New Table -->
<div class="w-2/3 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Alternative Code</th>
                    <th class="px-4 py-3">Alternative Name</th>
                    @foreach ($project->criterias as $criteria)
                        <th class="px-4 py-3">C{{ $loop->index + 1 }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @forelse ($project->alternatives as $alternative)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            A{{ $loop->index + 1 }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $alternative->name }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ number_format((($alternative->c1 - $data['min']['c0']) / 100 / ($data['max']['c0'] - $data['min']['c0']) / 100) * 10000, 3) }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ number_format((($alternative->c1 - $data['min']['c1']) / 100 / ($data['max']['c1'] - $data['min']['c1']) / 100) * 10000, 3) }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ number_format((($alternative->c1 - $data['min']['c2']) / 100 / ($data['max']['c2'] - $data['min']['c2']) / 100) * 10000, 3) }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ number_format((($alternative->c1 - $data['min']['c3']) / 100 / ($data['max']['c3'] - $data['min']['c3']) / 100) * 10000, 3) }}
                        </td>
                    </tr>
                @empty
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm text-center" colspan="7">No Alternatives Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
