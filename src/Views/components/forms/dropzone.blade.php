@if(!$multiple)
    <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
        <div class="fallback">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="projectCoverUploads">
                <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
            </div>
        </div>
        <div class="dz-preview dz-preview-single">
            <div class="dz-preview-cover">
                <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
            </div>
        </div>
    </div>
@else
    <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://">
        <div class="fallback">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple>
                <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
            </div>
        </div>
        <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
            <li class="list-group-item px-0">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="avatar">
                            <img class="avatar-img rounded" src="..." alt="..." data-dz-thumbnail>
                        </div>
                    </div>
                    <div class="col ml--3">
                        <h4 class="mb-1" data-dz-name>...</h4>
                        <p class="small text-muted mb-0" data-dz-size>...</p>
                    </div>
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-dz-remove>
                                    Remove
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endif