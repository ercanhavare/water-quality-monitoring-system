var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(201, 203, 207)'
};
let nextstream, countstream = 0;

let water_temp_stream_data = [];
let count_water_temp_stream = 0;
let next_water_temp_stream = 0;

let water_orp_stream_data = [];
let count_water_orp_stream = 0;
let next_water_orp_stream = 0;

let ph_stream_data = [];
let count_ph_stream = 0;
let next_ph_stream = 0;

let air_temp_stream_data = [];
let count_air_temp_stream = 0;
let next_air_temp_stream = 0;

let air_humadity_stream_data = [];
let count_air_humadity_stream = 0;
let next_air_humadity_stream = 0;


let ntu_stream_data = [];
let count_ntu_stream = 0;
let next_ntu_stream = 0;


function getTurtleKey() {
    let queryString = location.search.substring(1);
    let index = queryString.split("&");
    return index[0];
}

setInterval(checkNewSensorsData, 1000 );

function checkNewSensorsData() {
    $.get('/turtle-new-sensors-data/' + getTurtleKey());
}

/////////////////////////////////// WATER Temp //////////////////////////////////////////////////

function waterTempStream() {
    // set interval ile veri cekilecek 3 sn de bir arrayde durmamasi gerekiyor
    // eger deger bos donerse 0(sifira)'a esitlenmelidir.
//console.log("test");

// sadece bir kere push etmeli
    if (count_water_temp_stream === 0) {
        $.get("/turtle-detail/" + getTurtleKey() + "/view", function (data) {
            //console.log(data)
            $.each(data, function (key, value) {
                $.each(value, function (key, vl) {
                    water_temp_stream_data.push(vl.water_temp);
                    //console.log(air_temp_stream_data[count_air_temp_stream]);
                    count_water_temp_stream++;
                    // console.log(vl.air_temp);
                });
            });
        });
    }
    //console.log(count_air_temp_stream);

    if (water_temp_stream_data.length !== 0) {
        // eger sona gelindiyse durmali sonra yeniden baslamali
        next_water_temp_stream = water_temp_stream_data.shift();
        count_water_temp_stream--;
    } else {
        //console.log("null");
        return null;
    }
    // console.log(next_air_temp_stream);
    return next_water_temp_stream;
}

function onRefreshWaterTemp(chart) {
    chart.config.data.datasets.forEach(function (dataset) {
        dataset.data.push({
            x: Date.now(),
            y: waterTempStream()
        });
    });
}

var color = Chart.helpers.color;
var configWaterTemp = {
    type: 'line',
    data: {
        datasets: [{
            label: 'Water Temp',
            backgroundColor: color(chartColors.blue).alpha(0.5).rgbString(),
            borderColor: chartColors.blue,
            fill: false,
            lineTension: 0,
            borderDash: [8, 4],
            data: []
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Real Time Turtle Watcher'
        },
        scales: {
            xAxes: [{
                type: 'realtime',
                realtime: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 2000,
                    onRefresh: onRefreshWaterTemp
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'value'
                }
            }]
        },
        tooltips: {
            mode: 'nearest',
            intersect: false
        },
        hover: {
            mode: 'nearest',
            intersect: false
        }
    }
};

/////////////////////////////////// WATER ORP //////////////////////////////////////////////////

function WaterORPStream() {

    // set interval ile veri cekilecek 3 sn de bir arrayde durmamasi gerekiyor
    // eger deger bos donerse 0(sifira)'a esitlenmelidir.
//console.log("test");

// sadece bir kere push etmeli

    if (count_water_orp_stream === 0) {
        console.log(count_water_orp_stream);
        $.get("/turtle-detail/" + getTurtleKey() + "/view", function (data) {
            //console.log(data)
            $.each(data, function (key, value) {
                $.each(value, function (key, vl) {
                    water_orp_stream_data.push(vl.water_orp);
                    //console.log(air_temp_stream_data[count_air_temp_stream]);
                    count_water_orp_stream++;
                    // console.log(vl.air_temp);
                });
            });
        });
    }
    //console.log(count_air_temp_stream);

    if (water_orp_stream_data.length !== 0) {
        // eger sona gelindiyse durmali sonra yeniden baslamali
        next_water_orp_stream = water_orp_stream_data.shift();
        count_water_orp_stream--;
    } else {
        //console.log("null");
        return null;
    }
    // console.log(next_air_temp_stream);
    //console.log(count_water_orp_stream);

    return next_water_orp_stream;
}

function onRefreshWaterOrp(chart) {
    chart.config.data.datasets.forEach(function (dataset) {
        dataset.data.push({
            x: Date.now(),
            y: WaterORPStream()
        });
    });
}

