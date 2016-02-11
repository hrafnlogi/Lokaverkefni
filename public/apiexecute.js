/**
 * Created by 2212962309 on 28.1.2016.
 */
$( "#target" ).submit(function( event ) {
    event.preventDefault();
    executeapiname(this.summonerid.value)

});


function executeapiname(summonername){
        if (typeof gloablvar != 'undefined'){
            clearcontent('contentinfo');
        }


        summonername = summonername.toLowerCase();
        var template = $("#leagueasummonername").html();
        var jqxhr = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.4/summoner/by-name/" + summonername + "?api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
            console.log(outcome);
            gloablvar = 'placeholder';
            console.log(summonername);
            console.log(outcome[ summonername ]);
            apidata = outcome[ summonername ];
            summonerid = apidata.id;
            console.log(apidata);
            console.log(summonerid);
            console.log(apidata.name);
        });

        jqxhr.complete(function() {
            if (! apidata){
                alert("Summoner not found!");
            }
            else{
            console.log(apidata);

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

function executeapiinfo(summonerid){
    var template2 = $("#leaguesummonerinfo").html();
    var jqxhr2 = $.getJSON("https://eune.api.pvp.net/api/lol/eune/v1.3/stats/by-summoner/" + summonerid +
        "/summary?season=SEASON3&api_key=e5736e74-4b7a-4470-8fbb-09bc3feb16c2", function(outcome){
        apidata = (outcome);
        console.log(summonerid);
        console.log(apidata);
    });

    jqxhr2.complete(function() {
        console.log(apidata);

        var templateScript2 = Handlebars.compile(template2);
        //$("#leagueasummonername").html(apidata);

        var html = templateScript2(apidata);

        $("#contentinfo").append(html);
        summonerid = "";
        outcome = null;
        apidata = null;
        summonerid = null;
    });
}


function clearcontent(elementID)
{
    document.getElementById(elementID).innerHTML = "";
}

//$("document").ready(function() {
//});
