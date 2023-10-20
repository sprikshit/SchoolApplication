
$(document).ready(function() {
    var currentPage = 1;
    var itemsPerPage = 10;

    function updateTable() {
        var startIndex = (currentPage - 1) * itemsPerPage;
        var endIndex = startIndex + itemsPerPage;

        $('#dataTables-example tbody tr').hide();
        $('#dataTables-example tbody tr').slice(startIndex, endIndex).show();
    }

    function createPageNumbers(totalPages) {
        var pageNumbers = [];
        for (var i = 1; i <= totalPages; i++) {
            pageNumbers.push(i);
        }
        return pageNumbers;
    }

    function renderPageNumbers() {
        var totalPages = Math.ceil($('#dataTables-example tbody tr').length / itemsPerPage);
        var pageNumbers = createPageNumbers(totalPages);
        var paginationHtml = '<li class="page-item previous-page"><a class="page-link" href="#">Prev</a></li>';

        for (var i = 0; i < pageNumbers.length; i++) {
            var pageNum = pageNumbers[i];
            var activeClass = pageNum === currentPage ? 'active' : '';

            paginationHtml += '<li class="page-item ' + activeClass + '"><a class="page-link" href="#" data-page="' + pageNum + '">' + pageNum + '</a></li>';
        }

        paginationHtml += '<li class="page-item next-page"><a class="page-link" href="#">Next</a></li>';

        $('.pagination').html(paginationHtml);
    }

    function navigateToPage(newPage) {
        if (newPage >= 1 && newPage <= Math.ceil($('#dataTables-example tbody tr').length / itemsPerPage)) {
            currentPage = newPage;
            updateTable();
            renderPageNumbers();
        }
    }

    updateTable();
    renderPageNumbers();

    $(document).on('click', '.page-link', function(e) {
        e.preventDefault();
        var newPage = parseInt($(this).attr('data-page'));
        navigateToPage(newPage);
    });

    $(document).on('click', '.next-page', function(e) {
        e.preventDefault();
        navigateToPage(currentPage + 1);
    });

    $(document).on('click', '.previous-page', function(e) {
        e.preventDefault();
        navigateToPage(currentPage - 1);
    });
});
    
