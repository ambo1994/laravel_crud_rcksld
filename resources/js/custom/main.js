
var url = $("meta[name='base-url']").attr("content");

$(document).ready(function(){
    console.log('test');

    //** Initializer */
    window.initPage = function initAdminVendors() {
        axios.get(url + "api/list")
        .then(function (response) {
            let list = response.data;
            console.log(list);

            var my_list = $(".list-unstyled");

            $.each(list, function(i, data){
                my_list.append("<li> <a href='' class='update edit-modal' data-toggle='modal' data-target='#update_list' id='view_list' data-value='"+data.id+"'>" + data.list + "</li>");
            });            
        })
        .catch(function (error) {
            console.log(error);
        });
    };
    //** Get all data*/
    initPage();

    //** Insert data */
    $("#add").click(function(e) {
        e.preventDefault();
        var list = $("#list").val(); 
        axios.post(url + "api/list", {
            list: list
        }).then(function (response) {
            alert(response.data.message);
            $('#list').val('');
            location.reload();
           
        });
    });

    //** View data */
 
    $('.list-unstyled').on('click', '.edit-modal' ,function() {
   
        var id = $(this).data("value");
        //alert(id);
        axios.get(url + "api/list/" + id,).then(function (response) {
            //alert(response.data.message);
            console.log(response.data.list);
            $('#edit_list').val(response.data.list);
            $('#edit_id').val(response.data.id);    
        });
        
    });

    //** Update data */
    $("#update").click(function(e) {
        e.preventDefault();
        var list = $("#edit_list").val(); 
        var id = $("#edit_id").val(); 
        axios.put(url + "api/list/" + id, {
            list: list
        }).then(function (response) {
            alert(response.data.message);
            $('#list').val('');
            location.reload();
           
        });
    });

    //** Delete data */
    $("#delete").click(function(e) {
        e.preventDefault();
        var id = $("#edit_id").val(); 
        axios.delete(url + "api/list/" + id).then(function (response) {
            alert(response.data.message);
            $('#list').val('');
            location.reload();
           
        });
    });



});