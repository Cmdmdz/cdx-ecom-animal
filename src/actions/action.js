function existEmail(val) {
    $.ajax({
        method: 'POST',
        url: 'services/exsitEmail.php',
        data: 'email=' + val,
        success: function (data) {
            $('#exsitingemail').html(data);
        }
    })
}

function showModalDetailCase(val) {

    $.ajax({
        type: 'POST',
        url: 'services/viewAllCase.php',
        data: 'case_id=' + val,
        success: function (response) {
            $('#dataModel').modal('show')
            $('#detail').html(response);
        }
    });
}

function updateStatusCase(val) {

    $.ajax({
        type: 'GET',
        url: 'services/updateCase/updateCase.php',
        data: 'case_id=' + val,
        success: function (response) {
            $('#dataUpdate').modal('show')
            $('#update_status').html(response);
        }
    });
}

function updateStatusCaseWhenSubmit() {

    let status = $('#status').val();
    let caseId = $('#case_id').val();
    // alert();
    let data = {
        status: status,
        caseId: caseId
    }

    $.ajax({
        type: 'POST',
        url: 'services/updateCase/updateCaseSubmit.php',
        data: data,
        success: function (response) {
            window.location.href='main.php'
        }
    });
}

function deleteCase(val) {

    $.ajax({
        type: 'POST',
        url: 'services/deleteCase/delete.php',
        data: 'case_id=' + val,
        success: function (response) {
            $('#dataDelete').modal('show')
            $('#delete').html(response);
        }
    });
}

function deleteCaseWhenSubmit() {
    let caseId = $('#case_id').val();

    $.ajax({
        type: 'POST',
        url: 'services/deleteCase/deleteSubmit.php',
        data: 'caseId=' + caseId,
        success: function (response) {
            window.location.href='main.php'
        }
    });
}


function showModalContactId() {
    let firstName = $("#firstName").val();
    let lastName = $("#lastName").val();
    let mobileNumber = $("#mobileNumber").val();
    let detail = $("#detail_case").val();
    let rank_case_id = $("#rank_case_id").val();
    let data = {
                firstName: firstName,
                lastName: lastName,
                mobileNumber: mobileNumber,
                detail: detail,
                rank_case_id:rank_case_id
    }
    $.ajax({
        type: 'POST',
        url: 'services/viewContact.php',
        data: data,
        success: function (response) {
            $('#dataContact').modal('show')
            $('#detail_data').html(response);
        }
    });
}

function showModalRepairman() {

    alert(val)

    $.ajax({
        type: 'POS',
        url: 'services/xxxx.php',
        data: 'repairman_id=' + val,
        success: function (response) {
            $('#repairmanView').modal('show')
            $('#repairman').html(response);
        }
    });
}
