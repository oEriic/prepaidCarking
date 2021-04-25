<!DOCTYPE html>
<style>
    div#parking_board {
        background: #CCC;
        border: #999 1px solid;
        width: 800px;
        height: 540px;
        padding: 24px;
        margin: 0px auto;
    }

    div#parking_board>div {
        background: url(tile_bg.jpg) no-repeat;
        border: #000 1px solid;
        width: 71px;
        height: 71px;
        float: left;
        margin: 10px;
        padding: 20px;
        font-size: 64px;
        cursor: pointer;
        text-align: center;
    }

    div {
        width: 100px;
        height: 100px;
        background: red;
        position: relative;
        -webkit-animation: mymove 120s;
        -webkit-animation-play-state: paused;
        animation: mymove 120s;
        animation-play-state: paused;
    }


    @-webkit-keyframes mymove {
        from {
            left: 0px;
        }

        to {
            left: 100px;
        }
    }

    @keyframes mymove {
        from {
            left: 0px;
        }

        to {
            left: 100px;
        }
    }
</style>
<html>

<body>

    <p>Convert Me into Parking slots</p>

    <button id="myBtn1">play</button>

    <p id="demo"></p>

    <script>
        document.getElementById("myBtn1").addEventListener("click", displayInfo);


        function displayInfo() {
            document.getElementById("demo").innerHTML = "welcome to prePaidCarking \n you will have to choose a parking spot that is not grayed out \n click on the tiles";

        }
        var parkingSlot_array = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24'];
        var memory_values = [];
        var parking_spot_ids = [];
        var spotsNotOpen = 0;
        
        function newBoard() {
            spotsNotOpen = 0;
            var output = '';
            
            for (var i = 0; i < parkingSlot_array.length; i++) {
                output += '<div id="spot_' + i + '" onclick="markSpot(this,\'' + parkingSlot_array[i] + '\')"></div>';
            }
            document.getElementById('parking_board').innerHTML = output;
        }
        function markSpot(spot, val) {
            if (spot.innerHTML == "" && memory_values.length < 2) {
                spot.style.background = '#FFF';
                spot.innerHTML = val;
                if (memory_values.length == 0) {
                    memory_values.push(val);
                    memory_spot_ids.push(spot.id);
                } else if (memory_values.length == 1) {
                    memory_values.push(val);
                    parking_slot_ids.push(tile.id);
                    if (/*MAKE THIS TRUE IF USER WANTS PARKING SPOT*/) {
                        spotsNotOpen++; // counter for spots taken
                        // Clear both arrays
                        memory_values = [];
                        parking_slot_ids = [];
                        // Check to see if the whole board is cleared
                        if (spotsNotOpen == parkingSlot_array.length) {
                            alert("All Parking Spots are taken");// all spots are filled
                        }
                    } else {
                        function returnSpot() { // NOT SURE HOW TO IMPLEMENT MIGHT DELETE THIS
                            // Flip the 2 tiles back over
                            var tile_1 = document.getElementById(parking_slot_ids[0]);
                            var tile_2 = document.getElementById(parking_slot_ids[1]);
                            tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
                            tile_1.innerHTML = "";
                            tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
                            tile_2.innerHTML = "";
                            // Clear both arrays
                            memory_values = [];
                            parking_slot_ids = [];
                        }
                        setTimeout(flip2Back, 700);
                    }
                }
            }
        }
    </script>
    <div id="parking_board"></div>
    <script>newBoard();</script>
</body>

</html>