var configWaterORP = {
    type: 'line',
    data: {
        datasets: [
            {
                label: 'Water ORP',
                backgroundColor: color(chartColors.blue).alpha(0.5).rgbString(),
                borderColor: chartColors.blue,
                fill: false,
                cubicInterpolationMode: 'monotone',
                data: []
            }]
    },
    options: {
        title: {
            display: false,
            text: 'Real Time Turtle Watcher'
        },
        scales: {
            xAxes: [{
                type: 'realtime',
                realtime: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 2000,
                    onRefresh: onRefreshWaterOrp
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'value'
                }
            }]
        },
        tooltips: {
            mode: 'nearest',
            intersect: false
        },
        hover: {
            mode: 'nearest',
            intersect: false
        }
    }
};

/////////////////////////////////// PH //////////////////////////////////////////////////

function phStream() {
    // set interval ile veri cekilecek 3 sn de bir arrayde durmamasi gerekiyor
    // eger deger bos donerse 0(sifira)'a esitlenmelidir.
//console.log("test");

// sadece bir kere push etmeli
    if (count_ph_stream === 0) {
        $.get("/turtle-detail/" + getTurtleKey() + "/view", function (data) {
            //console.log(data)
            $.each(data, function (key, value) {
                $.each(value, function (key, vl) {
                    ph_stream_data.push(vl.ph);
                    //console.log(air_temp_stream_data[count_air_temp_stream]);
                    count_ph_stream++;
                    // console.log(vl.air_temp);
                });
            });
        });
    }
    //console.log(count_air_temp_stream);

    if (ph_stream_data.length !== 0) {
        // eger sona gelindiyse durmali sonra yeniden baslamali
        next_ph_stream = ph_stream_data.shift();
        count_ph_stream--;
    } else {
        //console.log("null");
        return null;
    }
    // console.log(next_air_temp_stream);
    return next_ph_stream;
}

function onRefreshPh(chart) {
    chart.config.data.datasets.forEach(function (dataset) {
        dataset.data.push({
            x: Date.now(),
            y: phStream()
        });
    });
}

var configPh = {
    type: 'line',
    data: {
        datasets: [
            {
                label: 'PH',
                backgroundColor: color(chartColors.blue).alpha(0.5).rgbString(),
                borderColor: chartColors.blue,
                fill: false,
                lineTension: 0,
                borderDash: [8, 4],
                data: []
            }]
    },
    options: {
        title: {
            display: false,
            text: 'Real Time Turtle Watcher'
        },
        scales: {
            xAxes: [{
                type: 'realtime',
                realtime: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 2000,
                    onRefresh: onRefreshPh
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'value'
                }
            }]
        },
        tooltips: {
            mode: 'nearest',
            intersect: false
        },
        hover: {
            mode: 'nearest',
            intersect: false
        }
    }
};

/////////////////////////////////// AIR TEMP //////////////////////////////////////////////////

function airTempStream() {

    // set interval ile veri cekilecek 3 sn de bir arrayde durmamasi gerekiyor
    // eger deger bos donerse 0(sifira)'a esitlenmelidir.
//console.log("test");

// sadece bir kere push etmeli
    if (count_air_temp_stream === 0) {
        $.get("/turtle-detail/" + getTurtleKey() + "/view", function (data) {
            //console.log(data)
            $.each(data, function (key, value) {
                $.each(value, function (key, vl) {
                    air_temp_stream_data.push(vl.air_temp);
                    //console.log(air_temp_stream_data[count_air_temp_stream]);
                    count_air_temp_stream++;
                    // console.log(vl.air_temp);
                });
            });
        });
    }
    //console.log(count_air_temp_stream);

    if (air_temp_stream_data.length !== 0) {
        // eger sona gelindiyse durmali sonra yeniden baslamali
        next_air_temp_stream = air_temp_stream_data.shift();
        count_air_temp_stream--;
    } else {
        //console.log("null");
        return null;
    }
    // console.log(next_air_temp_stream);
    return next_air_temp_stream;
}

function onRefreshAirTemp(chart) {
    chart.config.data.datasets.forEach(function (dataset) {
        dataset.data.push({
            x: Date.now(),
            y: airTempStream()
        });
    });
}

var configAirTemp = {
    type: 'line',
    data: {
        datasets: [
            {
                label: 'Air Temp',
                backgroundColor: color(chartColors.blue).alpha(0.5).rgbString(),
                borderColor: chartColors.blue,
                fill: false,
                cubicInterpolationMode: 'monotone',
                data: [],
            }]
    },
    options: {
        title: {
            display: false,
            text: 'Real Time Turtle Watcher'
        },
        scales: {
            xAxes: [{
                type: 'realtime',
                realtime: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 2000,
                    onRefresh: onRefreshAirTemp
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'value'
                }
            }]
        },
        tooltips: {
            mode: 'nearest',
            intersect: true
        },
        hover: {
            mode: 'nearest',
            intersect: true
        }
    }
};

/////////////////////////////////// AIR HUMADITY //////////////////////////////////////////////////

