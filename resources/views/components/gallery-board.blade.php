<div class="max-w-sm rounded overflow-hidden shadow-2xl mt-5">
    <div style="height: 172px;">
        <img style="height: inherit;" class="mx-auto sticky" style="top: 50%" src="{{ $image }}"
            alt="Sunset in the mountains">
    </div>
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 ps2p">
            <p class="text-gray-900 text-center text-base ps2p context-text pb-2 font-bold">
                {{ $name }}
            </p>
            <p class="text-gray-600 ps2p context-text" style="height: 120px;">
                {{ $text }}
            </p>
        </div>
    </div>
    <div class="px-6 pt-4 pb-2">
        <table class="w-full">
            <tr>
                <td class="flex">
                    <div>
                        <img src="/images/minecraft-heart.png" width="30" height="30" alt="">
                    </div>
                    <div class="pl-2 ps2p">
                        @if ($life != 0)
                            {{ $life }}
                        @else
                            <p class="title-text pt-1">Not implemented yet</p>
                        @endif
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
