$(function(){
    $('.range-beds').slider({
        min: 0,
        max: 10,
        range: true,
        values: [1, 4]
    });

    $('.range-beds').slider('pips', {
        labels: { first: "Min", last: "Max" },
        rest : 'pips',
        prefix : "",
        step : 2,
        suffix : "",
    }).slider("float");

    $('.range-floor').slider({
        min: 0,
        max: 100,
        range: true,
        values: [1, 50]
    });

    $('.range-floor').slider('pips', {
        labels: { first: "Min", last: "Max" },
        rest : 'pips',
        step : 10,
        prefix : "",
        suffix : "",
    }).slider("float");
});
