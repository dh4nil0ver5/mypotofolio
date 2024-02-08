$("#saveMaster").click(function () {
    $.post({
        url: 'pekerjaan/save',
        dataType: 'json',
        data:{
            id_work: $("#id_pekerjaan").val(),
            name_work: $("#master_pekerjaan").val()
        },
        success: function(json){
            if(json['status']=200){
                data_pekerjaan();
                Swal.fire('ok !')
                $("#newMaster").modal('toggle');
                $("#id_pekerjaan").val("");
                $("#master_pekerjaan").val("");
            }else{
                Swal.fire('error !')
            }
        }
    });
});
$("#saveUpMaster").click(function () {
    $.post({
        url: 'pekerjaan/update',
        dataType: 'json',
        data:{
            id_work: $("#up_id_pekerjaan").val(),
            name_work: $("#up_master_pekerjaan").val()
        },
        success: function(json){
            if(json['status']=200){
                Swal.fire('ok !')
                data_pekerjaan();
                $("#updateMaster").modal('toggle');
            }else{
                Swal.fire('error !')
            }
        }
    });
});
function ubah(param){ 
    $.get({
        url: 'pekerjaan/load_data/'+$('#eu'+param).attr('kode'),
        dataType: 'json',
        success: function(json){
            if(json['status']=200){
                $.each(json['data'], function (i, item) {
                    $("#up_id_pekerjaan").val(item.id_work);
                    $("#up_master_pekerjaan").val(item.name_work);
                });
                $("#updateMaster").modal('toggle');
            }else{
                Swal.fire('error !')
            }
        }
    });
}
function hapus(param){
    $.get({
        url: 'pekerjaan/change_status/' + $('#ed' + param).attr('kode'),
        dataType: 'json',
        success: function(json){ 
            console.log(json['status']);
            if (json['status'] == 200) {
                Swal.fire('ok !')
                data_pekerjaan();
            }else{
                data_pekerjaan();
                Swal.fire(json['message']);
            }
        }
    });
}
function data_pekerjaan(){
    $('#list_pekerjaan').DataTable().destroy(); $("#data_ppdb").DataTable().destroy();
    $("#list_pekerjaan").DataTable({
        processing: true,
        serverSide: false,
        aLengthMenu: [[5, 50, 75, -1], [5, 50, 75, "All"]],
        iDisplayLength: 5,
        bPaginate: true,
        bFilter: false,
        ajax: {
            url: "/app_rab/data/pekerjaan",
            type: "get",
            dataSrc: function (json) {
                var return_data = new Array();
                result_data = json;
                nomer = 0;
                if (parseInt(json['status']) == 200) {
                    $.each(json['data'], function (i, item) {
                        return_data.push({
                            'NO': (i+1),
                            'ID_WORK': item.id_work,
                            'NAME_WORK': item.name_work,
                            'ACTION':
                                '<div class="btn-group">' +
                                '<button class="btn btn-flat btn-xs btn-warning" onclick="ubah(' + i + ')" id="eu' + i + '" kode=' + item.id_work + '>ubah</button>' +
                                '<button class="btn btn-flat btn-xs btn-danger" onclick="hapus(' + i + ')" id="ed' + i + '" kode=' + item.id_work + '>hapus</button>' +
                                '</div>',
                        });
                    });
                } else {
                }
                return return_data;
            },
        },
        columns: [
            { data: 'NO' },
            { data: 'ID_WORK' },
            { data: 'NAME_WORK' }, 
            { data: 'ACTION' },
        ],
    });
}
$(document).ready(function(){
    data_pekerjaan();
});