
<html>
    <h1>The LOG</h1>
<head>
    <title>The League</title>
</head>
    <script src="angular.min.js"></script>
    <script src="jQuery.js"></script>
<script>
    function Team($scope){
        $scope.teamName = "Barcelona"
        $scope.gamesWon = 5;
        $scope.gamesDrawn = 2;
        $scope.gamesLost = 1;
    }
    var myApp = angular.module("myApp",[]);
    myApp.controller("Team",Team);
</script>
<body >
    <div id="teamScreen" ng-app="myApp">
        <form class="frm" id="form" method="POST" action="handle.php" ng-controller="Team">
            TemaName    <h2><input class="inp" type="text" name="Name" ng-model="teamName" required></h2>
            GamesWon    <h2><input class="inp" type="int" name="Won" ng-model="gamesWon" required></h2>
            GamesDrawn  <h2><input class="inp" type="int" name="Drawn" required></h2>
            GamesLost   <h2><input class="inp" type="int" name="Lost" required></h2>
            </br>
            <input class="allButs" type="submit" name="submit" id="submit" value="submit"></br>
        <div id="divteamName">{{teamName}}</div></br>
        <div id="divgamesWon">{{gamesWon}}</div>
        </form>
    </div>
        
</body>
</html>