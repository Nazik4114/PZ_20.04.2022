<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>RGB-Calculator</title>
    </head>
    <style>
        .clear
        {
            clear: both;
        }
        .col{
            float: left;
            border:1px black solid;
            width: 30px;
            height: 30px;
        }
    </style>
    <body>
        <div class="container">
            <h1 class="mb-3">Change bg.</h1>
            <div class="row"> 
            <?php

            if(isset($_GET['r'])){
                $r=$_GET['r'];
            }
                else{
                $r=255;
            }
                if(isset($_GET['g'])){
                $g=$_GET['g'];
            }
            else{
                $g=255;
            }
            if(isset($_GET['b'])){
                $b=$_GET['b']; 
            }
            else{
                $b=255;
            }

            if(isset($_GET['col'])){
                $Col=$_GET['col'];
            }
            else{
                $Col=0;
            }
            if(isset($_GET['row'])){
                $Row=$_GET['row'];
            }
            else{
                $Row=0;
            }
                ?>   
                <div class="col-3 rounded p-2" style="background-color: rgb(<?= $r ?>,<?= $g ?>,<?= $b ?>)">
                    <form method="" action="" enctype="application/x-www-form-urlencoded">
                        <div class="mb-3">
                            <label for="r" class="form-label">R</label>
                            <input type="number" name="r" value="" id="r" class="form-control" placeholder="R-value" min="0" max="255">
                        </div>
                        <div class="mb-3">
                            <label for="g" class="form-label">G</label>
                            <input type="number" name="g" value="" id="g" class="form-control" placeholder="G-value" min="0" max="255">
                        </div>
                        <div class="mb-3">
                            <label for="b" class="form-label">B</label>
                            <input type="number" name="b" value="" id="b" class="form-control" placeholder="B-value" min="0" max="255">
                        </div>
                        <div class="mb-3">
                            <label for="col" class="form-label">Col</label>
                            <input type="number" name="col" value="" id="col" class="form-control" placeholder="Col-value" min="0" max="50">
                        </div>
                        <div class="mb-3">
                            <label for="row" class="form-label">Row</label>
                            <input type="number" name="row" value="" id="row" class="form-control" placeholder="Row-value" min="0" max="50">
                        </div>
                        <input type="submit" name="go" class="btn btn-primary" value="Change background!"></input>
                    </form>
                </div>
            </div>
            <br>
            <br>
        </div>
        <div style="margin-left: 100px;">
        <?php for($i=1;$i<=$Row;$i++)
        {
            for($j=1;$j<=$Col;$j++)
            {
               ?>
<div class="col" style="background-color: rgb(<?= $r ?>,<?= $g ?>,<?= $b ?>); color:red"></div>
               <?php
            }
            ?>
            <div class="clear"></div>
            <?php
        }
        
        
        ?>
        </div>
        <!-- JS includes -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>