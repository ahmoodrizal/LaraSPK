<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Criteria Data
</h2>
<!-- New Table -->
@if ($project->criterias->count() != 4)
    <div class="mb-6">
        <a href="{{ route('dashboard.createCrt', $project->slug) }}"
            class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Create Criteria Data
        </a>
    </div>
@endif
<div class="w-2/3 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Criteria Code</th>
                    <th class="px-4 py-3">Criteria Name</th>
                    <th class="px-4 py-3">Criteria Weight</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @forelse ($project->criterias as $criteria)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            C{{ $loop->index + 1 }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $criteria->name }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $criteria->weight }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <a href="#">Edit Criteria</a>
                        </td>
                    </tr>
                @empty
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm text-center" colspan="5">No Criteria Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
