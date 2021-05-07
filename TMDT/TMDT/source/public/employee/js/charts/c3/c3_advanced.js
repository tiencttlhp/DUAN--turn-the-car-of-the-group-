/* ------------------------------------------------------------------------------
 *
 *  # C3.js - advanced examples
 *
 *  Demo setup of chart transformations, zoom, pan and brushing features
 *
 *  Version: 1.0
 *  Latest update: August 1, 2015
 *
 * ---------------------------------------------------------------------------- */

$(function () {
    

    // Chart transforms
    // ------------------------------

    // Update data
    function update() {
        transform.transform('donut');
        setTimeout(function () {
            transform.transform('area');
        }, 1500);
        setTimeout(function () {
            transform.transform('bar', 'data1');
        }, 3000);
        setTimeout(function () {
            transform.transform('scatter');
        }, 4500);
        setTimeout(function () {
            transform.transform('bar');
        }, 6000);
        setTimeout(function () {
            transform.transform('step');
        }, 7500);
        setTimeout(function () {
            transform.transform('line');
            $('#btn-transform').removeClass('disabled');
        }, 11500);
    }

    // Run update on click
    $('#btn-transform').click(function () {
        $(this).addClass('disabled');
        update();
    });

    // Generate chart
    bieudo();

    // Resize chart on sidebar width change
    $(".sidebar-control").on('click', function() {
        transform.resize();
        zoomable_chart.resize();
        subchart.resize();
        label_format.resize();
        data_color.resize();
    });
});

function bieudo() {
    var data_color = c3.generate({
        bindto: '#c3-data-color',
        size: { height: 400 },
        data: {
            columns: [
                ['Doanh số', 30, 20, 50, 40, 60, 50,100],
                ['Doanh Thu', 200, 130, 90, 240, 130, 220,100],
                ['Lợi Nhuận', 300, 200, 160, 1000, 250, 250,100]
            ],
            type: 'bar',
            colors: {
                data1: '#4DB6AC',
                data2: '#009688',
                data3: '#00796B'
            }
        },
        grid: {
            y: {
                show: true
            }
        }
    });
}