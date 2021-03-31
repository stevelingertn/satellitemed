<div
    wire:ignore
    x-data
    {{ $attributes }}
>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"
            referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            // All your init stuff here, then the super important part at the bottom
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });

                // This section says that when you leave the text edit area, it will set whatever livewire variable you like to the currnt contents
                editor.on('blur', function (e) {
                @this.set('body', editor.getContent());
                });
            },
        });
    </script>
    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="body" wire:model="body" placeholder="Enter Body"></textarea>

</div>
