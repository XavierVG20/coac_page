


<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>



<script>
    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    axios.defaults.withCredentials = true;
</script>
<!--====== Bootstrap & Popper JS ======-->
<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/dataTables.responsive.min.js') }}"></script>
<!-- Por esto (última versión estable): -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>


 <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<!--====== NiceScroll ======-->
<script src="{{ asset('assets/admin/js/jquery.nicescroll.min.js') }}"></script>
<!--====== Summernote JS ======-->
<script src="{{ asset('assets/admin/js/summernote-lite.min.js') }}"></script>
<!--====== select2 JS ======-->
<script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
<!--====== Chart JS ======-->
<script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>
<!--====== datatable ======-->


<!--====== MainJS ======-->
<script src="{{ asset('assets/admin/js/app.js?ver=1.0.0') }}"></script>
{{-- <script src="{{ asset('assets/admin/js/app.min.js') }}"></script> --}}
<!--============= toastr=======-->

<script src="{{ asset('assets/admin/js/sweetalert211.min.js') }}"></script>


<script>
    $.each($('ul.sub-menu'), function (index, item) {
        if ($(item).find('li').length == 0) {
            $(item).parents('li').hide();
        }
    })
</script>


 @stack('js')
