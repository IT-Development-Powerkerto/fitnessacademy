("use strict");

// begin inventory
// Class definition
var KTDatatablesCourse = (function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll("tbody tr #tr-course");

        tableRows.forEach((row) => {
            const dateRow = row.querySelectorAll("td");
            const realDate = moment(
                dateRow[3].innerHTML,
                "DD MMM YYYY, LT"
            ).format(); // select date from 4th column in table
            dateRow[3].setAttribute("data-order", realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            info: false,
            order: [],
            pageLength: 10,
            // scrollY: 300,
            scrollX: true,
        });
    };

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector(
            '[data-kt-class-filter="search"]'
        );
        filterSearch.addEventListener("keyup", function (e) {
            datatable.search(e.target.value).draw();
        });
    };

    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll('[data-kt-class-table-filter="delete_row"]');

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest('tr');

                // Get instructure name
                const instructureName = parent.querySelectorAll('td')[0].innerText;

                const link = parent.querySelector('td form').getAttribute('action');

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete " + instructureName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: "You have deleted " + instructureName + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            $.ajax({
                                type: "POST",
                                url: link,
                                data: {'_token' : $('input[name="_token"]').val(), '_method': 'DELETE' },
                                dataType: "JSON",
                                success: function (response) {
                                    // Remove current row
                                    datatable.row($(parent)).remove().draw();
                                },
                            });
                        }).then(function(){
                            window.location.href="/home"
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: instructureName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            })
        });
    }


    // Public methods
    return {
        init: function () {
            table = document.querySelector("#datatable_class");

            if (!table) {
                return;
            }

            initDatatable();
            handleSearchDatatable();
            handleDeleteRows();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesCourse.init();
});
// end inventory

