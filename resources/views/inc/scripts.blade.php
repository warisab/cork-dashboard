
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
@if(Cookie::get('dark_mode') == '1')
<script src="{{ asset('dark/assets/js/custom.js') }}"></script>
<script src="{{ asset('dark/plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('dark/assets/js/dashboard/dash_1.js') }}"></script>
<script src="{{ asset('dark/assets/js/dashboard/dash_2.js') }}"></script>
<script src="{{ asset('dark/plugins/highlight/highlight.pack.js') }}"></script>
<script src="{{ asset('dark/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('dark/plugins/notification/snackbar/snackbar.min.js') }}"></script>
<script src="{{ asset('dark/assets/js/components/notification/custom-snackbar.js') }}"></script>
<script src="{{ asset('dark/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('dark/assets/js/authentication/form-2.js') }}"></script>
<script src="{{ asset('dark/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('dark/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('dark/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dark/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('dark/assets/js/app.js') }}"></script>
<script src="{{ asset('dark/plugins/blockui/jquery.blockUI.min.js') }}"></script>
@elseif(Cookie::get('dark_mode') == '0')
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/dash_1.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/dash_2.js') }}"></script>
<script src="{{ asset('plugins/highlight/highlight.pack.js') }}"></script>
<script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('assets/js/authentication/form-2.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('plugins/blockui/jquery.blockUI.min.js') }}"></script>
@endif

@if (Route::is('alert') && Cookie::get('dark_mode') == '1')
<script src="{{ asset('dark/plugins/notification/snackbar/snackbar.min.js')}}"></script>
<script src="{{ asset('dark/assets/js/components/notification/custom-snackbar.js') }}"></script>
@elseif(Route::is('alert') && (Cookie::get('dark_mode') == '0'))
<script src="{{ asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
<script src="{{ asset('assets/js/components/notification/custom-snackbar.js') }}"></script>
@endif

<script>        
    var getInputStatus = document.getElementById('radio-6');
    var getPricingContainer = document.getElementsByClassName('pricing-plans-container')[0];
    var getYearlySwitch = document.getElementsByClassName('billed-yearly-radio')[0];
    getInputStatus.addEventListener('change', function() {
        var isChecked = getInputStatus.checked;
        if (isChecked) {
            getPricingContainer.classList.add("billed-yearly");
            getYearlySwitch.classList.add("billed-yearly-switch");
        } else {
            getYearlySwitch.classList.remove("billed-yearly-switch");
            getPricingContainer.classList.remove("billed-yearly");
        }
    })
</script>
<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> --}}

<script>
    $('#theme-shifter').click(function(){    
    var value=$('#theme-shifter').val();
        $.ajax({
            type: "GET",
            url: '{{ route('setCookie') }}',
            data: {value:value},
            success: function(response) {
             location.reload();  

            },
        });
    });

function Cookiee(){
    var value=$('#theme-shifter').val();
        $.ajax({
            type: "GET",
            url: '{{ route('setCookie') }}',
            data: {value:value},
            success: function(response) {
            },
        });
}
</script>
@if((Cookie::get('dark_mode') == '0') || (Cookie::get('dark_mode') == '1'))

@else
        <script> window.onload = Cookiee();</script>
@endif
