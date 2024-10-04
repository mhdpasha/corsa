@extends('templates.main')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="card-title mb-0">
                            <h4 class="mb-0">Report</h4>
                        </div>
                        <div class="card-action">
                            <a href="/requests" class="btn btn-primary" role="button">See Requests</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title d-flex justify-content-between w-100">
  
                    <div>
                        <button type="button" class="btn btn-soft-success d-flex align-items-center justify-content-center" onclick="exportTableToExcel('datatable')">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-upload me-2">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                              <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                              <path d="M7 9l5 -5l5 5" />
                              <path d="M12 4l0 12" />
                           </svg>
                           Export to Excel
                        </button>
                     </div>
  
                  </div>
               </div>
               <div class="card-body">
                  @if ($errors->any())
                              <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert"
                                  data-dismiss="alert" style="cursor: pointer;">
                                  <ul style="list-style-type: >">
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @elseif (session()->has('added'))
                              <div class="alert alert-success alert-dismissible fade show mt-4" role="alert"
                                  data-dismiss="alert" style="cursor: pointer;">
                                  <div class="d-flex items-center justify-content-center">
                                      {{ session('added') }}
                                  </div>
                              </div>
                          @elseif (session()->has('saved'))
                              <div class="alert alert-primary alert-dismissible fade show mt-4" role="alert"
                                  data-dismiss="alert" style="cursor: pointer;">
                                  <div class="d-flex items-center justify-content-center">
                                      {{ session('saved') }}
                                  </div>
                              </div>
                          @elseif (session()->has('deleted'))
                              <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert"
                                  data-dismiss="alert" style="cursor: pointer;">
                                  <div class="d-flex items-center justify-content-center">
                                      {{ session('deleted') }}
                                  </div>
                              </div>
                          @endif
                  <div class="table-responsive">
                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                       <thead>
                          <tr>
                            <th style="max-width: 1px"></th>
                            <th style="max-width: 10px">Requestor</th>
                            <th style="max-width: 10px">Dept</th>
                            <th style="max-width: 10px">Location</th>
                            <th style="max-width: 10px">Title</th>
                            <th style="max-width: 10px" class="text-center"></th>
                            <th style="max-width: 10px" class="text-center">Status</th>
                            <th style="max-width: 10px">Date</th>
                            <th style="max-width: 10px">Action</th>
                          </tr>
                       </thead>
                     
                       <tbody>
                        @foreach ($datas as $data)
                        <tr>
                           <td>{{ $loop->iteration }}</td>
                           <td>{{ $data->requestor->name }}</td>
                           <td>{{ $data->type }}</td>
                           <td>{{ $data->location }}</td>
                           <td>{{ $data->title }}</td>
                           <td class="text-center">
                              @if($data->picture)
                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9999 14.7024V16.0859C21.9999 16.3155 21.9899 16.5471 21.9699 16.7767C21.6893 19.9357 19.4949 22 16.3286 22H7.67126C6.06806 22 4.71535 21.4797 3.74341 20.5363C3.36265 20.1864 3.042 19.7753 2.7915 19.3041C3.12217 18.9021 3.49291 18.462 3.85363 18.0208C4.46485 17.289 5.05603 16.5661 5.42677 16.0959C5.97788 15.4142 7.43078 13.6196 9.44481 14.4617C9.85563 14.6322 10.2164 14.8728 10.547 15.0833C11.3586 15.6247 11.6993 15.7851 12.2705 15.4743C12.9017 15.1335 13.3125 14.4617 13.7434 13.76C13.9739 13.388 14.2043 13.0281 14.4548 12.6972C15.547 11.2736 17.2304 10.8926 18.6332 11.7348C19.3346 12.1559 19.9358 12.6872 20.4969 13.2276C20.6172 13.3479 20.7374 13.4592 20.8476 13.5695C20.9979 13.7198 21.4989 14.2211 21.9999 14.7024Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M16.3387 2H7.67134C4.27455 2 2 4.37607 2 7.91411V16.086C2 17.3181 2.28056 18.4119 2.79158 19.3042C3.12224 18.9022 3.49299 18.4621 3.85371 18.0199C4.46493 17.2891 5.05611 16.5662 5.42685 16.096C5.97796 15.4143 7.43086 13.6197 9.44489 14.4618C9.85571 14.6323 10.2164 14.8729 10.5471 15.0834C11.3587 15.6248 11.6994 15.7852 12.2705 15.4734C12.9018 15.1336 13.3126 14.4618 13.7435 13.759C13.9739 13.3881 14.2044 13.0282 14.4549 12.6973C15.5471 11.2737 17.2305 10.8927 18.6333 11.7349C19.3347 12.1559 19.9359 12.6873 20.497 13.2277C20.6172 13.348 20.7375 13.4593 20.8477 13.5696C20.998 13.7189 21.499 14.2202 22 14.7025V7.91411C22 4.37607 19.7255 2 16.3387 2Z" fill="currentColor"></path>
                                    <path d="M11.4543 8.79668C11.4543 10.2053 10.2809 11.3783 8.87313 11.3783C7.46632 11.3783 6.29297 10.2053 6.29297 8.79668C6.29297 7.38909 7.46632 6.21509 8.87313 6.21509C10.2809 6.21509 11.4543 7.38909 11.4543 8.79668Z" fill="currentColor"></path>
                                 </svg>
                              @endif
                           </td> 
                           <td class="text-center">
                              @if ($data->status == 'new')
                              <span class="badge rounded-pill bg-soft-danger" style="min-width: 60px;"> NEW </span>
                              @elseif ($data->status == 'accepted')  
                              <span class="badge rounded-pill bg-soft-success" style="min-width: 60px;"> ACPT </span>
                              @elseif ($data->status == 'assigned')
                              <span class="badge rounded-pill bg-soft-success" style="min-width: 60px;"> ASGN </span>
                              @elseif ($data->status == 'cleared')
                              <span class="badge rounded-pill bg-soft-primary" style="min-width: 60px;"> CLEAR </span>
                              @endif
                           </td>
                           <td>{{ $data->detailed_created_at }}</td>
                           <td class="flex">
                              <a href="{{ route('requests.show', $data->slug) }}" class="btn btn-sm btn-soft-primary">Chatroom</a>
                           </td>
                        </tr>
                        @endforeach
                      </tbody>
  
                    </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
         </div>
    

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script>
    function exportTableToExcel(tableID) {
    const today = new Date();
    const dd = String(today.getDate()).padStart(2, '0');
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const yyyy = today.getFullYear();
    const formattedDate = dd + '/' + mm + '/' + yyyy;

    const filename = 'Corsa Report (' + formattedDate + ').xlsx';

    let table = document.getElementById(tableID);
    let wb = XLSX.utils.book_new();

    let ws_data = [];

    const headerText = 'Corsa Report (' + formattedDate + ')';
    ws_data.push([headerText]);

    let headerRow = [];
    for (let j = 0, col; col = table.rows[0].cells[j]; j++) {
        if (j !== 5 && j !== 8) { 
            headerRow.push(col.innerText || col.textContent);
        }
    }
    ws_data.push(headerRow); 

    for (let i = 1, row; row = table.rows[i]; i++) { 
        let rowData = [];

        for (let j = 0, col; col = row.cells[j]; j++) {
            if (j !== 5 && j !== 8) { 
                rowData.push(col.innerText || col.textContent);
            }
        }

        ws_data.push(rowData);
    }

    const ws = XLSX.utils.aoa_to_sheet(ws_data);

    const numberOfColumns = headerRow.length; 
    const mergeEndColumn = XLSX.utils.encode_col(numberOfColumns - 1); 
    const mergeRange = `A1:${mergeEndColumn}1`; 
    ws['!merges'] = [
        {
            s: { r: 0, c: 0 }, 
            e: { r: 0, c: numberOfColumns - 1 } 
        }
    ];

    ws['A1'].s = {
        font: { bold: true, sz: 16 },
        alignment: { horizontal: 'center', vertical: 'center' }
    };

    ws['!rows'] = [{ hpt: 20 }, ...Array(ws_data.length - 1).fill({})];

    XLSX.utils.book_append_sheet(wb, ws, "Main Report");

    XLSX.writeFile(wb, filename);
}
</script>

@endsection