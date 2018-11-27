// $.fn.scrollBottom = function () {
//   return $(document).height() - this.height() - this.scrollTop();

// };


var cantItems = 500;

$.ajax({
  url: `/list/${cantItems}`,
  data: {
    format: 'json'
  },
  error: console.log('no encontro nada'),
  success: function (data) {
    $('#loader').hide();
    console.log(data.data.name);

    $.each(data.data, function (key, val) {
      $('.inner').prepend(`<tr>
                          <th scope="row">${val.id}</th>
                          <td>${val.barcode}</td>
                          <td>${val.type_id}</td>
                          <td>${val.name}</td>
                          <td>${val.cantMin}</td>
                          <td>${val.cost}</td>
                          <td>${val.stock_id}</td>`
                        );
    });
    //Reset scroll
    $('#chatBox').scrollTop(480);
  }

});

$("#chatBox").scrollTop($("#chatBox")[0].scrollHeight);

// Assign scroll function to chatBox DIV
$('#chatBox').scroll(function () {
  console.log($('#chatBox').scrollTop());
  if ($('#chatBox').scrollTop() == 0) {
    // Display AJAX loader animation
    $('#loader').show();

    // Youd do Something like this here
    // Query the server and paginate results
    // Then prepend
    cantItems = cantItems - 10;
    $.ajax({
      url:`/list/${cantItems}`,
      data: {
        format: 'json'
      },
      success:function(data){
        $('#loader').hide();
        console.log(data);
      
        $.each(data.data, function (key, val) {
          $('.inner').prepend(`<tr>
                          <th scope="row">${val.id}</th>
                          <td>${val.barcode}</td>
                          <td>${val.type_id}</td>
                          <td>${val.name}</td>
                          <td>${val.cantMin}</td>
                          <td>${val.cost}</td>
                          <td>${val.stock_id}</td>`
                        );
        });
        //Reset scroll
        $('#chatBox').scrollTop(480);
      }
      
    });
  }
});