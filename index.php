<?php

session_start();

require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';

?>

<!-- HTML -->

<div class="style1">

    <h1>HTML</h1>
    
    <img src="" alt="">
    
    <p>HTML</p>
    <p>CSS</p>
    <p>JAVASCRIPT</p>
    <p>PHP</p>

    <div>
        <button>
            HTML
        </button>
        
        <button>
            CSS
        </button>
        <!-- Choix Style -->
        <div>
            <button>style1</button>
            <button>style2</button>
        </div>
        
        <button>
            JAVASCRIPT
        </button>
          <!-- Choix Function -->
          <div>
            <button>function1</button>
            <button>function2</button>
        </div>
        
        <button>
            PHP
        </button>
    </div>
</div>

<!-- A rajouter -->
    <!-- Login coté view -->
    <!-- Sign up coté view -->

<?php
// require_once 'controllers/router.php';

require_once 'views/templates/footer.php';

