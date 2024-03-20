"use strict";
var KTDatatablesDataSourceHtml = (function() {
    var initTable1 = function() {
        var table =
            // begin first table
            $("#kt_advance_table_widget_1").DataTable({
                ordering: false
            });
    };

    return {
        //main function to initiate the module
        init: function() {
            initTable1();
        }
    };
})();

jQuery(document).ready(function() {
    KTDatatablesDataSourceHtml.init();
});
