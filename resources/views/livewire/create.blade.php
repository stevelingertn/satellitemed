

<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full lg:max-w-5xl" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" placeholder="Enter Title" wire:model="title">
                            @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Slug:</label>
                            <input readonly type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="slug" placeholder="Slug" wire:model="slug">
                            @error('slug') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Body:</label>
                            <div wire:ignore>
                                <textarea class="body" name="body" wire:model.lazy="body"></textarea>
                                <script>

                                    var editor_config = {
                                        setup: function (editor) {
                                            editor.on('init change', function () {
                                                editor.save();
                                            });
                                            editor.on('change', function (e) {
                                            @this.set('body', editor.getContent());
                                            });
                                        },
                                        //inline: true,
                                        path_absolute : "/",
                                        selector: 'textarea.body',
                                        relative_urls: false,
                                        plugins: [
                                            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                                            "searchreplace wordcount visualblocks visualchars code fullscreen",
                                            "insertdatetime media nonbreaking save table directionality",
                                            "emoticons template paste textpattern"
                                        ],
                                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                                        file_picker_callback : function(callback, value, meta) {
                                            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                                            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                                            if (meta.filetype == 'image') {
                                                cmsURL = cmsURL + "&type=Images";
                                            } else {
                                                cmsURL = cmsURL + "&type=Files";
                                            }

                                            tinyMCE.activeEditor.windowManager.openUrl({
                                                url : cmsURL,
                                                title : 'Filemanager',
                                                width : x * 0.8,
                                                height : y * 0.8,
                                                resizable : "yes",
                                                close_previous : "no",
                                                onMessage: (api, message) => {
                                                    callback(message.content);
                                                }
                                            });
                                        }
                                    };

                                    tinymce.init(editor_config);

                                </script>

{{--                                <script>--}}
{{--                                    tinymce.init({--}}
{{--                                        selector:'textarea.body',--}}
{{--                                        plugins: "link image media imagetools",--}}
{{--                                        toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image'--}}
{{--                                        image_title: true,--}}
{{--                                        automatic_uploads: true,--}}
{{--                                        images_upload_url: '/upload',--}}
{{--                                        file_picker_types: 'image',--}}
{{--                                        file_picker_callback: function(cb, value, meta) {--}}
{{--                                            var input = document.createElement('input');--}}
{{--                                            input.setAttribute('type', 'file');--}}
{{--                                            input.setAttribute('accept', 'image/*');--}}
{{--                                            input.onchange = function() {--}}
{{--                                                var file = this.files[0];--}}

{{--                                                var reader = new FileReader();--}}
{{--                                                reader.readAsDataURL(file);--}}
{{--                                                reader.onload = function () {--}}
{{--                                                    var id = 'blobid' + (new Date()).getTime();--}}
{{--                                                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;--}}
{{--                                                    var base64 = reader.result.split(',')[1];--}}
{{--                                                    var blobInfo = blobCache.create(id, file, base64);--}}
{{--                                                    blobCache.add(blobInfo);--}}
{{--                                                    cb(blobInfo.blobUri(), { title: file.name });--}}
{{--                                                };--}}
{{--                                            };--}}
{{--                                            input.click();--}}
{{--                                        }--}}
{{--                                    });--}}
{{--                                </script>--}}
                        </div>
                            @error('body') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="author" placeholder="Enter Author" wire:model="author">
                            @error('author') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Save
          </button>
        </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
            </form>
        </div>

    </div>
</div>



