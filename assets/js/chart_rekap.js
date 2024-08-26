$(document).ready(function(){
    var total_data = $('#total_data').text();
    
    var us_pos_count = $('#us_pos_count').text();
    var us_net_count = $('#us_net_count').text();
    var us_neg_count = $('#us_neg_count').text();

    var us_pos_percentage = (parseFloat(us_pos_count)/parseFloat(total_data))*100;
    var us_net_percentage = (parseFloat(us_net_count)/parseFloat(total_data))*100;
    var us_neg_percentage = (parseFloat(us_neg_count)/parseFloat(total_data))*100;

    var us_xValues = ["positif", "netral", "negatif"];
    var us_yValues = [us_pos_percentage, us_net_percentage,us_neg_percentage];
    var barColors = [
      "#1e7145",
      "#e8c3b9",
      "#b91d47",
    ];

    var cr_pos_count = $('#cr_pos_count').text();
    var cr_net_count = $('#cr_net_count').text();
    var cr_neg_count = $('#cr_neg_count').text();

    var cr_pos_percentage = (parseFloat(cr_pos_count)/parseFloat(total_data))*100;
    var cr_net_percentage = (parseFloat(cr_net_count)/parseFloat(total_data))*100;
    var cr_neg_percentage = (parseFloat(cr_neg_count)/parseFloat(total_data))*100;

    var cr_xValues = ["positif", "netral", "negatif"];
    var cr_yValues = [cr_pos_percentage, cr_net_percentage,cr_neg_percentage];
    var barColors = [
      "#1e7145",
      "#e8c3b9",
      "#b91d47",
    ];

    var av_pos_count = $('#av_pos_count').text();
    var av_net_count = $('#av_net_count').text();
    var av_neg_count = $('#av_neg_count').text();

    var av_pos_percentage = (parseFloat(av_pos_count)/parseFloat(total_data))*100;
    var av_net_percentage = (parseFloat(av_net_count)/parseFloat(total_data))*100;
    var av_neg_percentage = (parseFloat(av_neg_count)/parseFloat(total_data))*100;

    var av_xValues = ["positif", "netral", "negatif"];
    var av_yValues = [av_pos_percentage, av_net_percentage,av_neg_percentage];
    var barColors = [
      "#1e7145",
      "#e8c3b9",
      "#b91d47",
    ];

    new Chart("us_chart", {
      type: "pie",
      data: {
        labels: us_xValues,
        datasets: [{
          backgroundColor: barColors,
          data: us_yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "Persentase Sentimen Aspek Usability"
        }
      }
    });
    new Chart("cr_chart", {
      type: "pie",
      data: {
        labels: cr_xValues,
        datasets: [{
          backgroundColor: barColors,
          data: cr_yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "Persentase Sentimen Aspek Credibility"
        }
      }
    });

    new Chart("av_chart", {
      type: "pie",
      data: {
        labels: av_xValues,
        datasets: [{
          backgroundColor: barColors,
          data: av_yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "Persentase Sentimen Aspek Credibility"
        }
      }
    });

    // $('#table-demo').paging({limit:5});
    $('#table-demo').paging({
    limit: 50,
    rowDisplayStyle: 'block',
    activePage: 0,
    rows: []
    });


});