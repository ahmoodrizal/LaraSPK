<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Step 3 - Matriks * Criteria Weight
</h2>
<form action="{{ route('dashboard.calculate', $project->slug) }}" method="post">
    <input type="hidden" name="project_id" value="{{ $project->id }}">
    @csrf
    <!-- New Table -->
    <div class="w-full lg:w-2/3 overflow-hidden rounded-lg shadow-xs mb-6">
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
                                {{ number_format((($alternative->c1 - $data['min']['c0']) / 100 / ($data['max']['c0'] - $data['min']['c0']) / 1000) * (1000 * $project->criterias[0]->weight), 2) }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ number_format((($alternative->c2 - $data['min']['c1']) / 100 / ($data['max']['c1'] - $data['min']['c1']) / 1000) * (1000 * $project->criterias[1]->weight), 2) }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ number_format((($alternative->c3 - $data['min']['c2']) / 100 / ($data['max']['c2'] - $data['min']['c2']) / 1000) * (1000 * $project->criterias[2]->weight), 2) }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ number_format((($alternative->c4 - $data['min']['c3']) / 100 / ($data['max']['c3'] - $data['min']['c3']) / 1000) * (1000 * $project->criterias[3]->weight), 2) }}
                            </td>
                            <input type="hidden" name="id[]" value="{{ $alternative->id }}">
                            <input type="hidden" name="totalScore[]"
                                value="{{ number_format((($alternative->c1 - $data['min']['c0']) / 100 / ($data['max']['c0'] - $data['min']['c0']) / 1000) * (1000 * $project->criterias[0]->weight), 2) + number_format((($alternative->c2 - $data['min']['c1']) / 100 / ($data['max']['c1'] - $data['min']['c1']) / 1000) * (1000 * $project->criterias[1]->weight), 2) + number_format((($alternative->c3 - $data['min']['c2']) / 100 / ($data['max']['c2'] - $data['min']['c2']) / 1000) * (1000 * $project->criterias[2]->weight), 2) + number_format((($alternative->c4 - $data['min']['c3']) / 100 / ($data['max']['c3'] - $data['min']['c3']) / 1000) * (1000 * $project->criterias[3]->weight), 2) }} ">
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
    <div class="w-full lg:w-2/3">
        <button type="submit"
            class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
            Calculate Result
        </button>
    </div>
</form>
