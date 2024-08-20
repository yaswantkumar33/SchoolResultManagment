@foreach ($decodedcode as $subject => $score)
    <tr style="--zi: 0">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize  ">
            {{ $subject }}
        </th>
        <td class="px-6 py-4">
            {{ $score }}
        </td>
        @if ($score < 50)
            <td class="px-6 py-4 text-red-500">
                Fail
            </td>
        @elseif ($score > 50 && $score < 65)
            <td class="px-6 py-4 text-yellow-500">
                Pass
            </td>
        @elseif ($score > 65)
            <td class="px-6 py-4 text-green-500">
                Pass
            </td>
        @endif
    </tr>
@endforeach
