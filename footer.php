<script>
    $(document).ready(function(){
        $(".search-filter a").click(function(){
           $(".search-filter a").not(this).removeClass('active');
           $(this).toggleClass('active');
        });
        
        function addCommas(nStr)
            {
                    nStr += '';
                    x = nStr.split('.');
                    x1 = x[0];
                    x2 = x.length > 1 ? '.' + x[1] : '';
                    var rgx = /(\d+)(\d{3})/;
                    while (rgx.test(x1)) {
                            x1 = x1.replace(rgx, '$1' + ',' + '$2');
                    }
                    return x1 + x2;
            }
        $(function() {
		$( "#price-range" ).slider({
			range: true,
			min: 10000,
			max: 5000000,
                        step: 1000,
			values: [ 100000, 1000000 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "P" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "P" + $( "#price-range" ).slider( "values", 0 ) +
			" - P" + $( "#price-range" ).slider( "values", 1 ) );
	});
    });
</script>
</body>

</html>