<?php

require "GitHubApi.php";

use GitHubApi\GitHubApi as GitHubApi;


$gitHubApi = new GitHubApi();
$gitData = $gitHubApi->getGitHubApiData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment</title>
    <style>
        .list li{
            list-style: none;
            width: 20%;
            float: left;
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            overflow: hidden;
            height: 75px;
            color: #0366d6;
        }
        .list li span{
            display: block;
            font-size: 12px;
            padding: 10px 0;
            color: #000;
        }
    </style>
</head>
<body>
<div class="list">
    <ul>
        <?php

        foreach ($gitData as $data)
        {
            echo "<li>".$data['name']."<span>".$data['description']."</span></li>";
        }

        ?>
    </ul>
</div>
</body>
</html>