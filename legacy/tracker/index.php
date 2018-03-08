<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Live tracker!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Roboto:300,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-D9XILkoivXN+bcvB2kSOowkIvIcBbNdoDQvfBNsxYAIieZbx8/SI4NeUvrRGCpDi" crossorigin="anonymous">
    <style type="text/css">
        html {
            font-family: 'Open Sans Condensed', sans-serif !important;
            font-weight: bold;
            position: relative;
            min-height: 100%;
        }
        body {
            overflow:hidden;
            background-color: rgb(0,0,255) !important;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 500px; /* Set the fixed height of the footer here */
        }

        .message-container {
            
        }
        .message {
            color: #fff;
            padding: 0px 0px 0px 50px;
            font-size: 175px;
            font-family: 'Open Sans Condensed' !important;
        }
        .message * {
            text-overflow: clip;
            overflow: hidden;
            white-space: nowrap;
            
        }
        .message .club, .message .num {
            
        }
        .message .field {
            font-weight: normal;
        }
        .row > div {
            
        }
        .logo {
            position: absolute;
            right: 25px;
            top: 25px;
            height: 350px;
        }
        .footer {
            left: -100%;
            opacity: 1.0;
        }
        .gradient-bg {
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#3b679e+0,2b88d9+50,207cca+51,7db9e8+100;Blue+Gloss+%232 */
background: rgb(59,103,158); /* Old browsers */
background: -moz-linear-gradient(top, rgba(59,103,158,1) 0%, rgba(43,136,217,1) 50%, rgba(32,124,202,1) 51%, rgba(125,185,232,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(59,103,158,1) 0%,rgba(43,136,217,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(59,103,158,1) 0%,rgba(43,136,217,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3b679e', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */

/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#26558b+0,3a8bc2+16,4bb8f0+29,419ad6+41,3a84c3+49,6199c7+50,aac5de+83,8fbae8+99 */
background: rgb(38,85,139); /* Old browsers */
background: -moz-linear-gradient(top, rgba(38,85,139,1) 0%, rgba(58,139,194,1) 16%, rgba(75,184,240,1) 29%, rgba(65,154,214,1) 41%, rgba(58,132,195,1) 49%, rgba(97,153,199,1) 50%, rgba(170,197,222,1) 83%, rgba(143,186,232,1) 99%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(38,85,139,1) 0%,rgba(58,139,194,1) 16%,rgba(75,184,240,1) 29%,rgba(65,154,214,1) 41%,rgba(58,132,195,1) 49%,rgba(97,153,199,1) 50%,rgba(170,197,222,1) 83%,rgba(143,186,232,1) 99%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(38,85,139,1) 0%,rgba(58,139,194,1) 16%,rgba(75,184,240,1) 29%,rgba(65,154,214,1) 41%,rgba(58,132,195,1) 49%,rgba(97,153,199,1) 50%,rgba(170,197,222,1) 83%,rgba(143,186,232,1) 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#26558b', endColorstr='#8fbae8',GradientType=0 ); /* IE6-9 */

/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#006e2e+0,13230e+53,156d3a+57,13230e+100 */
background: rgb(0,110,46); /* Old browsers */
background: -moz-linear-gradient(top, rgba(0,110,46,1) 0%, rgba(19,35,14,1) 53%, rgba(21,109,58,1) 57%, rgba(19,35,14,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(0,110,46,1) 0%,rgba(19,35,14,1) 53%,rgba(21,109,58,1) 57%,rgba(19,35,14,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(0,110,46,1) 0%,rgba(19,35,14,1) 53%,rgba(21,109,58,1) 57%,rgba(19,35,14,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#006e2e', endColorstr='#13230e',GradientType=0 ); /* IE6-9 */
        }
    </style>
</head>
<body>
    <img src="logo_white.png" class="logo" />
    <div class="container">
        
        <div id="testPanel">
            <h1>Test!</h1>
            <input type="text" id="heat" value="1" />
            <input type="text" id="speed" value="50" />
            <button id="reset" type="button">Reset!</button>
            <button id="connect" type="button">Connect!</button>
        </div>
    </div>
    <footer class="footer message gradient-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <span class="club">NER</span> <span class="num">587</span>
                </div>
                <div class="col-md-8 name">
                    <span>Frankfurter RG Germania/Heidelberger RK/Hersfelder RV C</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 field">
                    LD2eDiv4*
                </div>
                <div class="col-md-4 times">
                    <span class="total">10:05:23,50</span>
                </div>
                <div class="col-md-4">
                    <span class="plus">+1:35,3</span>
                </div>
            </div>
        </div>
    </footer>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
                integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript">
    var hostPush = 'push.master.time-team.nl';
    var hostPull = 'api.master.time-team.nl';
    var username = 'roeivierkamp';
    var password = 'C47FG5MxUdJR7MmZ';
    var client = 'screenclient3';
    var proxy = 'http://roeivierkamp.com:8080/tracker/proxy.php';
    var NEWLINE = '\r\n';
    var requests = [];

    // Display magic.
    function slideOut(f) {
        $('.footer').animate({
            left: '-100%'
        }, { duration: 1000, complete: f });
    }
    function slideIn(f) {
        $('.footer').css('left', '100%');
        $('.footer').animate({
            left: '0%'
        }, { duration: 1000, complete: f });
    }
    function popFinish(data, callback) {
        console.log('Popping ' + data);
        $('.club').text(data.club);
        $('.num').text(data.num);
        $('.name').text(data.name);
        $('.field').text(data.field);
        $('.total').text(data.total);
        $('.plus').text(data.plus);
        slideIn(function () {
            window.setTimeout(function () {
                slideOut(callback);
            }, 4000);
        })
    }

    // Queue.
    var queue = [];
    function processQueue() {
        var totalTimeout = 2000;
        if (queue.length > 0) {
            dat = queue.pop();
            popFinish(dat, processQueue);
        } else {
            window.setTimeout(processQueue, totalTimeout);
        }
    }
    function addToQueue(data) {
        queue.push(data);
    }

    // Util & connections.
    function proxyUrl(url) {
        return proxy + '?url=' + encodeURIComponent(url);
    }
    function connError(xhr) {
        $('.logo').attr('src', 'logo_red.png');
        console.log('Request failed.  Returned status of ' + xhr.status);
        xhr.abort();
    }
    function makeRequest(url, callback, partial) {
        partial = (typeof partial !== 'undefined') ? partial : false;
        var minState = partial ? 3 : 4;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState >= minState) {
                callback(xhr);
            }
        }
        xhr.send(null);
        requests.push(xhr); // to unload later.
    }
    function abortAll() {
        requests.forEach(function (xhr, i) {
            if (xhr) xhr.abort();
        });
    }
    function pull(path, callback) {
        var url = 'http://' + hostPull + '/2/roeivierkamp/' + path;
        url = proxyUrl(url);
        console.log('PULL request ' + url);

        makeRequest(url, function (xhr) {
            if (xhr.status == 200) {
                obj = JSON.parse(xhr.responseText);
                callback(obj);
            } else {
                connError(xhr);
            }
        });
    }
    function toLookup(arr) {
        var lookup = {};
        for (var i = 0, len = arr.length; i < len; i++) {
            lookup[arr[i].id] = arr[i];
        }
        return lookup;
    }
    function getCourseData(callback) {
        var data = {};
        var remaining = 6;
        var done = function () {
            remaining--;
            if (remaining <= 0) {
                callback(data);
            }
        }
        pull('crew.json?stroke', function (d) { data.crews = toLookup(d); done(); });
        pull('club.json', function (d) { data.clubs = toLookup(d); done(); });
        pull('race.json', function (d) { data.races = toLookup(d); done(); });
        pull('heat.json', function (d) { data.heats = toLookup(d); done(); });
        pull('heatgroup.json?event', function (d) { data.groups = toLookup(d); done(); });
        pull('event.json', function (d) { data.events = toLookup(d); done(); });
    }

    // Pull data store.
    var df = {};

    // Messages.
    var messageHandlers = {
        "timing": function (timing) {
            
            if ("race_id" in timing && "status" in timing && "location_id" in timing &&
                "group_id" in timing && timing.status == 1 && timing.location_id == 5) {
                console.log(timing);
                var race = df.races[timing.race_id];
                if (race === undefined) {
                    return;
                }
                var heat = df.heats[race.heat_id];
                var crew = df.crews[race.crew_id];
                var group = df.groups[timing.group_id];
                if ("total" in timing && timing.total !== null && "time" in timing.total) {
                    // check against known finishes.
                    //if (race.status != 4) {
                    //    popMessage(race.bow + ' has finished in ' + timing.total.time);
                    //}
                    var dat = {
                        club: df.clubs[crew.club_id].code,
                        num: race.bow,
                        name: crew.name,
                        field: df.events[crew.event_id].code,
                        total: timing.total.time,
                        plus: timing.total.plus
                    };
                    addToQueue(dat);
                } else {
                    // Skip starts.
                    //var group = df.groups[timing.group_id];
                    //popMessage(race.bow + ' in ' + group.event.code + ' has started the ' + heat.name);
                }
            }
        },
        "race": function (race) {
            //df.races[race.id] = race;
            console.log('Race: ' + race);
        },
        "heat": function (heat) {
            if (heat.status == 8) {
                // Started.
                popMessage(heat.name + ' has started!');
            }
            //df.heats[heat.id] = heat;
            console.log(heat.name + ' has status ' + heat.status);
        }
    };

    function popMessage(str) {
        $('#messages').append('<li>' + str + '</li>');
    }
    function handleMessage(str) {
        var obj = JSON.parse(str);
        if (obj.type in messageHandlers) messageHandlers[obj.type](obj.data);
    }

    // Data pull.
    function pullAll() {
        getCourseData(function (data) {
            df = data;

            // TEST
            //for (var key in df.races) {
            //    df.races[key].status = 0;
            //}
        });
    }

    // Push message loop.
    function pushLoop() {
        var url = 'http://' + hostPush + '/2/' + client + '/http/roeivierkamp-heat-json/roeivierkamp-timing-json/roeivierkamp-race-json';
        url = proxyUrl(url);
        console.log('PUSH loop on ' + url);

        var lastIx = 0;
        makeRequest(url, function (xhr) {
            if (xhr.status == 200) {
                var response = xhr.responseText.substr(lastIx);

                var lastBreak = response.lastIndexOf(NEWLINE);
                if (lastBreak > 0) {
                    var toParse = response.substr(0, lastBreak);
                    lastIx += lastBreak;

                    var messages = toParse.split(NEWLINE);
                    messages.forEach(function (msg, i) {
                        msg = msg.trim();
                        if (msg) handleMessage(msg);
                    });
                }
            } else {
                connError(xhr);
            }

            if (xhr.readyState == 4) {
                console.log("done");
            }
        }, true);
    }

    function testMessages() {
        for (var i = 0; i < 2; i++) {
            var dat = {
                club: 'NER',
                num: (Math.floor(Math.random() * 250) + 100 ).toString(),
                name: 'Viking/Zwolsche/Gouda/ROO',
                field: 'D2eDiv8+',
                total: '11:09,3',
                plus: '+2:13,7'
            };
            addToQueue(dat);
        }
        //window.setTimeout(testMessages, 10000);
    }

    // Button bindings.
    $('#reset').click(function () {
        var url = proxyUrl('http://' + hostPull + '/2/replay.json?regatta_id=29&heat_id=' +
                            $('#heat').val() + '&speed=' + $('#speed').val());
        console.log("Request reset to " + url);
        makeRequest(url, function (xhr) {
            if (xhr.status == 200) {
                window.location.reload(true);
            } else {
                connError(xhr);
            }
        }, true);
    });
    $('#connect').click(function () {
        abortAll();
        pushLoop();
    })
    $(document).ready(function () {
        $('#testPanel').hide();
        pullAll();
        pushLoop();
        //testMessages();
        processQueue();
    });

    function test() {
        $('#testPanel').show();
    }

    $(window).unload(abortAll);

    </script>
</body>
</html>