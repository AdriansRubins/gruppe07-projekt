<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-free-6.1.0-web/css/.brands.css">
    <link rel="stylesheet" href="../../css/headerstyle.css">
    <link rel="stylesheet" href="../../css/footerstyle.css">
    <link rel="stylesheet" href="../../css/servicestyle.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Auto-care!</title>

</head>
<body>
<?php
$currentPage = 'leistungen';
include ('../templates/header.php');
?>
<div id="servicesgrid">
        <div id="showcaseservice">
            <h1 id="expservice">Leistungen</h1>
        </div>
    </div>
</div>
<div class="container">
    <div id="card1">
        <div class="card-logo">
            <svg xmlns="http://www.w3.org/2000/svg" class="card-svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 13.616v-3.232c-1.651-.587-2.694-.752-3.219-2.019v-.001c-.527-1.271.1-2.134.847-3.707l-2.285-2.285c-1.561.742-2.433 1.375-3.707.847h-.001c-1.269-.526-1.435-1.576-2.019-3.219h-3.232c-.582 1.635-.749 2.692-2.019 3.219h-.001c-1.271.528-2.132-.098-3.707-.847l-2.285 2.285c.745 1.568 1.375 2.434.847 3.707-.527 1.271-1.584 1.438-3.219 2.02v3.232c1.632.58 2.692.749 3.219 2.019.53 1.282-.114 2.166-.847 3.707l2.285 2.286c1.562-.743 2.434-1.375 3.707-.847h.001c1.27.526 1.436 1.579 2.019 3.219h3.232c.582-1.636.75-2.69 2.027-3.222h.001c1.262-.524 2.12.101 3.698.851l2.285-2.286c-.744-1.563-1.375-2.433-.848-3.706.527-1.271 1.588-1.44 3.221-2.021zm-12 2.384c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z"/>
            </svg>
        </div>
        <h2 class="card-header">Inspektion</h2>
        <p class="card-content">Fahrzeugdiagnosen werden mit modernster Technik durchgeführt</p>
    </div>
    <div id="card2">
        <div class="card-logo">
            <svg xmlns="http://www.w3.org/2000/svg" class="card-svg" width="511.995px" height="511.995px" viewBox="0 0 511.995 511.995">
                <path d="M497.941,14.057c18.75,18.75,18.719,49.141,0,67.891l-22.625,22.625L407.41,36.682l22.625-22.625   C448.784-4.677,479.191-4.693,497.941,14.057z M158.534,285.588l-22.609,90.5l90.5-22.625l226.266-226.266l-67.906-67.891   L158.534,285.588z M384.003,241.15v206.844h-320v-320h206.859l63.983-64H0.003v448h448v-334.86L384.003,241.15z"/>
            </svg>
        </div>
        <h2 class="card-header">Hauptuntersuchung</h2>
        <p class="card-content">Regelmäßige Termine zur Haupt- und Abgasuntersuchung stehen für Sie bereit.</p>
    </div>
    <div id="card3">
        <div class="card-logo">
            <svg xmlns="http://www.w3.org/2000/svg" class="card-svg" viewBox="0 0 297 297">
                <circle cx="148.5" cy="105.447" r="17.221"/>
                <path d="M202.283,122.668c0-68.971-50.149-119.913-52.284-122.047C149.599,0.222,149.066,0,148.5,0s-1.099,0.222-1.501,0.622   c-2.133,2.133-52.282,53.075-52.282,122.046v68.885c0,16.434,7.428,31.147,19.082,41.019c4.56-14.835,18.39-25.651,34.701-25.651   c16.321,0,30.155,10.828,34.708,25.677c11.659-9.872,19.075-24.605,19.075-41.044V122.668z M148.5,133.266   c-15.34,0-27.819-12.478-27.819-27.818c0-15.34,12.479-27.819,27.819-27.819s27.819,12.479,27.819,27.819   C176.319,120.787,163.84,133.266,148.5,133.266z"/>
                <path d="M148.5,223.876c-10.665,0-19.341,8.676-19.341,19.341c0,4.58,4.552,21.068,17.379,52.466   c0.328,0.8,1.097,1.317,1.962,1.317s1.634-0.518,1.961-1.317c12.828-31.397,17.38-47.886,17.38-52.466   C167.841,232.552,159.165,223.876,148.5,223.876z"/>
                <path d="M224.879,218.502l-8.174-8.174c-4.366,15.828-14.114,29.442-27.139,38.761v11.349c0,2.811,1.116,5.506,3.104,7.494   l17.221,17.222c2.028,2.027,4.738,3.104,7.496,3.104c1.365,0,2.743-0.264,4.054-0.806c3.96-1.641,6.542-5.506,6.542-9.792v-51.663   C227.982,223.185,226.866,220.49,224.879,218.502z"/>
                <path d="M80.295,210.328l-8.174,8.174c-1.987,1.988-3.104,4.683-3.104,7.494v51.663c0,4.286,2.582,8.151,6.542,9.792   c1.311,0.542,2.688,0.806,4.054,0.806c2.758,0,5.468-1.076,7.496-3.104l17.221-17.222c1.987-1.988,3.104-4.683,3.104-7.494v-11.336   C94.407,239.781,84.66,226.161,80.295,210.328z"/>
            </svg>
        </div>
        <h2 class="card-header">Card Header</h2>
        <p class="card-content">Content 3</p>
    </div>
    <div id="card4">
        <h2 class="card-header">Card Header</h2>
        <p class="card-content">Content 4</p>
    </div>
    <div id="card5">
        <h2 class="card-header">Card Header</h2>
        <p class="card-content">Content 5</p>
    </div>
    <div id="card6">
        <h2 class="card-header">Card Header</h2>
        <p class="card-content">Content 6</p>
    </div>
</div>
<?php
    include ('../templates/footer.php');
?>
</body>
</html>


