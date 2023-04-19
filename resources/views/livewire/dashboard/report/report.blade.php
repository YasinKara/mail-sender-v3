@section('content')
    <div class="row g-4">
        <h3 class="fw-medium mb-1 mt-5">Raporlar</h3>
        <p class="my-2">Müşteri kartında bilgileri eksik olan müşterilerin listesi.</p>

        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center card row p-4 gap-3  gap-md-0">
                <h5>Verileri Dışarı Aktar</h5>
                <div class="col-md-12 export_data">
                    <div class="d-flex align-items-center justify-content-start gap-4">
                        <div class="mb-4 mb-lg-0">
                            <label for="bs-rangepicker-times3">Tarih Aralığı</label>
                            <input type="text" id="bs-rangepicker-times3" class="form-control mt-1">
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <label for="select_agent">Agent Seç</label>
                            <select class="form-select mt-1" id="select_agent">
                                <option value="0">Gabriel Müller</option>
                                <option value="1">Laura Schmidt</option>
                            </select>
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <label for="select_platform">Platform Seç</label>
                            <select class="form-select mt-1" id="select_platform">
                                <option value="0">Tümü</option>
                                <option value="0">Sternlöscher</option>
                                <option value="0">Sternenlöscher</option>
                            </select>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary mt-4 waves-effect waves-light">Satış Listesini Dışarıya Aktar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row">

                <div class="col-12 mb-4 col-lg-6">
                    <div class="card">
                        <h5 class="card-header text-white" style="background-color: #4caf50;">Agent Toplam Değerleri</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped">
                                <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><strong>Satış Tutarı</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Ciro</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Kazandığı Prim</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Onaylı Mail</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Gönderilen Mail</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Striped Rows -->
                </div>

                <div class="col-12 mb-4 col-lg-6">
                    <div class="card">
                        <h5 class="card-header text-white" style="background-color: #4caf50;">Toplam Değerler (Tüm Agentlar)</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped">
                                <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><strong>Satış Tutarı</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Ciro</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Kazandığı Prim</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Onaylı Mail</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Gönderilen Mail</strong></td>
                                    <td>0,00€</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Striped Rows -->
                </div>
            </div>
        </div>
        <div class="col-12">

        </div>

        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center card row p-4 gap-3 mb-4  gap-md-0">
                <h5>Primlerin Listesi</h5>
                <div class="col-md-12 export_data mt-1">
                    <div class="d-flex align-items-center justify-content-start gap-4">
                        <div class="mb-4 mb-lg-0">
                            <label for="bs-rangepicker-times4">Tarih Aralığı</label>
                            <input type="text" id="bs-rangepicker-times4" class="form-control mt-1">
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <label for="select_agent">Agent Seç</label>
                            <select class="form-select mt-1" id="select_agent">
                                <option value="0">Gabriel Müller</option>
                                <option value="1">Laura Schmidt</option>
                            </select>
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <label for="select_platform">Platform Seç</label>
                            <select class="form-select mt-1" id="select_platform">
                                <option value="0">Tümü</option>
                                <option value="0">Sternlöscher</option>
                                <option value="0">Sternenlöscher</option>
                            </select>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary mt-4 waves-effect waves-light">Seçim Yap</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row mx-2"><div class="col-sm-12 col-md-4 col-lg-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-8 col-lg-6"><div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end align-items-center flex-sm-nowrap flex-wrap me-1"><div class="me-3"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search<input type="search" class="form-control form-control-sm" placeholder="Search.." aria-controls="DataTables_Table_0"></label></div></div></div></div></div><table class="datatables-profili-eksikler table dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <thead class="table-light">
                            <tr><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68.8281px;" aria-label="Agent Adı: activate to sort column ascending">Agent Adı</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 83.1719px;" aria-label="Müşteri Adı: activate to sort column ascending">Müşteri Adı</th><th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 86.7031px;" aria-sort="descending" aria-label="Yorum Adedi: activate to sort column ascending">Yorum Adedi</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 76.875px;" aria-label="Birim Fiyatı: activate to sort column ascending">Birim Fiyatı</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 91.5938px;" aria-label="Toplam Fiyat: activate to sort column ascending">Toplam Fiyat</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 87.9062px;" aria-label="Taksit Sırası: activate to sort column ascending">Taksit Sırası</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 156.391px;" aria-label="Taksit / Kazandığı Prim: activate to sort column ascending">Taksit / Kazandığı Prim</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 91.9844px;" aria-label="Sipariş Tarihi: activate to sort column ascending">Sipariş Tarihi</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 88.1875px;" aria-label="Taksit Tarihi: activate to sort column ascending">Taksit Tarihi</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 116.359px;" aria-label="Referans Sipariş: activate to sort column ascending">Referans Sipariş</th></tr>
                            </thead><tbody><tr class="odd"><td valign="top" colspan="10" class="dataTables_empty">Loading...</td></tr></tbody>
                        </table><div class="row mx-2"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
            </div>
            <!--/ Role Table -->
        </div>
    </div>

@endsection
