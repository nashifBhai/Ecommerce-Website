<div>
    <div class="containers" style="padding:30px 0;"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add New Slide
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.homeslider') }}" class="btn btn-success pull-right">All Slides </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addSlide">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Title" class="form-control input-md" wire:model="title"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Subtitle</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Subtitle" class="form-control input-md" wire:model="subtitle"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Price</label>
                            <div class="col-md-4">
                                <textarea class="form-control" placeholder="Price" wire:model="price"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Link</label>
                            <div class="col-md-4">
                                <textarea class="form-control" placeholder="Link" wire:model="link"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file" wire:model="image"/>
                                @if ($image)
                                    <img src = "{{ $image->temporaryUrl() }}" width="120" />
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="status">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
