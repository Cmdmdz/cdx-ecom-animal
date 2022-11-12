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
        url: 'services/viewCase/viewCase.php',
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
    let repairmanId = $('#repairmanId').val();
    let data = {
        status: status,
        caseId: caseId,
        repairmanId: repairmanId
    }

    $.ajax({
        type: 'POST',
        url: 'services/updateCase/updateCaseSubmit.php',
        data: data,
        success: function (response) {
            window.location.href = 'main.php'
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
            window.location.href = 'main.php'
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
        rank_case_id: rank_case_id
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

function showModalRepairman(val) {

    $.ajax({
        type: 'POST',
        url: 'services/viewRepairman/viewRepairman.php',
        data: 'repairman_id=' + val,
        cache: false,
        success: function (response) {
            $('#repairmanData').modal('show')
            $('#repairmanView').html(response);
        }
    });
}


function deleteRepairman(val) {

    $.ajax({
        type: 'POST',
        url: 'services/deleteRepairman/deleteRepairman.php',
        data: 'repairman_id=' + val,
        success: function (response) {
            $('#dataDeleteRepairman').modal('show')
            $('#deleteRepairman').html(response);
        }
    });
}

function deleteRepairmanWhenSubmit() {
    let repairman_id = $('#repairman_id').val();

    $.ajax({
        type: 'POST',
        url: 'services/deleteRepairman/deleteRepairmanSubmit.php',
        data: 'repairman_id=' + repairman_id,
        success: function (response) {
            window.location.href = 'repairman.php'
        }
    });
}

function updateRepairman(val) {

    $.ajax({
        type: 'POST',
        url: 'services/updateRepairman/updateRepairman.php',
        data: 'repairman_id=' + val,
        success: function (response) {
            $('#dataUpdateRepairman').modal('show')
            $('#updateRepairman').html(response);
        }
    });
}

function updateRepairmanWhenSubmit() {

    let name = $('#nameRepairman').val();
    let email = $('#emailRepairman').val();
    let repairmanId = $('#repairmanId').val();
    let data = {
        name: name,
        email: email,
        repairmanId: repairmanId
    }
    // alert(JSON.stringify(data));

    $.ajax({
        type: 'POST',
        url: 'services/updateRepairman/updateRepairmanSubmit.php',
        data: data,
        success: function (response) {
            window.location.href = 'repairman.php'
        }
    });
}



