<div class="page-wrapper">
    <div class="flex flex-col w-full border-opacity-50 rounded-box gap-4">
        <div id="qr-reader" class="card bg-base-300 rounded-box place-items-center">
        </div>
    </div>

    <input type="checkbox" class="modal-toggle" @checked($showInfo) />
    <div class="modal" role="dialog">
        <div class="modal-box max-w-sm">

            @if ($showInfo)
                <div class="dialog ">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
                        wire:click="CloseInfo">✕</button>
                </div>
                <div class="space-y-4 my-4">

                    <div class="grid gap-4 w-full">
                        <h1 class="font-semibold text-blue-600">
                            <span class="flex items-center">
                                <x-tabler-info-circle ini milik unit : class="" />
                                <label for="">
                                    Sparepart ini milik unit :
                                </label>
                            </span>
                        </h1>
                    </div>
                    <hr>
                    <div class="grid gap-4">
                        <span class="font-semibold">{{ $information?->name }}</span>
                        <span class="font-semibold text-blue-700">{{ $information?->description ?? 'N/A' }}</span>
                    </div>
                </div>
            @endif
        </div>
    </div>


    @push('script')
        <script src="https://unpkg.com/html5-qrcode?id=456" ></script>

        <script type="text/javascript">
            var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;

            function onScanSuccess(decodedText, decodedResult) {
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;
                    // Handle on success condition with the decoded message.
                    // console.log('Scan result ${decodedText}', decodedResult);
                    console.log(lastResult);
                    // Livewire.dispatch('scanQr');
                    Livewire.dispatch('scanQr', [lastResult]);
                }
            }

            function onScanFailure(error) {
                // console.error('Sacan result Error = ${error}');
            }

            let html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 10,
                    qrbox: 500,
                    supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA],
                }
            );
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        </script>
    @endpush
</div>
