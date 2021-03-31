<div wire:ignore x-data {{ $attributes }} >

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


</div>
