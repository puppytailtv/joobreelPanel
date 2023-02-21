<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mt-1 mb-2 content-header-left col-12">
                <div class="breadcrumbs-top">
                    <h5 class="float-left pr-1 mb-0 content-header-title">Colors</h5>
                    <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="p-0 pl-1 mb-0 breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Colors
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Colors List</h4>
                        </div>
                        <div class="card-body">
                            <a href="{{url('/')}}/colors/edit"><button class="btn btn-secondary">Create</button></a>
                            <div class="table-responsive mt-2">
                                <livewire:tables.colors-table />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
