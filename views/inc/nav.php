</head>
<body>
<?php
if(isset($_COOKIE[''])){ ?>
    <nav>

    </nav>
<?php }else{ ?>
    <nav>
        <ul>
            <li>
                <a href="" id="logo">
                    <img src="<?= $host ?>asset/img/logo3.png" alt="logo citroen" id="logo">
                </a>
            </li>
            <li>
                <div class="search">

                    <button id="btnx">X</button>
                    <input type="text" id="search" placeholder="Rechercher">
                </div>
            </li>
            <li>
                <a href="">
                    Accueil
                </a>
            </li>
            <li>
                <a href="">
                    Pieces
                </a>
            </li>
            <li>
                <a href="">
                    Contact
                </a>
            </li>
            <li>
                <div>
                    <div>
                        <a href="">connexion</a>
                    </div>
                    <div>
                        <a href="">inscription</a>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="sousMenu">
            <li>categori</li>
            <li>categori</li>
            <li>categori</li>
        </ul>
    </nav>
<?php } ?>