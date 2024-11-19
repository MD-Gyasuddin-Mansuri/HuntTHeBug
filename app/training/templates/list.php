<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hunt The Bug</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .section-title {
            font-size: 22px;
            margin-top: 30px;
            font-weight: bold;
        }
        .row {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Hunt The Bug</h1>
            <h5 class="text-center">Just like the title says, <i>Hunt The Bug</i> So go for it!!!</h5>

            <?php
            $host = str_replace("www.", "", $_SERVER["HTTP_HOST"]);
            $sections = [
                "WWW" => ["www"],
                "XSS" => ["xss", "xss2", "xss3", "xss4"],
                "OR" => ["or1", "or2"],
                "CSRF" => ["csrf"],
                "IDOR" => ["idor"],
                "LFI" => ["lfi"],
                "SQLI" => ["sqli", "sqli2"],
                "SSRF" => [
                    "ssrf",
                    "ssrf2",
                    "ssrf3",
                    "ssrf4",
                    "ssrf5",
                    "ssrf6",
                    "ssrf7",
                ],
                "XXE" => ["xxe", "xxe2"],
                "UPLOAD" => ["upload", "upload2"],
                "RCE" => ["rce", "rce2", "rce3"],
                // Add other sections here, e.g. "CSRF" => ["csrf1", "csrf2"], etc.
            ];

            foreach ($sections as $title => $levels) { ?>
                <h3 class="section-title"><?php echo $title; ?></h3>
                <div class="row">
                    <?php foreach ($levels as $module) { ?>
                        <div class="col-md-4">
                            <div class="card">
                                <h4 class="card-title"><?php echo strtoupper(
                                    $module
                                ); ?></h4>
                                <a href="http://<?php echo $module .
                                    "." .
                                    $host; ?>" target="_blank" class="btn btn-primary">Go to Level</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
