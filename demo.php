<?php
          if (isset($_SESSION['auth'])) {
            echo 'Admin ' . $_SESSION['auth_user']['name'];
            // var_dump($_SESSION);
          } else {
            echo 'Not Login';
          }
          ?>