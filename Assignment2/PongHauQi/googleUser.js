/**
 * Created by Isaac on 11/20/16.
 */

var myLatlng = new google.maps.LatLng(22,114);
var filename = "user.txt";

function readTextFile(file)
{
    var allText;
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                allText = rawFile.responseText;
                //alert(allText);
            }
        }
    }
    rawFile.send(null);
    var file1 = allText.split("\n");
    var file3 = [];
    for(var i = 0; i < file1.length; i++){
        var file2 = file1[i].split(" ");
        file3.push(file2[1]+","+file2[2]);
    }
    console.log(file3);
    return file3;
}

function initialize () {
    var marksArray= readTextFile(filename);
    console.log(marksArray);
    var mapOptions = {
        center: new google.maps.LatLng(0,0),
        zoom: 1,
        minZoom: 1
    };

    var map = new google.maps.Map(document.getElementById('map'),mapOptions );

    var allowedBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(85, -180),	// top left corner of map
        new google.maps.LatLng(-85, 180)	// bottom right corner
    );

    var k = 5.0;
    var n = allowedBounds .getNorthEast().lat() - k;
    var e = allowedBounds .getNorthEast().lng() - k;
    var s = allowedBounds .getSouthWest().lat() + k;
    var w = allowedBounds .getSouthWest().lng() + k;
    var neNew = new google.maps.LatLng( n, e );
    var swNew = new google.maps.LatLng( s, w );
    boundsNew = new google.maps.LatLngBounds( swNew, neNew );
    map .fitBounds(boundsNew);
    //marker.setMap(map);


    var marker;
    for (var i = 0; i < marksArray.length; i++) {
        var temp = marksArray[i].split(",");
        var left = temp[0];
        var right = temp[1];
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(left, right),
            map: map,
            title: "This player has won:"+temp[2]+" time(s)"
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
    /*for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }*/

}

google.maps.event.addDomListener(window, 'load', initialize);

