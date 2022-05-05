<?php
function createGameLog($game_players, $game_number, $total_kills)
{
    foreach ($game_players as $player) {
        $index = array_search($player, $game_players);
        if ($game_players[$index]["kills"] === -1 || $game_players[$index]["kills"] < 0) {
            $game_players[$index]["kills"] = 0;
        }
    }

    $game = array(
        "game" => $game_number,
        "status" => [
            "total_kills" => $total_kills,
            "players" => [array_unique($game_players, SORT_REGULAR)]
        ]
    );

    return $game;
}

$file = fopen("Quake.txt", "r+") or die("Unable to open file!");

$sessionGames = array();

$game_number = 1;
$total_kills = 0;
$game_players = [];
$initGame = 0;


while (!feof($file)) {
    $line = fgets($file);
    $keep_line = $line;
    $line = explode(" ", $line);

    if (in_array("Kill:", $line)) {
        $total_kills++;
        foreach ($game_players as $player) {
            if ($line[6] == $player["name"] || $line[7] == $player["name"]) {
                $index = array_search($player, $game_players);
                $game_players[$index]["kills"]++;
            }
            if ($line[4] === "1022" && $line[9] == $player["name"]) {
                $index = array_search($player, $game_players);
                $game_players[$index]["kills"]--;
            }
        }
    }

    if (in_array("InitGame:", $line)) {
        $initGame += 1;
        !empty($game_players) && count($game_players) > 2 ? array_push($sessionGames, createGameLog($game_players, $game_number, $total_kills)) : $game_number--;
        if ($initGame >= 2) {
            $initGame = 0;
            if (count($game_players) < 1) {
                $sessionGames = [];
            }
        }
        $game_number += 1;
        $total_kills = 0;
        $game_players = [];
    }

    if (in_array("ClientUserinfoChanged:", $line)) {
        $index_id = array_search("ClientUserinfoChanged:", $line) + 1;
        $player_id = $line[$index_id];

        $player_name = explode("\\", $keep_line);
        $player_name = $player_name[1];


        $player = ["id" => $player_id, "name" => $player_name, "kills" => -1, "old_names" => []];

        foreach ($game_players as $this_player) {
            if ($this_player["name"] != $player["name"] && $this_player["id"] == $player["id"]) {
                $player_index = array_search($this_player, $game_players);
                $player = ["id" => $player_id, "name" => $player_name, "kills" => $this_player["kills"], "old_names" => [$this_player["name"]]];
               
                $game_players[$player_index] = $player;
            }
        }
       
        array_push($game_players, $player);
       
    }
}

$convert = json_encode($sessionGames, JSON_PRETTY_PRINT);

echo '<pre>';
print_r($convert);
echo '</pre>';

fclose($file);

$json_output = fopen('quake_logs.json', 'w');

fwrite($json_output,$convert);
