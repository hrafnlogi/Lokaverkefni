/**
 * Created by 2212962309 on 28.1.2016.
 */
$(function(){
    var model = {
        salesData: [],

        init: function() {/*
            if (!localStorage.notes) {
                localStorage.notes = JSON.stringify([]);
            }*/
            alert("model init");

        },

        piefunction: function(){
            var svg = d3.select("#contentinfo").append("svg").attr("width", 300).attr("height", 300);

            svg.append("g").attr("id","salespie");

            gradPie.draw("salespie", randomData(), 150, 150, 120);
            function randomData(){
                return model.salesData.map(function(d){
                    return {label:d.label, value:d.value, color:d.color};});
            }
        },
        cleardata: function(){
            model.salesData=[];
        },
        /* Sýnidæmi
        add: function(obj) {
            var data = JSON.parse(localStorage.notes);
            data.push(obj);
            localStorage.notes = JSON.stringify(data);
        },*/

    }

    var octupus = {






        executeapiinfo: function(summonerid){
            var template2 = $("#leaguesummonerinfo").html();
            var jqxhr2 = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.3/stats/by-summoner/" + summonerid +
                "/summary?season=SEASON3&api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
                apidata = (outcome);
                //console.log(summonerid);
                //console.log(apidata);
            });

            jqxhr2.complete(function() {
                console.log(apidata);

                var templateScript2 = Handlebars.compile(template2);
                //$("#leagueasummonername").html( apidata);

                var html = templateScript2(apidata);

                $("#contentinfo").append(html);
                $("#prevcontent").height($("#contentinfo").height());
                $("#nextcontent").height($("#contentinfo").height());
                summonerid = "";
                outcome = null;
                apidata = null;
                summonerid = null;
            });
        },

        executeapiname: function(summonername){
            if (typeof gloablvar != 'undefined'){
                view.clearcontent('contentinfo');
                model.cleardata();
            }

            summonername = summonername.toLowerCase();

            var jqxhr = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.4/summoner/by-name/" + summonername + "?api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
                //console.log(outcome);
                gloablvar = 'placeholder';
                apidata = outcome[ summonername ];
                summonerid = apidata.id;
                //console.log(apidata);
                //console.log(summonerid);
                //console.log(apidata.name);
            });

            jqxhr.complete(function() {
                var templatesname = $("#leagueasummonername").html();
                if (! apidata){
                    alert("Summoner not found!");
                }
                else{
                    //console.log(apidata);
                    var templateScript = Handlebars.compile(templatesname);
                    //$("#leagueasummonername").html(apidata);
                    var html = templateScript(apidata);

                    $("#contentinfo").append(html);
                    var apdata;
                    octupus.executeapiinfo(summonerid);
                    octupus.executeapichamps(summonerid)
                    summonerid = null;
                }
            });
        },


        executeapichamps: function(summonerid){
            if (typeof gloablvar != 'undefined'){
                view.clearcontent('contentinfo');
                model.cleardata();
            }

            var template = $("#leaguechampgraph").html();//remove

            var jqxhr3 = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.3/stats/by-summoner/"+ summonerid +"/ranked?season=SEASON2016&api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
                gloablvar = 'placeholder';
                apidata = outcome['champions'];
                apidata.forEach(function(champ){
                    console.log(champ);
                    console.log(champ.id);
                    console.log(champ.stats['totalSessionsPlayed']);
                    if (champ.id != 0){
                        var jqxhr4 = $.getJSON("https://global.api.pvp.net/api/lol/static-data/eune/v1.2/champion/"+ champ.id +"?api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
                            console.log(outcome.key);
                            console.log(champ.stats['totalSessionsPlayed']);
                            litur = view.getRandomColor();
                            model.salesData.push({'label': outcome.key, 'value': champ.stats['totalSessionsPlayed'],'color':litur});
                            $( '<li style="color:' + litur +';">' + outcome.key + '</li>' ).appendTo("#schamps2");
                            $("#schamps").hide();
                        });
                        jqxhr4.complete(function() {
                            if (! apidata){
                                alert("Summoner not found!");
                                console.log(apidata);
                            }
                            else{
                                console.log(model.salesData);
                                console.log(apidata);

                                var templateScript = Handlebars.compile(template);
                                //$("#leagueasummonername").html(model.salesData);
                                var html = templateScript(model.salesData);

                                $("#contentinfo").append(html);
                                var apdata;
                                summonerid = null;
                            }

                        });
                    }
                    //https://global.api.pvp.net/api/lol/static-data/eune/v1.2/champion/103?api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2
                });
                summonerid = apidata.id;
                console.log(apidata);
                console.log(summonerid);
                console.log(apidata.stats);
            });

            jqxhr3.complete(function() {
                if (! apidata){
                    alert("Summoner not found!");
                }
                else{
                    var templateScript = Handlebars.compile(template);
                    //$("#leagueasummonername").html(apidata);
                    var html = templateScript(apidata);

                    $("#contentinfo").append(html);
                    var apdata;
                    summonerid = null;
                }

                });
        },

        init: function() {

            $( "#target" ).submit(function( event ) {
                event.preventDefault();
                octupus.executeapiname(this.summonerid.value)
            });
            model.init();
            view.init();

            /*function listofchamps(){
                document.getElementById('schamps2').innerHTML = '<li style="color:red">html data</li>';
                $("#schamps2").append("<li>Appended item</li>");

                alert("asd");
            }*/
        }
    }

    var view = {
        getRandomColor: function() {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        },
        init: function() {

            slidercounter = 1
            $( "#prevcontent" ).click(function() {
                $("#sstats").hide( "slide", { direction: "left"  }, 2000, function() {
                    // Use arguments.callee so we don't need a named function
                    //$( this ).prev().hide( "fast", arguments.callee );
                    $("#contentinfo").height($("#prevcontent").height());
                    $("#contentinfo").height($("#nextcontent").height());
                    $("#schamps").show();
                    model.piefunction();
                });
                $("#prevcontent").height($("#contentinfo").height());
                $("#nextcontent").height($("#contentinfo").height());
            });

            $( "#nextcontent" ).click(function() {
                $("#sstats").show( "slide", { direction: "left"  }, 2000 )
                $("#prevcontent").height($("#contentinfo").height());
                $("#nextcontent").height($("#contentinfo").height());
            });
            /*
             this.noteList = $('#notes');
             var newNoteForm = $('#new-note-form');
             var newNoteContent = $('#new-note-content');
             */
        },

        clearcontent: function(elementID) {
            document.getElementById(elementID).innerHTML = "";
        }

    }
    octupus.init();
}());












//$("document").ready(function() {
//});
