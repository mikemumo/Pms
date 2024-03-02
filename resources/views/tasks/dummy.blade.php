<div class="card">
    <!--begin::Card Body-->
    <div class="card-body p-5 pt-0 pb-0">
        <!--begin::Section-->
        <div class="pb-10">
            <div class="py-5">
                <div class="rounded border-dashed p-10">
                    <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bolder text-dark fs-3 me-2">Create Schedule Data</span>
                            <span class="text-muted mt-2 fw-bold fs-6"> - Form to create a new data</span>
                        </h3>
                    <form action="http://localhost/project-management-system-main/admin/addschedule" method="post">
                        <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                            <a href="http://localhost/project-management-system-main/admin/schedule/schedule" class="btn btn-light mx-5">Back</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form></div>
                    <hr class="mb-5">

                    <div class="d-flex mb-10 mt-10">
                        <div class="col-sm-6 px-5">
                            <h3 class="card-title align-items-start flex-column ">
                                <span class="card-label fw-bolder text-dark fs-2">Investment</span>
                                <span class="text-muted mt-2 fw-bold fs-6">
                                                                                <span rel="tooltip" title="detail" class="badge badge-light-success mx-3">new</span>
                                </span>
                            </h3>
                            <div class=" ">
                                <span class="card-label fs-6"><b>Description : </b><br>do an assignment for the work</span>
                            </div>
                        </div>
                        <div class="col-sm px-5">
                            <div class="mb-3">
                                <span class="card-label fs-6"><b>Priode : </b>Once</span>
                            </div>
                            <div class="mb-3">
                                <span class="card-label fs-6"><b>Start Date : </b>01-02-2024</span>
                            </div>
                            <div class="mb-3">
                                <span class="card-label fs-6"><b>End Date : </b>28-02-2024 </span>
                            </div>
                            <div class="mb-3">
                                <span class="card-label fs-6"><b>Attachment : </b> </span> 
                                <a href="https://help.sap.com/docs/SAP_S4HANA_ON-PREMISE/4dd8cb7b1c484b4b93af84d00f60fdb8/1ad4b65334e6b54ce10000000a174cb4.html" rel="tooltip" title="Detail" target="_blank" class="badge badge-success">
                                <i class="bi bi-link text-white"></i> Link </a>
                            </div>
                        </div>
                        <div class="col-sm px-5">
                            <div class="mb-3">
                                <span class="card-label fs-6">Michael - Africa nazarene</span>
                            </div>
                            <div class="mb-3">
                                <span class="card-label fs-6">0711191480 - mutuamichael46@gmail.com</span>
                            </div>
                            <div class="mb-3">
                                <span class="card-label fs-6">1233</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                            <div class="col-sm-6 px-5">
                                <div class="mb-10">
                                    <label class="form-label">Select Campaign</label>
                                    <select name="id_analyst" id="campaign" class="form-select form-select-solid bg-white select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" required="" data-select2-id="select2-data-campaign" tabindex="-1" aria-hidden="true">
                                            <option disabled="" selected="" data-select2-id="select2-data-2-f9f2">Select</option>
                                                                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-1-iza1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid bg-white" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-campaign-container" aria-controls="select2-campaign-container"><span class="select2-selection__rendered" id="select2-campaign-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>                                     
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Select Staff</label>
                                    <select name="id_staff" id="staff" class="form-select form-select-solid bg-white select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" required="" data-select2-id="select2-data-staff" tabindex="-1" aria-hidden="true">
                                            <option disabled="" selected="" data-select2-id="select2-data-4-xf3i">Select</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-3-ass4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid bg-white" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-staff-container" aria-controls="select2-staff-container"><span class="select2-selection__rendered" id="select2-staff-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>                                     
                                </div>
                                <div class="mb-10">
                                    <label for="" class="form-label">Start Date</label>
                                    <input type="date" name="start_time" class="form-control" placeholder="Pick a date" id="kt_datepicker_2" required="">
                                </div>
                                <div class="mb-10">
                                    <label for="" class="form-label">End Date</label>
                                    <input type="date" name="end_time" class="form-control" placeholder="Pick a date" id="" required="">
                                </div>
                            </div>
                            <div class="col-sm-6 px-5">
                                <div class="mb-10">
                                    <label for="" class="form-label">Task</label>
                                    <input type="text" name="task_name" class="form-control" placeholder="Task" id="" required="">
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Task Description</label>
                                    <textarea type="textarea" class="form-control h-150px" name="description" placeholder="Description" required=""></textarea>
                                </div>
                                <div class="mb-10">
                                <input type="hidden" name="id_project" value="1003">
                                <input type="hidden" name="t_status" value="1">
                                </div>
                            </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            <!--end::Block-->
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        
        <!--end::Section-->
    </div>