function airHumadityStream() {

    // set interval ile veri cekilecek 3 sn de bir arrayde durmamasi gerekiyor
    // eger deger bos donerse 0(sifira)'a esitlenmelidir.
//console.log("test");

// sadece bir kere push etmeli
    if (count_air_humadity_stream === 0) {
        $.get("/turtle-detail/" + getTurtleKey() + "/view", function (data) {
            //console.log(data)
            $.each(data, function (key, value) {
                $.each(value, function (key, vl) {
                    air_humadity_stream_data.push(vl.air_humadity);
                    //console.log(air_temp_stream_data[count_air_temp_stream]);
                    count_air_humadity_stream++;
                    // console.log(vl.air_temp);
                });
            });
        });
    }
    //console.log(count_air_temp_stream);

    if (air_humadity_stream_data.length !== 0) {
        // eger sona gelindiyse durmali sonra yeniden baslamali
        next_air_humadity_stream = air_humadity_stream_data.shift();
        count_air_humadity_stream--;
    } else {
        //console.log("null");
        return null;
    }
    // console.log(next_air_temp_stream);
    return next_air_humadity_stream;
}

function onRefreshAirHumadity(chart) {
    chart.config.data.datasets.forEach(function (dataset) {
        dataset.data.push({
            x: Date.now(),
            y: airHumadityStream()
        });
    });
}

var configAirHumadity = {
    type: 'line',
    data: {
        datasets: [
            {
                label: 'Air Humadity',
                backgroundColor: color(chartColors.blue).alpha(0.5).rgbString(),
                borderColor: chartColors.blue,
                fill: false,
                lineTension: 0,
                borderDash: [8, 4],
                data: []
            }]
    },
    options: {
        title: {
            display: false,
            text: 'Real Time Turtle Watcher'
        },
        scales: {
            xAxes: [{
                type: 'realtime',
                realtime: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 2000,
                    onRefresh: onRefreshAirHumadity
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'value'
                }
            }]
        },
        tooltips: {
            mode: 'nearest',
            intersect: false
        },
        hover: {
            mode: 'nearest',
            intersect: false
        }
    }
};

/////////////////////////////////// NTU //////////////////////////////////////////////////

function ntuStream() {

    // set interval ile veri cekilecek 3 sn de bir arrayde durmamasi gerekiyor
    // eger deger bos donerse 0(sifira)'a esitlenmelidir.
//console.log("test");

// sadece bir kere push etmeli
    if (count_ntu_stream === 0) {
        $.get("/turtle-detail/" + getTurtleKey() + "/view", function (data) {
            //console.log(data)
            $.each(data, function (key, value) {
                $.each(value, function (key, vl) {
                    ntu_stream_data.push(vl.ntu);
                    //console.log(air_temp_stream_data[count_air_temp_stream]);
                    count_ntu_stream++;
                    // console.log(vl.air_temp);
                });
            });
        });
    }
    //console.log(count_air_temp_stream);

    if (ntu_stream_data.length !== 0) {
        // eger sona gelindiyse durmali sonra yeniden baslamali
        next_ntu_stream = ntu_stream_data.shift();
        count_ntu_stream--;
    } else {
        //console.log("null");
        return null;
    }
    // console.log(next_air_temp_stream);
    return next_ntu_stream;
}

function onRefreshNtu(chart) {
    chart.config.data.datasets.forEach(function (dataset) {
        dataset.data.push({
            x: Date.now(),
            y: ntuStream()
        });
    });
}

var configNtu = {
    type: 'line',
    data: {
        datasets: [
            {
                label: 'NTU',
                backgroundColor: color(chartColors.blue).alpha(0.5).rgbString(),
                borderColor: chartColors.blue,
                fill: false,
                cubicInterpolationMode: 'monotone',
                data: []
            }]
    },
    options: {
        title: {
            display: false,
            text: 'Real Time Turtle Watcher'
        },
        scales: {
            xAxes: [{
                type: 'realtime',
                realtime: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 2000,
                    onRefresh: onRefreshNtu
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'value'
                }
            }]
        },
        tooltips: {
            mode: 'nearest',
            intersect: false
        },
        hover: {
            mode: 'nearest',
            intersect: false
        }
    }
};


///////////////////////////////////////////////////////////////////////////////////////

window.onload = function () {

    let waterTempCtx = document.getElementById('waterTempStreamId').getContext('2d');
    window.myChart = new Chart(waterTempCtx, configWaterTemp);

    let waterORPCtx = document.getElementById('WaterORPStreamId').getContext('2d');
    window.myChart = new Chart(waterORPCtx, configWaterORP);

    let phCtx = document.getElementById('phStreamId').getContext('2d');
    window.myChart = new Chart(phCtx, configPh);

    let airTempCtx = document.getElementById('airTempStreamId').getContext('2d');
    window.myChart = new Chart(airTempCtx, configAirTemp);

    let airHumadityCtx = document.getElementById('airHumadityStreamId').getContext('2d');
    window.myChart = new Chart(airHumadityCtx, configAirHumadity);

    var ntuCtx = document.getElementById('ntuStreamId').getContext('2d');
    window.myChart = new Chart(ntuCtx, configNtu);

};
