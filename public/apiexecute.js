/**
 * Created by 2212962309 on 28.1.2016.
 */
$(function(){
    var model = {
        salesData: [],

        init: function() {/* Model init
         if (!localStorage.notes) {
         localStorage.notes = JSON.stringify([]);
         }*/

        },

        executeapiname: function(summonername){
            if (typeof gloablvar != 'undefined'){
                octupus.cleartfrontend();
                model.cleardata();
            }
            summonername = summonername.toLowerCase();
            var jqxhr = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.4/summoner/by-name/" + summonername + "?api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
                //console.log(outcome);
                gloablvar = 'placeholder';
                apidata = outcome[ summonername ];
                summonerid = apidata.id;
            });

            jqxhr.complete(function() {
                octupus.jqxhrcomplete(apidata);
            });
        },

        executeapiinfo: function(summonerid){
            var template2 = $("#leaguesummonerinfo").html();
            var jqxhr2 = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.3/stats/by-summoner/" + summonerid +
                "/summary?season=SEASON3&api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
                apidata = (outcome);
            });

            jqxhr2.complete(function() {
                octupus.jqhr2complete(template2, apidata);
            });
        },
        executeapichamps: function(summonerid){
            if (typeof gloablvar != 'undefined'){
                octupus.cleartfrontend();
                model.cleardata();
            }
            var jqxhr3 = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.3/stats/by-summoner/"+ summonerid +"/ranked?season=SEASON2016&api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
                gloablvar = 'placeholder';
                apidata = outcome['champions'];
                apidata.forEach(function(champ){
                    if (champ.id != 0){
                        var jqxhr4 = $.getJSON("https://global.api.pvp.net/api/lol/static-data/eune/v1.2/champion/"+ champ.id +"?api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
                            litur = view.getRandomColor();
                            model.salesData.push({'label': outcome.key, 'value': champ.stats['totalSessionsPlayed'],'color':litur});
                            $( '<li style="color:' + litur +';">' + outcome.key + '</li>' ).appendTo("#schamps2");
                            $("#schamps").hide();
                        });
                        jqxhr4.complete(function() {
                            octupus.jqxhr4complete(apidata);
                        });
                    }
                    //https://global.api.pvp.net/api/lol/static-data/eune/v1.2/champion/103?api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2
                });
                summonerid = apidata.id;
            });

            jqxhr3.complete(function() {
                octupus.jqxhr3complete(apidata);
            });
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
        cleartfrontend:function(){
            view.clearcontent('contentinfo');
        },
        jqxhrcomplete: function(apidata){
            view.jqxhrcompletee(apidata);
        },
        jqhr2complete: function(template2, apidata){
            view.jqhr2completee(template2, apidata)
        },
        jqxhr3complete: function (apidata) {
            view.jqxhr3completee(apidata)
        },
        jqxhr4complete: function(apidata){
            view.jqxhr4completee(apidata);
        },
        init: function() {
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

        jqhr2completee: function(template2, apidata){
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
        },
        jqxhrcompletee: function(apidata){
            var templatesname = $("#leagueasummonername").html();
            if (! apidata){
                alert("Summoner not found!");
            }
            else{
                var templateScript = Handlebars.compile(templatesname);
                //$("#leagueasummonername").html(apidata);
                var html = templateScript(apidata);

                $("#contentinfo").append(html);
                var apdata;
                model.executeapiinfo(summonerid);
                model.executeapichamps(summonerid);
                summonerid = null;
            }
        },
        jqxhr3completee: function(apidata){
            if (! apidata){
                alert("Summoner not found!");
            }
            else{
                var template = $("#leaguechampgraph").html();
                var templateScript = Handlebars.compile(template);
                //$("#leagueasummonername").html(apidata);
                var html = templateScript(apidata);

                $("#contentinfo").append(html);
                var apdata;
                summonerid = null;
            }
        },
        jqxhr4completee: function(apidata){
            if (! apidata){
                alert("Summoner not found!");
            }
            else{
                var template = $("#leaguechampgraph").html();
                var templateScript = Handlebars.compile(template);
                //$("#leagueasummonername").html(model.salesData);
                var html = templateScript(model.salesData);
                $("#contentinfo").append(html);
                var apdata;
                summonerid = null;
            }
        },

        getRandomColor: function() {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        },
        init: function() {
            $( "#target" ).submit(function( event ) {
                event.preventDefault();
                model.executeapiname(this.summonerid.value)
            });
            slidercounter = 1
            pizzabool = true
            $( "#prevcontent" ).click(function() {
                if(slidercounter == 1){
                    $("#sstats").hide( "slide", { direction: "right"  }, 2000, function() {
                        $("#contentinfo").height($("#prevcontent").height());
                        $("#contentinfo").height($("#nextcontent").height());
                        $("#schamps").show();
                        //$("#salespie").removeAttr("display");
                        $("#salespie").show();
                        if(pizzabool){
                            view.piefunction();
                            pizzabool = false;
                        }

                    });
                    $("#prevcontent").height($("#contentinfo").height());
                    $("#nextcontent").height($("#contentinfo").height());
                    slidercounter = 2;
                }
                else {
                    $("#sstats").show( "slide", { direction: "left"  }, 2000 )
                    $("#schamps").hide();
                    $("#salespie").hide();
                    $("#prevcontent").height($("#contentinfo").height());
                    $("#nextcontent").height($("#contentinfo").height());
                    slidercounter = 1;
                }

            });

            $( "#nextcontent" ).click(function() {
                if (slidercounter == 2){
                    $("#sstats").show( "slide", { direction: "right"  }, 2000, function(){

                    });
                    $("#schamps").hide();
                    $("#salespie").hide();
                    $("#prevcontent").height($("#contentinfo").height());
                    $("#nextcontent").height($("#contentinfo").height());
                    slidercounter = 1;
                }
                else{
                    $("#sstats").hide( "slide", { direction: "left"  }, 2000, function() {
                        $("#contentinfo").height($("#prevcontent").height());
                        $("#contentinfo").height($("#nextcontent").height());
                        $("#schamps").show();
                        //$("#salespie").removeAttr("display");
                        $("#salespie").show();
                        if(pizzabool){
                            view.piefunction();
                            pizzabool = false;
                        }

                    });
                    $("#prevcontent").height($("#contentinfo").height());
                    $("#nextcontent").height($("#contentinfo").height());
                    slidercounter = 2;
                }

            });
            /*
             this.noteList = $('#notes');
             var newNoteForm = $('#new-note-form');
             var newNoteContent = $('#new-note-content');
             */
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

        clearcontent: function(elementID) {
            document.getElementById(elementID).innerHTML = "";
        }

    }
    octupus.init();
}());












//$("document").ready(function() {
//});
