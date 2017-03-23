$(function(){
    
  var $container = $('#s'),
      filters = {};

  $container.isotope({
    itemSelector : '.produkt-element'
  });

  // filter buttons
  $('select').change(function(){
    var $this = $(this);
    
    // store filter value in object
    // i.e. filters.color = 'red'
    var group = $this.attr('data-filter-group');
    
    filters[ group ] = $this.find(':selected').attr('data-filter-value');
    // console.log( $this.find(':selected') )
    // convert object into array
    var isoFilters = [];
    for ( var prop in filters ) {
      isoFilters.push( filters[ prop ] )
    }
    console.log(filters);
    var selector = isoFilters.join('');
    $container.isotope({ filter: selector });
    return false;
  });
      
      $('#all').click(function() {
          var $this = $(this);
          var group = $this.parent().data('filter-group');
          filters[ group ] = $this.data('filter-value'); 
          var isoFilters = [];
            for ( var prop in filters ) {
              isoFilters.push( filters[ prop ] )
            }
            console.log(filters);
            var selector = isoFilters.join('');
            $container.isotope({ filter: selector });
            return false;
      });

});