<style>
    #box

    {
        width:100%;
        color:white;
        box-shadow:10px 10px 10px gray;
        margin:auto;
        margin-top:9px;
        padding:20px;
        font-family:arial black;
        font-size:20px;
        background:black;
    }



    ol li
    {
        display:inline;
        padding:20px;
    }


    ol li :hover
    {
        color:red;
    }

    </style>


<?php

function topheader()

{
    $cname = "PHP";
    $today = date("d-m-y");

    echo "<div id='box'>
    <span style='text-align:right;display:inline-block;width:50%;background:ed'>$cname</span>

     <span style='text-align:left;display:inline-block;width:46%;background:green'>$today</span>
     

     </div>";

}


function setbackgroundcolor($c="gray")

{

    echo "<body style='background:$c'>";
}

function createmenu($type="vertical")

{
    if($type=="vertical")

    {

        echo "<ol style='list-style:none'>
         <li><a href='#'>1</a></li>
         <li><a href='#'>2</a></li>
         <li><a href='#'>3</a></li>
         <li><a href='#'>4</a></li> </ol>";

        
    }

    else
    {
        echo "<ol style='display:inline-block;padding:20px;list-style:none'>
        <li><a href='#'>4</a></li>
         <li><a href='#'>3</a></li>
         <li><a href='#'>2</a></li>
         <li><a href='#'>1</a></li> </ol>";
    }

}


?>