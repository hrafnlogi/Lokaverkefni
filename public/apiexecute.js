/**
 * Created by 2212962309 on 28.1.2016.
 */

$( "#target" ).submit(function( event ) {
    event.preventDefault();
    executeapiname(this.summonerid.value)
    $("div#contentinfo").css("border-color: red;");
});

function piefunction(){
    var salesData=[
        {label:"Basic",value:1, color:"#3366CC"},
        {label:"Plus",value:1, color:"#DC3912"},
        {label:"Lite",value:1, color:"#FF9900"},
        {label:"Elite",value:1, color:"#109618"},
        {label:"Delux",value:5, color:"#990099"}
    ];

    var svg = d3.select("#contentinfo").append("svg").attr("width", 400).attr("height", 400);

    svg.append("g").attr("id","salespie");

    gradPie.draw("salespie", randomData(), 200, 200, 160);

    function randomData(){
        return salesData.map(function(d){
            return {label:d.label, value:d.value, color:d.color};});
    }
}


function executeapichamps(summonerid){
    if (typeof gloablvar != 'undefined'){
        clearcontent('contentinfo');
    }

    var template = $("#leagueasummonername").html();//remove

    var jqxhr3 = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.3/stats/by-summoner/"+ summonerid +"/ranked?season=SEASON2016&api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
        //console.log(outcome);
        gloablvar = 'placeholder';
        apidata = outcome[ summonername ];
        summonerid = apidata.id;
        //console.log(apidata);
        //console.log(summonerid);
        //console.log(apidata.name);
    });

    jqxhr3.complete(function() {
        if (! apidata){
            alert("Summoner not found!");
        }
        else{
            //console.log(apidata);

            var templateScript = Handlebars.compile(template);
            //$("#leagueasummonername").html(apidata);
            var html = templateScript(apidata);

            $("#contentinfo").append(html);
            var apdata;
            executeapiinfo(summonerid);
            summonerid = null;
        }

    });
}




function executeapiname(summonername){
        if (typeof gloablvar != 'undefined'){
            clearcontent('contentinfo');
        }


        summonername = summonername.toLowerCase();
        var template = $("#leagueasummonername").html();
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
            if (! apidata){
                alert("Summoner not found!");
            }
            else{
            //console.log(apidata);

            var templateScript = Handlebars.compile(template);
            //$("#leagueasummonername").html(apidata);
            var html = templateScript(apidata);

            $("#contentinfo").append(html);
            var apdata;
            executeapiinfo(summonerid);
            executeapichamps(summonerid)
            summonerid = null;
            }

        });
    }

function executeapiinfo(summonerid){
    var template2 = $("#leaguesummonerinfo").html();
    var jqxhr2 = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.3/stats/by-summoner/" + summonerid +
        "/summary?season=SEASON3&api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
        apidata = (outcome);
        //console.log(summonerid);
        //console.log(apidata);
    });

    jqxhr2.complete(function() {
        //console.log(apidata);

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
}
slidercounter = 1
$( "#prevcontent" ).click(function() {
    $("#sstats").hide( "slide", { direction: "left"  }, 2000, function() {
        // Use arguments.callee so we don't need a named function
        //$( this ).prev().hide( "fast", arguments.callee );
        $("#contentinfo").height($("#prevcontent").height());
        $("#contentinfo").height($("#nextcontent").height());
        piefunction();
    });
    $("#prevcontent").height($("#contentinfo").height());
    $("#nextcontent").height($("#contentinfo").height());
});

$( "#nextcontent" ).click(function() {
    $("#sstats").show( "slide", { direction: "left"  }, 2000 )
    $("#prevcontent").height($("#contentinfo").height());
    $("#nextcontent").height($("#contentinfo").height());
});




function clearcontent(elementID)
{
    document.getElementById(elementID).innerHTML = "";
}




//$("document").ready(function() {
//});
