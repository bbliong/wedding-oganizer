 @extends('layouts.master')


@section('title')
<link  href="/plugins/fancybox-master/dist/jquery.fancybox.min.css" rel="stylesheet">
<script src="/plugins/fancybox-master/dist/jquery.fancybox.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title> Gallery {{ $view->name }} </title>
<script type="text/template" id="qq-template-manual-trigger">
        <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="buttons">
                <div class="qq-upload-button-selector qq-upload-button">
                    <div>Select files</div>
                </div>
                <button type="button" id="trigger-upload" class="btn btn-primary" style="margin-left: 10px;">
                    <i class="icon-upload icon-white"></i> Upload
                </button>
                <br>
                <h3 style="background-color: #A6FF9F;color : #5C5C5C; padding :0 2px;text-align: center;"> Max 5mb </h3>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <div class="qq-progress-bar-container-selector">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                    <span class="qq-upload-file-selector qq-upload-file"></span>
                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                    <span class="qq-upload-size-selector qq-upload-size"></span>
                    <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                    <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
</script>
@endsection

@section('content')
<!-- Large modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div id="fine-uploader-manual-trigger"></div>
    </div>
  </div>
</div>
<!-- Large Modal -->
<div class="container-gallery">
	<div class="header-gallery">
		<h3> Gallery {{ $view->name }} </h3></br>
		<p> {{ $view->description }} </p>
		<input type="hidden" id="id" value="{{$view->id_gallery}}"
		<div id="fine-uploader-manual-trigger"></div>
	</div>
	<div class="col-xs-12">
		<div class="tambah">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"> Tambah </button>
		</div>
	</div>
	 <div id="fine-uploader-manual-trigger"></div>
	<div class="col-xs-12 flex-gallery">
	@foreach ($view->singles as $single)
		<div class="img-container" style="cursor: pointer;"  data-fancybox="images" href="/uploads/gallery/{{$view->name}}/{{$single->name_photo}}">
			<a  class="delete-photo"  data-id="{{$single->id_photo}}" data-token="{{ csrf_token() }}">x</a>
			<img src="/uploads/gallery/{{$view->name}}/{{$single->name_photo}}" class="img-mini-preview">
			<div class="name-caption">{{$single->name_photo}} </div>
		</div>
	@endforeach
	</div>
</div>
 @endsection


 @section('js_tambah')
 <script>
    	var id = $('#id').val();
    	console.log(id);
        $('#fine-uploader-manual-trigger').fineUploader({
            template: 'qq-template-manual-trigger',
            request: {
                endpoint: '/admin/gallery/' + id,
                 customHeaders: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
            },
            thumbnails: {
                placeholders: {
                    waitingPath: '/plugins/fine-uploader/placeholders/waiting-generic.png',
                    notAvailablePath: '/plugins/fine-uploader/placeholders/not_available-generic.png'
                }
            },
            autoUpload: false,
             callbacks: {
                onAllComplete: function() {
                window.location.href = "/admin/gallery/" + id;
                 }
            },
            failedUploadTextDisplay: {
                mode: 'custom',
                responseProperty: 'error'
            }
        });

        $('#trigger-upload').click(function() {
            $('#fine-uploader-manual-trigger').fineUploader('uploadStoredFiles');
        });

          $('.delete-photo').on('click', function(e){
            e.preventDefault();
            var photo_id = ($(this).attr('data-id'));
            var token = $(this).data("token");
            var confirm  = window.confirm("Are you sure to delete this photo ? \n press OK button to delete or close to reject your decision");
            if (confirm == true) {
              $(this).parent(".img-container").fadeOut("slow", function(){
                $.ajax ({
                    type   : "DELETE",
                    url    : "/admin/gallery/" + id,
                    data   : { 
                                "photo_id" : photo_id,
                                "_method": 'DELETE',
                                "_token": token},
                    success : function(lala){
                    	 	console.log(lala);
                            // 
                          }
                  });
              });
            }
        });
          $(document).ready(function(){
            $().fancybox({
              selector : '[data-fancybox="images"]',
              loop     : true
            });
        });
    </script>
@endsection