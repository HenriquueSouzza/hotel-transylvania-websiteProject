//data range
$( function() {
  var dateFormat = "dd/mm/yy",
    from = $( "#from" )
      .datepicker({
        defaultDate: "+1w",
        numberOfMonths: 1,
        closeText: 'Fechar',
        prevText: 'Anterior',
        nextText: 'proximo',
        currentText: 'Hoje',
        monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
        'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
        'Jul','Ago','Set','Out','Nov','Dez'],
        dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
        dayNamesShort: ['Do','Se','Te','Qu','Qu','Se','Sa'],
        dayNamesMin: ['Do','Se','Te','Qu','Qu','Se','Sa'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 0,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: '',
        minDate: 0,
        maxDate: "+5m",
        showAnim: "slideDown"
      })
      .on( "change", function() {
        to.datepicker( "option", "minDate", getDate( this ) );
      }),
    to = $( "#to" ).datepicker({
      defaultDate: "+1w",
      numberOfMonths: 1,
      closeText: 'Fechar',
      prevText: 'Anterior',
      nextText: 'proximo',
      currentText: 'Hoje',
      monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
      'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
      monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
      'Jul','Ago','Set','Out','Nov','Dez'],
      dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
      dayNamesShort: ['Do','Se','Te','Qu','Qu','Se','Sa'],
      dayNamesMin: ['Do','Se','Te','Qu','Qu','Se','Sa'],
      weekHeader: 'Sm',
      dateFormat: 'dd/mm/yy',
      firstDay: 0,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: '',
      minDate: 0,
      maxDate: "+5m",
      showAnim: "slideDown"
    })
    .on( "change", function() {
      from.datepicker( "option", "maxDate", getDate( this ) );
    });

  function getDate( element ) {
    var date;
    try {
      date = $.datepicker.parseDate( dateFormat, element.value );
    } catch( error ) {
      date = null;
    }

    return date;
  }
} );

//mask date
$(function($){
  $("#from").mask("99/99/9999");
  $("#to").mask("99/99/9999");
});
//end jquery