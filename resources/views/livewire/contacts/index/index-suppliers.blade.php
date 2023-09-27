<div>
    {{-- Do your work, then step back. --}}
    <!-- Content -->
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Contacts /</span> Suppliers</h4>
    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Data Suppliers</h5>
        </div>
        <div class="card-header border-bottom">
            <div class="row">
                <div class="col-sm-12 col-md-1 mb-2">
                    <select class="form-select" aria-label="5">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-11">
                    <div class="d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1">
                        <div class="d-flex align-items-start align-items-sm-center mb-2">
                            <div class="button-wrapper">
                              <label for="upload" class="btn btn-success me-2" tabindex="0">
                                    <span class="ti-xs ti ti-upload me-1"></span>Import

                                <input
                                  type="file"
                                  id="upload"
                                  class="account-file-input"
                                  hidden
                                  accept="image/png, image/jpeg" />
                              </label>
                            </div>
                          </div>
                        <div class="d-flex align-items-start align-items-sm-center mb-2">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text" id="basic-addon-search31"><i
                                        class="ti ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search..."
                                    aria-label="Search..." aria-describedby="basic-addon-search31" />
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <i class="ti ti-brand-angular ti-lg text-danger me-3"></i>
                            <span class="fw-medium">Angular Project</span>
                        </td>
                        <td>Albert Cook</td>
                        <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Christina Parker">
                                    <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="ti ti-pencil me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Content -->
</div>
